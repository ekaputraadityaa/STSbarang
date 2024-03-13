<?php
require_once('koneksi.php');
session_start(); 
$_SESSION['status'] = ""; 
if ($_SESSION['status']=="login") {
    header("location:index.php");
}else{
    if (isset($_POST['submit'])) { 
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (Login($_POST['username'], $_POST['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['status'] = "login"; 
            if ($_SESSION['role']=="admin") {  
                header("location:dashboard.php");
            }else{
                header("location:member.php"); 
            }
        } else {
            header("location:login.php?msg=gagal"); 
        }
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
        <form action="" method="Post" class="col-4 h-75 bg-dark p-3 d-flex flex-column align-items-center">
            <h1 class="text-light mt-3 pb-4">Login</h1>
            <input class="w-75 h-auto mt-5 p-2 rounded-pill border-0" type="text" placeholder="Masukan Username" name="username">
            <input class="w-75 mt-4 p-2 rounded-pill border-0" type="password" placeholder="Masukan Password" name="password">
            <button class="w-75 mt-4 p-2 rounded border border-dark bg-primary text-dark font-weight-bold" name="submit">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>