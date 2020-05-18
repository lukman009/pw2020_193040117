<?php
require 'function.php';

//ambil id dari url
$id = $_GET['id'];

//querry makanan berdasarkan id
$m = query("SELECT * FROM makanan WHERE id = $id")[0];

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
  <h3>Detail Makanan</h3>
  <ul>
    <li><img src="../asset/img/<?= $m['gambar']; ?>"></li>
    <li>Nama makanan : <?= $m['nama']; ?></li>
    <li>Asal Makanan : <?= $m['Asal']; ?></li>
    <li>Harga : <?= $m['harga']; ?></li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="../index.php">kembali ke daftar makanan</a></li>

  </ul>
</body>

</html>