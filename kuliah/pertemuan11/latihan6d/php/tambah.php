<?php
require 'function.php';

if(isset ($_POST['tambah'])) {
  if(tambah($_POST) > 0){

  
echo"
<script>
  alert('Data Berhasil ditambahkan!');
  document.location.href = 'admin.php';
</script>
";
} else {
echo"
<script>
  alert('Data Gagal ditambahkan!')
  document.location.href = 'admin.php';
</script>
";
    }
  }
?>

<h3>Form Tambah Data Makanan</h3>
<form action="" method="post">
  <ul>
    <li>
      <label for="gambar">Gambar : </label><br>
      <input type="text" name="gambar" id="gambar" required><br><br>
    </li>
    <li>

      <lable for="nama">Nama : </lable><br>
      <input type="text" name="nama" id="nama" required><br><br>
    </li>
    <li>
      <label for="Asal">Asal Makanan : </label><br>
      <input type="text" name="Asal" id="Asal" required><br><br>
    </li>
    <li>
      <label for="harga">Harga : </label><br>
      <input type="text" name="harga" id="harga" required><br><br>

    </li>
    <li>
      <br>
      <button type="submit" name="tambah">Tambah Data</button>
      <button type="submit">
        <a href="../index.php" style="text-decoration: none; color :black">Kembali</a>
      </button>
    </li>
  </ul>
</form>