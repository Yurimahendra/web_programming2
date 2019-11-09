<?php 
    $email      = $_POST['email'];
    $username   = $_POST['username'];
    $pass       = MD5($_POST['pass']);

    include 'koneksi.php';

    $query = mysqli_query($connect, "insert into `register` (`id`, `email`, `username`, `password`) values (NULL, '$email', '$username', MD5('$pass')) " );

    header("location:proses_login.php");
?>