
<?php include('db_connection.php');
session_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="SignUp.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="Login.php">Login</a></li>
        </ul>
      </nav>
    </header>
    <div class="SignUp">
      <br>
      <p class="head">Sign Up</p>
      <form class="signUpForm" action="signup_process.php" onsubmit="return validate()" method="post">
        <label for="Name"> Name</label><br>
        <input type="text" name="Name" id="name" value="" placeholder="Name" required ><span id="n_error" class="error">x</span><br>
        <label for="Email"> Email</label><br>
        <input type="email" name="Email" id="email" value="" placeholder="Email" required >  <span id="e_error" class="error">x</span><br>
        <label for="Password">Password</label><br>
        <input type="password" name="Password" id="pwd" value="" placeholder="Password" required><span id="p_error" class="error">x</span><br>
        <label for="Number"> Number</label><br>
        <input type="text" name="Number" value="" id="number" placeholder="Mobile Number" required><span id="m_error" class="error">x</span><br>
        <button type="submit" name="SignUp"> SignUp</button>
        <p class ="foot">Already registered? <a href="Login.php"> Login </a></p>
      </form>
    </div>

    <script type="text/javascript">






        function validate() {
          var name = document.getElementById('name');
          var email = document.getElementById('email');
          var pwd = document.getElementById('pwd');
          var num = document.getElementById('number');
          // var mailformat = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
          var test = 0;


          // if (name.value == "") {
          //     document.getElementById('name').style.border = "solid 1px red";
          //     document.getElementById('name').placeholder ="Enter a valid name";
          //     document.getElementById('n_error').style.display = "inline-block";
          //     test++;
          // }
          alert(email.value);
          if (email.value == "") {
            document.getElementById('email').style.border = "solid 1px red";
            document.getElementById('email').placeholder ="Enter a valid email address";
            document.getElementById('e_error').style.display = "inline-block";
            test++;
          }
          if (pwd.value.length < 8) {
            document.getElementById('pwd').style.border = "solid 1px red";
            document.getElementById('pwd').placeholder ="Use atleast 8 characters.";
            document.getElementById('p_error').style.display = "inline-block";
            test++;
          }
          // alert(num.value.length);
          if (num.value.length != 10) {
            document.getElementById('number').style.border = "solid 1px red";
            document.getElementById('number').placeholder ="Enter a valid number";
            document.getElementById('m_error').style.display = "inline-block";
            test++;
          }

          if(test > 0) {
            return false;
          }

          return true;
        }
    </script>
  </body>
</html>
