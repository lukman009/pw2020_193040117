<?php 

function koneksi ()
{
  return mysqli_connect('localhost', 'root','','pw_193040117');
}

function query ($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) ==1){
  return mysqli_fetch_assoc($result);
}
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)){
    $rows[]= $row;
  }
  return $rows;
}

// function untuk menambahkan data
function tambah($data){
  $conn = koneksi();

  $gambar = htmlspecialchars($data['gambar']);
  $nama = htmlspecialchars($data['nama']);
  $Asal = htmlspecialchars($data['Asal']);
  $harga = htmlspecialchars($data['harga']);

  $query = "INSERT INTO makanan
  values 
  ('','$gambar','$nama','$Asal','$harga')";

  mysqli_query($conn , $query);

  return mysqli_affected_rows($conn);

}
?>