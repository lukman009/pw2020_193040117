<?php
require 'function.php';

//ambil id dari url
$id = $_GET['id'];

//querry makanan berdasarkan id
$m = query("SELECT * FROM makanan WHERE id = $id")

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Makanan</title>
 
</head>

<body>
  <h3>Detail Makanan</h3>
  <ul>
    <li><img src="asset/img/<?= $m['gambar']; ?>"></li>
    <li>Nama makanan : <?= $m['nama']; ?></li>
    <li>Asal Makanan : <?= $m['Asal']; ?></li>
    <li>Harga : <?= $m['harga']; ?></li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="../latihan5c.php">kembali ke daftar makanan</a></li>
   
  </ul>

</body>

</html>