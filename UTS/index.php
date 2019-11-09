<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="images/parwis3.jpeg">
    <title>PARIWISATA</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<body>
    <nav>
        <div class="nav-wrapper green darken-4">
          <a href="#!"  class="brand-logo"> <i class="material-icons"><img src="images/parwis.png" width="100px" height="80px" alt="LOGO"></i>PARIWISATA TEGAL</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger "><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Beranda</a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Jenis Wisata<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="collapsible.html">Peta Wisata</a></li>
          </ul>
        </div>
    </nav>
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="#!">one</a></li>
      <li><a href="#!">two</a></li>
      <li class="divider"></li>
      <li><a href="#!">three</a></li>
    </ul>
  
    <ul class="sidenav" id="mobile-demo">
      <li><a href="sass.html">Beranda</a></li>
      <li><a href="badges.html">Jenis Wisata</a></li>
      <li><a href="collapsible.html">Peta Wisata</a></li>
    </ul>

    <div class="parallax-container">
      <div class="parallax"><img src="https://source.unsplash.com/category/nature/1920x1080"></div>
    </div>
    <br><br><br><br>
    <div class="container">
    <table class="responsive-table centered striped">
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
    </div><br>

    <footer class="page-footer green darken-4">
      <div class="container ">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Footer Content</h5>
            <p class="grey-text text-lighten-4">Project UTS</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text"></h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!"></a></li>
              <li><a class="grey-text text-lighten-3" href="#!"></a></li>
              <li><a class="grey-text text-lighten-3" href="#!"></a></li>
              <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2019 Powered by Anam, Dita, Yuri
        <a class="grey-text text-lighten-4 right" href="#!"></a>
        </div>
      </div>
    </footer>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      $('.parallax').parallax();
    });
    $(".dropdown-trigger").dropdown();
    </script>
    <script>
      $(document).ready(function(){
        $('.sidenav').sidenav();
      });
    </script>
</body>
</html>