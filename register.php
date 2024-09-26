<?php
require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="login.css">
</head>

<body>
<div class="wrapper">
      <div class="title-text">
        <div class="title login">Register</div>
        <div class="title signup">Create Account</div>
      </div>

        <div class="form-inner">
          <form method="post" class="register">
            <div class="field">
              <input type="text" name="username" placeholder="enter username" required>
            </div>
            <div class="field">
              <input type="email" name="email" placeholder="enter your email" required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="enter your password" required>
            </div>
            
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="register" value="Register">
            </div>
            <div class="signup-link">Already have an account <a href="login.php">Login</a></div>
          </form>
        </div>
      </div>
    </div>
  <script  src="script.js"></script>

</body>
</html>
