<?php
require 'function.php';

$makanan = query("SELECT * FROM makanan");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width= initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h3>Daftar Makanan</h3>

  <table border="1" cellpadiing="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama Makanan</th>
      <th>Asal Makanan </th>
      <th>Harga</th>
      <th>Aksi</th>


    </tr>
    <?php $i =1; 
     foreach ($makanan as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['gambar']; ?> " width="80"></td>
        <td><?= $m['nama']; ?></td>
        <td><?= $m['Asal']; ?></td>
        <td><?= $m['harga']; ?></td>

        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach ?>
  </table>
</body>

</html>