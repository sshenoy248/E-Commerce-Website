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

$sql = "SELECT email,password FROM customers WHERE email= '$email' AND password= '$password'";
$run = mysqli_query($conn, $sql) or die('error executing query');

  if (mysqli_num_rows($run) == 0) {
      header("refresh:3;url=login.html" );
      echo "<p><h3><font color=\"red\">Username and password do not match our records. Try again...</font><h3></p>";
  } else   {
      $sql2= "UPDATE customers SET sessionActive=1 WHERE email='$email' AND password='$password'";
      $run2 = mysqli_query($conn, $sql2) or die('error executing query');
      header( "refresh:1;url=index.php" );
      echo "<p><h2><font color=\"blue\">Success! Logging in...</font><h2></p>";
  }

?>
