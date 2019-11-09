<?php 
  require_once "../koneksi.php";

  try {
    $con = new PDO ($koneksi);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  } catch (PDOException $e) {
    echo "Connection failed " . $e->getMessage();
  }

  if (isset($_POST['action'])) {
    if (($_POST['nama_wisata'] == "") || ($_POST['jenis_wisata'] == "") || ($_POST['alamat'] == "") || ($_POST['deskripsi'] == "") || ($_POST['harga_tiket'] == "") || ($_POST['gambar'] == "")){
      echo"";
    }
    else{
      $sql = "INSERT INTO wisata (nama_wisata, jenis_wisata, alamat, deskripsi, harga_tiket , gambar) VALUES (:nama_wisata, :jenis_wisata, :alamat, :deskripsi, :harga_tiket, :gambar)";

      $result = $con->prepare($sql);

      $result->bindParam(':nama_wisata', $nama, PDO::PARAM_STR);
      $result->bindParam(':jenis_wisata', $jenis, PDO::PARAM_STR);
      $result->bindParam(':alamat', $alamat, PDO::PARAM_STR);
      $result->bindParam(':deskripsi', $deskripsi, PDO::PARAM_STR);
      $result->bindParam(':harga_tiket', $harga, PDO::PARAM_INT);
      $result->bindParam(':gambar', $gambar, PDO::PARAM_STR);

      $nama = $_POST['nama_wisata'];
      $jenis = $_POST['jenis_wisata'];
      $alamat = $_POST['alamat'];
      $deskripsi = $_POST['deskripsi'];
      $harga = $_POST['harga_tiket'];
      $gambar = $_POST['gambar'];

      $result->execute();

      
    }
  }
  
  $con = null;

?>