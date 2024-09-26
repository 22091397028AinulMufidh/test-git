<?php


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
          <form method="post" class="login">
            <pre>
            </pre>
            <div class="field">
            <label for="email"></label>
              <input type="text" name="email" placeholder="email@example.com" required>
            </div>
            <div class="field">
              <label for="password"></label>
              <input type="password" name="password" placeholder="enter your password" required>
            </div>
            <div class="pass-link"><a href="#">Forget password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
             
            <input type="submit" name="login" value="Login">
             
            </div>
            <div class="signup-link">create an account <a href="register.php">Register now</a></div>
          </form>

        </div>
      </div>
    </div>
  <script  src="script.js"></script>

</body>
</html>
