<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="Login.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
    </header>
    <div class="Login">
      <br>
      <p class="head">Login </p>
      <form class="logInForm" action="login_process.php" method="post">
        <label for="Number"> Number</label><br>
        <input type="text" name="Number" value="" placeholder="Mobile Number"><br>
        <label for="Password">Password</label><br>
        <input type="password" name="Password" value="" placeholder="Password"><br><br>
        <button type="submit" name="Login"> Login </button>
        <p class ="foot">New to CheckIn? <a href="SignUp.php"> Sign Up </a></p>
      </form>
    </div>
  </body>
</html>
