<?php
require 'php/function.php';

$makanan = query("SELECT * FROM makanan");


// tugas no 2

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $makanan = query("SELECT * FROM makanan WHERE
gambar LIKE '%$keyword' OR
nama LIKE '%$keyword' OR
Asal LIKE '%$keyword' OR
harga LIKE '%$keyword' ");
} else {
  $makanan = query("SELECT * FROM makanan");
}
?>


<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

  <!-- Navbar -->

  <body id="home" class="scrollspy">
    <!--navbar-->
    <div class="navbar-fixed">
      <nav class="blue darken-2">
        <div class="container">
          <div class="nav-wrapper">
            <a href="#home" class="brand-logo">MellFood</a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#menu">menu</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="php/login.php">Ke halaman admin</a></li>

            </ul>
          </div>
        </div>
      </nav>
    </div>

    <!-- sideNav -->
    <ul class="sidenav" id="mobile-nav">
      <li><a href="#menu">menu</a></li>
      <li><a href="#contact">contact</a></li>
      <li><a href="php/login.php">ke halaman admin</a></li>
    </ul>




    <!-- slider -->
    <div class="slider">
      <ul class="slides">
        <li>
          <img src="asset/img/bg1.jpg">
          <div class="caption left-align">
            <h3>Indonesian Food</h3>
            <h5 class="light grey-text text-lighten-3">Sehat&Lezat</h5>
          </div>
        </li>
        <li>
          <img src="asset/img/bg2.jpg">
          <div class="caption right-align">
            <h3>Local Pride</h3>
            <h5 class="light grey-text text-lighten-3">Dengan rempah-rempah pilihan</h5>
          </div>
        </li>

    </div>




    <!-- menambahkan kolom pencarian pada halaman index -->
    <form action="" method="get">
      <input type="text" name="keyword" autofocus>
      <button type="submit" name="cari">cari</button>
    </form>





    <!-- card -->

    <section id="menu" class="menu  scrollspy">
      <div class="container">

        <h3 class="center">Menu makanan</h3>
        <?php if (empty($makanan)) : ?>
          <div>
            <h1>Data Tidak Ditemukan</h1>
          </div>
        <?php else : ?>
          <div class="row">
            <?php foreach ($makanan as $m) : ?>


              <div class="col  m3 s12 ">
                <div class="card  ">
                  <div class="card-image center">
                    <img src="asset/img/<?= $m['gambar'] ?>">
                    <span class="card-title?nama=<?= $m['nama'] ?>"></span>
                  </div>


                  <div class="card-content">
                    <p class="nama">

                      <li>Nama makanan : <?= $m['nama']; ?></li>
                      <li>Asal Makanan : <?= $m['Asal']; ?></li>
                      <li>Harga : <?= $m['harga']; ?></li>
                      <p class="nama"></p>
                      <li><a href="php/detail.php?id=<?= $m['id'] ?>">Detail</a></li>
                      </a>
                    </p>

                  </div>
                </div>
              </div>





            <?php endforeach; ?>
          </div>
      </div>


    </section>
  <?php endif; ?>
  <!--Contact Us-->
  <section id="contact" class="contact grey lighten-4 scrollspy">
    <div class="container">
      <h3 class="light grey-text text-darken-3"></h3>
      <div class="row">
        <div class="col m5 s12">
          <div class="card-panel blue darken-2 center white-text">
            <i class="material-icons">email</i>
            <h5>Contact</h5>
            <p>tresnahadi3@gmail.com</p>
          </div>
          <ul class="collection with-header">
            <li class="collection-header">
              <h4>Online Order</h4>
            </li>
            <li class="collection-item">MellFood</li>
            <li class="collection-item">Jl.paseh kota Tasikmalaya</li>
            <li class="collection-item">West Java,Indonesia</li>
          </ul>
        </div>
        <div class="col m6 s12">
          <form>
            <div class="card-panel">
              <h5>Form Order</h5>
              <div class="input-field">
                <input type="text" name="name" id="name" required class="validate">
                <label for="name">Name</label>
              </div>
              <div class="input-field">
                <input type="email" name="email" id="email" class="validate">
                <label for="email">Email</label>
              </div>
              <div class="input-field">
                <input type="text" name="phone number" id="phone number">
                <label for="phone number">Phone Number</label>
              </div>
              <div class="input-field">
                <textarea name="message" id="message" class="materialize-textarea"></textarea>
                <label for="message">alamat lengkap</label>
              </div>
              <div class="input-field">
                <textarea name="menu" id="menu" class="materialize-textarea"></textarea>
                <label for="menu">Menu yang di pilih</label>
              </div>
              <button type="submit" class="btn blue darken-2">Send</button>
            </div>
          </form>
        </div>
      </div>
  </section>


  <!-- footer -->
  <footer class="page-footer blue darken 3">
    <div class="container">

      <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/lukmantrsnhdi/?hl=id">Link 1</a></li>
      <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/lukman.tresnahadi7">Link 2</a></li>
       <li><a class="grey-text text-lighten-4 " href="tresnahadi3@gmail.com">More Links</a></li>
      </ul>
    </div>
    </div>
    </div>
    <div class="footer">
      <div class="container ">
      <div class="center">
        © 2020 Copyright Text
            </div>
       
      </div>
    </div>
  </footer>






  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 600,
      interval: 3000
    });
    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);

    const scrollspy = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scrollspy, {
      scrollOffset: 50

    });
  </script>
  </body>

</html>