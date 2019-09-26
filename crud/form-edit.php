<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>edit</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"select * from user where id='$id'");
        while($d = mysqli_fetch_array($data)){
	?>
   <form method="post" action="proses-edit.php">
        <h1>Form edit</h1>
        <label>
            <p class="label-txt">Nama</p>
            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
            <input type="text" class="input" name="nama" required="required" value="<?php echo $d['nama']; ?>">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label>
            <p class="label-txt">USERNAME</p>
            <input type="text" class="input" name="username" required="required" value="<?php echo $d['username']; ?>">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label>
            <p class="label-txt">PASSWORD</p>
            <input type="password" class="input" name="pass" required="required" value="<?php echo $d['password']; ?>">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label>
            <p class="label-txt">EMAIL</p>
            <input type="email" class="input" name="email" required="required" value="<?php echo $d['email']; ?>">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <button type="submit">submit</button>
    </form>
    <?php 
	}
	?>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/register.js"></script>
</body>
</html>