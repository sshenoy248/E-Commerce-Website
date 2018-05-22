<?php
header( "refresh:5;url=login.html" );

$servername = "localhost";
$username = "root";
$password = "mysql";
$database = "WillyWonkaWorldWide";
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sortType = $_POST['sorting'];
$page = $_POST['page'];

// if($page== 'chocolate'){
//   $categoryID=1;
// } else if($page== 'nuts'){
//   $categoryID=2;
// } else if($page== 'caramel'){
//   $categoryID=3;
// } else if($page== 'gummy'){
//   $categoryID=4;
// } else if($page== 'hard'){
//   $categoryID=5;
// } else if($page== 'fruity'){
//   $categoryID=6;
// } else if($page== 'minty'){
//   $categoryID=7;
// } else if($page== 'licorice'){
//   $categoryID=8;
// } else if($page== 'sour'){
//   $categoryID=9;
// }

if($sortType== 'Default'){
  header( "refresh:1;url=$page.php?sortType=$sortType" );
  echo "<p><h3><font color=\"blue\"><h2>View Your Sorted Items in a second!</h2></font></h3></p>";
} else if($sortType== 'popularity'){
  header( "refresh:1;url=$page.php?sortType=$sortType" );
  echo "<p><h3><font color=\"blue\"><h2>View Your Sorted Items in a second!</h2></font></h3></p>";
} else if($sortType== 'lowToHigh'){
  header( "refresh:1;url=$page.php?sortType=$sortType" );
  echo "<p><h3><font color=\"blue\"><h2>View Your Sorted Items in a second!</h2></font></h3></p>";
} else if($sortType== 'highToLow'){
  header( "refresh:1;url=$page.php?sortType=$sortType" );
  echo "<p><h3><font color=\"blue\"><h2>View Your Sorted Items in a second!</h2></font></h3></p>";
}

?>
