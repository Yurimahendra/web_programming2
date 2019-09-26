<?php

$host = "localhost";
$user = "yuri";
$password = "Yuri_ma6";
$database = "crud";
$koneksi = mysqli_connect($host, $user, $password, $database);

if( !$koneksi ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>