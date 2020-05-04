<?php
require 'php/function.php';

$makanan = query("SELECT * FROM makanan");


// tugas no 2
if(isset($_GET['cari'])){
$keyword = $_GET['keyword'];
$makanan = query("SELECT * FROM makanan WHERE
gambar LIKE '%$keyword' OR
nama LIKE '%$keyword' OR
Asal LIKE '%$keyword' OR
harga LIKE '%$keyword' ");


}else{
$makanan = query("SELECT * FROM makanan");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width= initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">



</head>

<body>
  <!-- menambahkan kolom pencarian pada halaman index -->
  <form action="" method="get">
    <input type="text" name="keyword" autofocus>
    <button type="submit" name="cari">cari</button>
  </form>

  <div class="container">
    <?php foreach ($makanan as $m) : ?>
      <p class="nama">
        <a href="php/detail.php?id=<?= $m['id'] ?>">
          <?= $m['nama'] ?>
        </a>
      </p>
    <?php endforeach; ?>
  </div>



  </table>
</body>

</html>