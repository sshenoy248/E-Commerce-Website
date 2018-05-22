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

$cardType = $_POST['cardType'];
$creditCardNo = $_POST['creditCardNo'];
$transactionDate = $_POST['transactionDate'];
$totalTransactionPrice= $_GET['totalTransactionPrice'];

$sql = "SELECT customerID FROM customers WHERE sessionActive=1";
$run = mysqli_query($conn, $sql) or die('error executing query');

  if (mysqli_num_rows($run) == 0) {
      header( "refresh:2;url=login.html" );
      echo "<p><h3><font color=\"red\">You need to be logged in to purchase..</font></h3></p>";
  } else {
      while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){
        $customerID = $row['customerID'];

        $sql2 = "INSERT INTO transactions(customerID, paymentMethod, creditCardNo, transactionDate,amount) VALUES('$customerID', '$cardType', '$creditCardNo', '$transactionDate','$totalTransactionPrice')";
        $run2 = mysqli_query($conn, $sql2) or die('error executing query 2');

        $sql3 = "SELECT transactionID FROM transactions WHERE customerID='$customerID' AND transactionDate='$transactionDate' AND creditCardNo='$creditCardNo'";
        $run3 = mysqli_query($conn, $sql3) or die('error executing query 3');

        while($row = mysqli_fetch_array($run3, MYSQLI_ASSOC)){
          $transactionID = $row['transactionID'];

          $sql4 = "SELECT * FROM carts";
          $run4 = mysqli_query($conn, $sql4) or die('error executing query 4');

          while($row = mysqli_fetch_array($run4, MYSQLI_ASSOC)){
            $productID = $row['productID'];
            $quantity = $row['quantity'];
            $price = $row['totalAmount'];

            $sql5 = "INSERT INTO orders(transactionID,productID,quantity,price) VALUES ('$transactionID','$productID','$quantity','$price')";
            $run5 = mysqli_query($conn, $sql5) or die('error executing query 5');

            $sql6="SELECT quantity from inventories where ProductID=$productID";
            $run6= mysqli_query($conn, $sql6) or die('error executing query 6');

            while($row = mysqli_fetch_array($run6, MYSQLI_ASSOC)){
              $maxQuantity = $row['quantity'];
              $newQuantity= $maxQuantity-$quantity;

              $sql7 = "UPDATE inventories SET quantity=$newQuantity WHERE productID=$productID";
              $run7 = mysqli_query($conn, $sql7) or die('error executing query 7');
            }
          }
        }

        }
        $sql8 = "TRUNCATE TABLE carts";
        $run8 = mysqli_query($conn, $sql8) or die('error executing query 8');

        header( "refresh:3;url=index.php" );
        echo "<p><h3><font color=\"blue\"><h2>Your order has been placed successfully!</h2></font></h3></p>";
  }

?>
