<?php

require 'koneksi.php';

if( isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    // var_dump($_POST["username"]);
    // var_dump($_POST["password"]);
    // die();

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

    //cek username
    if( mysqli_num_rows($result) === 1){
        //cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"])){
            header("Location: index.php");
            exit;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Halaman Login </title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
<script src="script.js" defer> </script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<?php
    if(isset($_POST['login'])){
      $username=$_POST["username"];
      $password=$_POST["password"];
    
      $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' and password = '$password'");
    
        //cek username
        if( mysqli_num_rows($result) === 1){
            //cek password
                header("Location: index.php");
                //exit;
            }else{
            echo"<script>
        alert('Username atau Password yang anda masukkan salah!');
        </script>";
        }
    }
?>

    <img class="bg" src="image/bg.png" alt="">
    <div class="container">
        <div class="imgprofil">
            <img src="image/imge.svg">
        </div>
        <div class="login-content">
            <form action="" method="POST">
                <img src="image/avatar.svg">
                <h2>Login Page</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Username</h5>
                        <input class="input" type="text" name="username">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa=lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input class="input" type="password" name="password">
                    </div>
                </div>
                <a href="regis.php">Register Here</a>
                <input type="submit" class="btn" value="Login" name="login">
            </form>
        </div>
    </div>
    <script type="text/javasript" src="script.js"></script>
</body>
</html>