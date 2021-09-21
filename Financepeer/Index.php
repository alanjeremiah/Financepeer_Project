<?php
include('db_connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Index.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="Login.php">Login</a></li>
          <li><a href="SignUp.php">Register</a></li>
        </ul>
      </nav>
    </header>
    <div class = "background">
      <img src = "IndexBackground.jpg">
    </div>
    <div class="message">
      <p class="firstline">Looking for a place to Store your files?</p>
    </div>
  </body>
</html>
