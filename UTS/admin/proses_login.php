<?php 

    $username      = $_POST['name'];
    $pass          = MD5($_POST['pass']);

    include 'koneksi.php';

    $user = mysqli_query($connect, "SELECT * FROM register WHERE username= '$username' AND password = MD5('$pass')");
    $chek = mysqli_num_rows($user);
      
    if($chek > 0)
    {
        session_start();
        $row = mysqli_fetch_array($user);
        $_SESSION['nama_user']=$row['username'];
        header("location:hal_setelah_login/form_reservasi.php");
        exit;
    }else
    {
        
        header("location:login.php");
    }
?>