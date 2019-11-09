

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="../images/parwis3.jpeg">
    <title>PARIWISATA</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="css/materialize.css">
    <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
</head>
<body> 
    <div class="row">
    <nav class="blue">
        <div class="nav wrapper">
            <div class="container">
                <a href="" class="brand-logo center">Admin</a>
                <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </div>
    </nav>
    </div>
            
    <div class="row"> 
        <div class="col col s12 m4 l3">
        <ul id="slide-out" class="sidenav sidenav-fixed">
            <li><div class="user-view">
              <div class="background">
                <img src="../images/nature.jpg">
              </div>
              <a href="#user"><img class="circle" src="../images/parwis.png"></a>
              <a href="#name"><span class="white-text name">John Doe<i class="material-icons">arrow_drop_down</i></span></a>
              <a href="#email"><span class="white-text email"></span></a>
            </div></li>
            <li><a href="#!"><i class="material-icons">dashboard</i>Dashboard</a></li>
            <li><a href="data_wisata.php"><i class="material-icons">event_note</i>Data Wisata</a></li>
        </ul>
        </div>
   

        <div class="col s12 m8 l9">
            <div class="container"> 
            <h3>Form Tambah Data Wisata</h3>  
            <form class="col s12" action="proses_input.php" method="post">
                <div class="row">
                  <div class="input-field col s9">
                    <input id="input_text" name="nama_wisata" type="text" data-length="10">
                    <label for="input_text">Nama Wisata</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s9">
                    <input id="input_text1" name="jenis_wisata" type="text" data-length="10">
                    <label for="input_text1">Jenis Wisata</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s9">
                    <input id="input_text5" name="alamat" type="text" data-length="50">
                    <label for="input_text5">Alamat</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s9">
                    <input id="input_text6" name="deskripsi" type="text" data-length="50">
                    <label for="input_text6">Deskripsi</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s9">
                    <input id="input_text3" name="harga_tiket" type="number" data-length="11">
                    <label for="input_text3">Harga Tiket</label>
                  </div>
                </div>
                <div class="file-field input-field col s9"> 
                  <div class="btn">
                    <span>Upload File</span>
                    <input type="file" name="file">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" name="gambar">
                  </div>
                </div>
                <div class="row">
                  <div class="col s6 offset-s6">
                    <button class="btn waves-effect green darken-4" type="submit" name="action">Simpan
                        <i class="material-icons right">send</i>
                    </button>
                  </div>
                </div>
            </form>
            
            </div>
        </div>
    </div> 
        
    <br>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.sidenav').sidenav();
        });
    </script>
</body>

</html>
