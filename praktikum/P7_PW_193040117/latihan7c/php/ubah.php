<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: Login.php");
  exit;
}
require 'function.php';
$id = $_GET['id'];
$m = query("SELECT * FROM makanan WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {


    echo "
<script>
  alert('Data Berhasil diubah!');
  document.location.href = 'admin.php';
</script>
";
  } else {
    echo "
<script>
  alert('Data Gagal diubah!')
  document.location.href = 'admin.php';
</script>
";
  }
}
?>

<h3>Form ubah Data Makanan</h3>
<form action="" method="post">
  <input type="hidden" name="id" value="<?= $m['id'] ?>">
  <ul>
    <li>
      <label for="gambar">Gambar : </label><br>
      <input type="text" name="gambar" id="gambar" required value="<?= $m['gambar'] ?>"><br><br>
    </li>
    <li>

      <lable for="nama">Nama : </lable><br>
      <input type="text" name="nama" id="nama" required value="<?= $m['nama'] ?>"><br><br>
    </li>
    <li>
      <label for="Asal">Asal Makanan : </label><br>
      <input type="text" name="Asal" id="Asal" required value="<?= $m['Asal'] ?>"><br><br>
    </li>
    <li>
      <label for="harga">Harga : </label><br>
      <input type="text" name="harga" id="harga" required value="<?= $m['harga'] ?>"><br><br>

    </li>
    <li>
      <br>
      <button type="submit" name="ubah">Ubah Data</button>
      <button type="submit">
        <a href="../index.php" style="text-decoration: none; color :black">Kembali</a>
      </button>
    </li>
  </ul>
</form>