<?php 
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = MD5($_POST['pass']);
$email = $_POST['email'];

include 'koneksi.php';

$query = mysqli_query($koneksi, "update user set nama='$nama', username='$username', password=MD5('$password'), email='$email' where id='$id'");
if( !$query ){
    die("Gagal edit " .mysqli_error($koneksi));
}
header("location:index.php");
?>