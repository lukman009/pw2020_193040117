<?php 

function koneksi (){
  $conn = mysqli_connect('localhost', 'root','','pw_193040117');
 

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
// ubah data
function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];

  $gambar = htmlspecialchars($data['gambar']);
  $nama = htmlspecialchars($data['nama']);
  $Asal = htmlspecialchars($data['Asal']);
  $harga = htmlspecialchars($data['harga']);

  $query = " UPDATE makanan SET

            $gambar = '$gambar',
            $nama = '$nama',
            $Asal = '$Asal',
            $harga = '$harga'
            WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);

}
//cari data
function cari ($keyword)
{
  $conn = koneksi();
   $query = "SELECT * FROM makanan WHERE 
           gambar LIKE '%$keyword' OR
           nama LIKE '%$keyword' OR
           Asal LIKE '%$keyword' OR
           harga LIKE '%$keyword' ";

  $result = mysqli_query($conn, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)){
    $row[] = $row;
  }
  
  return $rows;

}
  // function login
  {
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    // verifikasi username
    if (query ("SELECT * FROM user WHERE username = '$username' && password = '$password' ")){
      //set session
      $_SESSION['login'] = true;

      header("Location: index.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username / Password Salah !'
  ];

  //function untuk registrasi
  function registrasi($data){
    $conn = koneksi();
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);

  // verifikasi username
  $result = mysqli_query($conn,"SELECT username FROM user WHERE username ='$username' ");
  if(mysqli_fetch_assoc($result)){
    echo"
    <script>
    alert('username sudah digunakan');
    </script>";
    return false;
    
  }
  //enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  //tambah user baru
  $query_tambah = "INSERT INTO user VALUES('','$username','password')";

  return mysqli_affected_rows($conn);
  }
?>