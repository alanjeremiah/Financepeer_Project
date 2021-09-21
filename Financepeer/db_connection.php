
<!-- Follow the bellow code for connection to database -->

<?php

$connect = new mysqli("localhost","root","","finance_peer");

if($connect -> connect_error) {
  header("Location: error.php");
} else {
  //some code
}
?>
