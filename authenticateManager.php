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

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT managers.managerID FROM `staff` JOIN managers on managers.staffID = staff.staffID WHERE staff.username= '$username' AND staff.password='$password';";
$run = mysqli_query($conn, $sql) or die('error executing query');

  if (mysqli_num_rows($run) == 0) {
      header( "refresh:3;url=login.html" );
      echo "<p><h3><font color=\"red\">You are not an authorized manager. Please login as a customer. Redirecting..</font></h3></p>";
  } else   {
    while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){
      $managerID = $row['managerID'];

      $sql2 = "UPDATE managers SET sessionActive=1 WHERE managerID=$managerID";
      $run2 = mysqli_query($conn, $sql2) or die('error executing query');
    }
      header( "refresh:1;url=managerview.php" );
      echo "<p><h2><font color=\"blue\">Welcome.</font></h2></p>";

  }

?>
