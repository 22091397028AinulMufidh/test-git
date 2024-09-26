<?php

$koneksi = mysqli_connect('localhost','root','','db_users');

// Register
if(isset($_POST['register'])) {
    // jika tombol login diklik
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Enkripsi Password
    $epassword = password_hash($password, PASSWORD_DEFAULT);

    // insert to db
    $insert = mysqli_query($koneksi,"INSERT INTO users (username, email,password) values('$username', '$email', '$epassword')");

    if($insert){
        header('Location: login.php'); //ke halaman login
    } else {
        echo '<script>
                alert("Gagal Register");
                window.location.href="register.php";
            </script>';
    }
}

// Login
if(isset($_POST['login'])) {
    // jika tombol login diklik
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; //password belum dienkripsi

    // insert to db
    $cekdb = mysqli_query($koneksi,"SELECT * FROM users where email='$email' or username = '$username'");
    $hitung = mysqli_num_rows($cekdb);
    $pw = mysqli_fetch_array($cekdb);
    $passwordsekarang = $pw['password'];

    if($hitung>0){
        // verifikasi password
        if(password_verify($password,$passwordsekarang)) {
            // jika password benar  
            session_start();
            $_SESSION['user_id'] = $row['id_user'];
            $_SESSION['username'] = $row['username'];

            header('Location: home.php');
        } else {
            // jika password salah
            echo '<script>
                alert("Woops! Email or Password is Wrong.");
                window.location.href="login.php";
            </script>';
        }

    } else {
        echo '<script>
                alert("Gagal Login");
                window.location.href="login.php";
            </script>';
    }
}




?>