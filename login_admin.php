<?php
// session_start();
// if(isset($_SESSION['admin_username'])) {
//     header('location: admin_depan.php');
// }


// mengarahkan ke halaman index jika sudah login
// if(isset($_SESSION["login"])) {
//   header("Location: home.php");
//   exit();
// }

require 'functions.php';

// include 'cek_login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
</head>

<body>

<div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Admin</div>
        <div class="title signup">Create Account</div>
      </div>

        <div class="form-inner">
          <form action="dasboard.html" method="post" class="login">
            <pre>
            </pre>
            <div class="field">
              <label for="username"></label>
              <input type="text" name="username" placeholder="enter username" required>
            </div>
            <div class="field">
              <label for="password"></label>
              <input type="password" name="password" placeholder="enter your password" required>
            </div>
            <div class="pass-link"><a href="#">Forget password?</a></div>
            <div class="pass-link"><a href="login.php">Login as user</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
             
            <input type="submit" name="login" value="Login">
            <!-- <button type="submit" name="login" class="input">Login</button> -->
             
            </div>
            <div class="signup-link">create an account <a href="register.php">Register now</a></div>
          </form>

        </div>
      </div>
    </div>
  <script  src="script.js"></script>

</body>
</html>
