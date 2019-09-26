<?php 

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = MD5($_POST['pass']);
$email = $_POST['email'];

include 'koneksi.php';

$query = mysqli_query($koneksi, "INSERT INTO user (id, nama, username, password, email) VALUES (NULL, '$nama', '$username', MD5('$password'), '$email')");
if( !$query ){
    die("Gagal insert " .mysqli_error($koneksi));
}
header("location:index.php");
?>