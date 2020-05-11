<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: Login.php");
  exit;
}
//menghubungkan dengan file php lainnya
require 'function.php';
// melakukan query
$makanan = query("SELECT * FROM makanan");

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $makanan = query("SELECT * FROM makanan WHERE 
                      gambar LIKE '%$keyword' OR
                      nama LIKE '%$keyword' OR
                      Asal LIKE '%$keyword' OR
                      harga LIKE '%$keyword' ");
} else {
  $makanan =  query("SELECT * FROM makanan");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan6d</title>
  <style>
    img {
      width: 150px;
    }
  </style>
</head>

<body>

  <div class="add">
    <a href="tambah.php">Tambah Data</a>
  </div>
  <form action="" method="get">
    <input type="text" name="keyword" autofoucus>
    <button type="submit" name="cari">Cari</button>
  </form>

  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>#</th>
      <th>opsi</th>
      <th>Gambar</th>
      <th>Nama Makanan</th>
      <th>Asal Makanan</th>
      <th>Harga</th>
    </tr>
    <?php if (empty($makanan)) : ?>
      <tr>
        <td colspan="7">
          <h1>Data Tidak Ada</h1>
        </td>
      </tr>
    <?php else : ?>
      <?php $i = 1; ?>
      <?php foreach ($makanan as $m) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td>
            <a href="ubah.php?id=<?= $m['id'] ?>"><button>Ubah</button></a>
            <a href="hapus.php?id=<?= $m['id'] ?>" onclick="return confirm('Hapus Data?')"><button>Hapus</button></a>
          </td>
          <td><img src="../asset/img/<?= $m['gambar'] ?>" alt=""></td>
          <td><?= $m['nama'] ?></td>
          <td><?= $m['Asal'] ?></td>
          <td><?= $m['harga'] ?></td>


        </tr>

        <?php $i++; ?>
      <?php endforeach ?>
    <?php endif; ?>
      <div class="logout">
        <a href="logout.php">Logout</a>
        
      </div>

    </div>
  </table>

</body>

</html>