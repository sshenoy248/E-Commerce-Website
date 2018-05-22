<?php

$servername = "localhost";
$username = "root";
$password = "mysql";
$database = "WillyWonkaWorldWide";
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$productID = $_POST['productID'];

$sql = "SELECT * FROM customers WHERE sessionActive=1";
$run = mysqli_query($conn, $sql) or die('error executing query');

  if (mysqli_num_rows($run) == 0) {
      header( "refresh:3;url=login.html" );
      echo "<p><h3><font color=\"red\">You need to be logged in to purchase. Redirecting..</font></h3></p>";
  } else if($productID == null)  {
      header( "refresh:1;url=Cart.php" );
      echo "<p><h3><font color=\"blue\">You'll see your cart in a second! Redirecting..</font></h3></p>";
  } else {
      $sql = "SELECT customerID FROM customers WHERE sessionActive=1";
      $run = mysqli_query($conn, $sql) or die('error executing query 1');

      $sql2 ="SELECT price.price FROM `product` JOIN price on product.priceID = price.priceID WHERE productID=$productID";
      $run2 = mysqli_query($conn, $sql2) or die('error executing query 2');

      while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){
        $customerID = $row['customerID'];
        while($row = mysqli_fetch_array($run2, MYSQLI_ASSOC)){
            $price = $row['price'];
            $totalAmount= $price*1;

            $sql3 = "INSERT INTO carts(customerID, productID, quantity, price,totalAmount) VALUES('$customerID', '$productID', '1', '$price','$totalAmount')";
            $run3 = mysqli_query($conn, $sql3) or die('error executing query 3');
          }
        }

      header( "refresh:2;url=Cart.php" );
      echo "<p><h3><font color=\"blue\">You'll see your cart in a second! Redirecting..</font></h3></p>";
  }

?>
