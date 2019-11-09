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
              <a href="#name"><span class="white-text name">Uts<i class="material-icons">arrow_drop_down</i></span></a>
              <a href="#email"><span class="white-text email"></span></a>
            </div></li>
            <li><a href="#!"><i class="material-icons">dashboard</i>Dashboard</a></li>
            <li><a href="#!"><i class="material-icons">event_note</i>Data Wisata</a></li>
        </ul>
        </div>
   

        <div class="col s12 m8 l9">
        <a href="input.php" class="waves-effect btn-floating btn-large waves-light red"><i class="material-icons">add</i></a>
            <div class="container">   
                <table class="responsive-table centered highlight">
                    <thead>
                        <tr>
                          <th>Nama Wisata</th>
                          <th>Jenis Wisata</th>
                          <th>Alamat</th>
                          <th>Deskripsi</th>
                          <th>Harga Tiket</th>
                          <th>Gambar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>      
                </table>
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
