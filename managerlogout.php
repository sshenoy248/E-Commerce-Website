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

$email = $_POST['email'];
$password = $_POST['password'];

$sql= "UPDATE managers SET sessionActive=0 WHERE sessionActive=1";
$run = mysqli_query($conn, $sql) or die('error executing query');

      header( "refresh:1;url=index.php" );
      echo "<p><h2><font color=\"red\">Logging out...</font></h2></p>";

?>
