<?php

function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'pw_193040117');


  return $conn;
}
//function untuk melakukan query ke database
function query($sql){
  $conn = koneksi();
  $result = mysqli_query($conn, "$sql");
  
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)){
    $rows [] = $row;
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

  //function untuk menghapus data
  function hapus($id){
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM makanan WHERE id=$id");
  
  return mysqli_affected_rows($conn);
}
?>