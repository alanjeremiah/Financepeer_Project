<<?php
include('db_connection.php');
 session_start();
$name = $_POST['Name'];
$email = $_POST['Email'];
$pwd = $_POST['Password'];
$number = $_POST['Number'];
$sql = "INSERT INTO user(`name`,`email`,`pwd`,`num`) VALUES ('$name','$email','$pwd','$number')";
$result = $connect -> query($sql);
if ($result == 0) {
  echo "data could not be added to the database";
} else {
  $_SESSION['username'] = $name;
  $_SESSION["uid"] = $number;
  header("Location: home.php");
}
 ?>
