<?php
// session_start();


// // mengarahkan ke halaman index jika sudah login
// if(isset($_SESSION["login"])) {
//   header("Location: index.php");
//   exit;
// }

require 'function.php';

// include("inc_koneksi.php");
// $username = "";
// $password = "";
// $err = "";
// if(isset($_POST['login'])) {
//   $username = $_POST['username'];
//   $password = $_POST['password'];
//   if($username == '' or $password == '') {
//     $err = "Username dan Password tidak boleh kosong!";
//   }
//   if(empty($err)) {
//     $sql1 = "select * from admin where username = '$username'";
//     $q1 = mysqli_query($koneksi,$sql1); 
//     $r1 = mysqli_fetch_array($q1);
//     if($r1['password'] != md5($password)) {
//       $err = "Account not found!";
//     }
//   }
//   if(empty($err)) {
//     $_SESSION['admin_username'] = $username;
//     header('location: admin_depan.php');
//     exit();
//   }
// }

// if(isset($_POST['login'])) {
//   $email = $_POST["email"];
//   $password = $_POST["password"];

//   $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email;");

//   // cek email
//   if(mysqli_num_rows($result) === 1) {

//     // cek password
//     $row = mysqli_fetch_assoc($result);
//     if(password_verify($password, $row["password"])) {
//       // set session
//       $_SESSION["login"] = true;

//       header("Location: login.php");
//       exit;
//     }
//   }
// }
// $error = true;
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
        <div class="title login">Login</div>
        <div class="title signup">Create Account</div>
      </div>

        <div class="form-inner">
          <form action="home.php" method="post" class="login">
            <pre>
            </pre>
            <div class="field">
              <label for="email"></label>
              <input type="email" name="email" placeholder="email@example.com" required>
            </div>
            <div class="field">
              <label for="password"></label>
              <input type="password" name="password" placeholder="enter your password" required>
            </div>
            <div class="pass-link"><a href="#">Forget password?</a></div>
            <div class="pass-link"><a href="login_admin.php">Login as admin</a></div>
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
