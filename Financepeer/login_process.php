<<?php
  include('db_connection.php');
  session_start();
  $number = $_POST['Number'];
  $password = $_POST['Password'];
  $sql = "SELECT * FROM user WHERE num = '$number' AND pwd = '$password'";
  $result = $connect -> query($sql);
  $row = $result -> fetch_assoc();
  if ($row == 0) {
    //invalid user;
    echo "invalid user";
  } else {
    $_SESSION["username"] = $row['name'];
    $_SESSION["uid"] = $row['num'];
    header("Location: home.php");
  }
 ?>
