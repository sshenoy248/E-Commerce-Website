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
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$totalAmount= $price*$quantity;

$sql = "UPDATE carts SET quantity='$quantity',totalAmount='$totalAmount' WHERE productID='$productID'";
$run = mysqli_query($conn, $sql) or die('error executing query');

header( "refresh:1;url=Cart.php" );
echo "<p><h2><font color=\"blue\">Updating Cart...</font></h2></p>";
?>
