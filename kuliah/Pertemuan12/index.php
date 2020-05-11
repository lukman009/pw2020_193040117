<?php
session_start();
if (!isset($_SESSION['login'])){
  header("Location: login.php");
  exit;
}
require 'function.php';

$makanan = query("SELECT * FROM makanan");
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width= initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet"href="css/style.css">
 

  
</head>

<body>
  <?php if(empty($makanan)) : ?>
    <div>
      <h1>Data Tidak Ditemukan</h1>
    </div>
    <?php else : ?>
    <div class="container">
      <?php foreach($makanan as $m):?>
        <p class="nama">
          <a href="detail.php?id=<?=$m['id']?>">
                                <?=$m['nama']?>
          </a>
        </p>
      <?php endforeach;?>
    </div>
      <?php endif; ?>
    <a href="admin.php" style="color:blue;">Halaman Admin</a><br>
    <a href="logout.php">Logout</a>


  
  </table>
</body>

</html>