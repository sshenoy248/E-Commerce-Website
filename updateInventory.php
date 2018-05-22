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
$newQuantity = $_POST['updateQuantity'];

$sql = "UPDATE inventories SET quantity='$newQuantity' WHERE productID='$productID'";
$run = mysqli_query($conn, $sql) or die('error executing query');

header( "refresh:1;url=managerview.php" );
echo "<p><h3><font color=\"blue\"><h2>Updating inventory..</h2></font></h3></p>";

?>
