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

$firstName = $_POST['FirstName'];
$lastName = $_POST['LastName'];
$accountType = $_POST['accountType'];
$address = $_POST['Address'];
$city = $_POST['City'];
$state = $_POST['State'];
$zipcode = $_POST['ZIPCode'];
$phoneNo = $_POST['PhoneNo'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql= "INSERT INTO address(address, city, state, zipCode, addressType) VALUES('$address', '$city', '$state', '$zipcode', 'customer')";
$run = mysqli_query($conn, $sql) or die('error executing query');

$sql2 = "SELECT addressID FROM address WHERE address= '$address' AND zipCode= '$zipcode'";
$run2 = mysqli_query($conn, $sql2) or die('error executing query');

while($row = mysqli_fetch_array($run2, MYSQLI_ASSOC)){
  $addressID = $row['addressID'];

  $sql3= "INSERT INTO customers(firstName,lastName, addressID, password, phoneNo,accountType, email) VALUES ('$firstName', '$lastName','$addressID','$password','$phoneNo','$accountType','$email')";
  $run3 = mysqli_query($conn, $sql3) or die('error executing query');
}

header( "refresh:1;url=login.html" );
echo "<p><h3><font color=\"blue\">You have been registered! Redirecting you to Login...</font></h3></p>";
?>
