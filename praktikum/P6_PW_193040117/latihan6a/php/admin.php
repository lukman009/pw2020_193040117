<?php 
  //menghubungkan dengan file php lainnya
  require'function.php';
  // melakukan query
  $makanan = query ( "SELECT * FROM makanan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan6a</title>
  <style>
    img{
      width: 150px;
    }
    </style>
</head>
<body>
  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>#</th>
      <th>opsi</th>
      <th>Gambar</th>
      <th>Nama Makanan</th>
      <th>Asal Makanan</th>
      <th>Harga</th>
    </tr>
    <?php $i =1; ?>
    <?php foreach($makanan as $m) : ?>
      <tr>
        <td><?=$i; ?></td>
        <td>
          <a href=""><button>Ubah</button></a>
          <a href=""><button>Hapus</button></a>
        </td>
        <td><img src="../asset/img/<?=$m['gambar']?>"alt=""></td>
        <td><?=$m['nama']?></td>
        <td><?=$m['Asal']?></td>
        <td><?=$m['harga']?></td>

      </tr>
      <?php $i++;?>
      <?php endforeach ?>
  </table>
  
</body>
</html>