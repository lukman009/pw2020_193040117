<?php

//function untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("localhost" , "root" , "") or die("Koneksi ke DB Gagal");
    mysqli_select_db ($conn, "pw_193040117") or die("Database Salah!");
    
    return $conn;
}

//function untuk melakukan query ke database
function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

//functions untuk menambahkan data didalam database
function tambah($data) {
    $conn = koneksi();

    $gambar         = htmlspecialchars($data['gambar']);
    $nama           = htmlspecialchars($data['nama']);
    $Asal           = htmlspecialchars($data['Asal']);
    $harga          = htmlspecialchars($data['harga']);
   

    $query = "INSERT INTO makanan
                VALUES 
                ('','$gambar','$nama','$Asal','$harga')";
    
    mysqli_query($conn , $query);

    return mysqli_affected_rows($conn);
}

//functions untuk menghapus data 
function hapus($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM makanan WHERE id = $id");

    return mysqli_affected_rows($conn);
}

//functions untuk menambahkan data didalam database
function ubah($data) {
    $conn = koneksi();

    $id             = $data['id'];
    $gambar         = htmlspecialchars($data['gambar']);
    $nama           = htmlspecialchars($data['nama']);
    $Asal           = htmlspecialchars($data['Asal']);
    $harga          = htmlspecialchars($data['harga']);
    

    $query = "UPDATE makanan SET
            gambar = '$gambar',
            nama = '$nama',
            Asal = '$Asal',
            harga = '$harga'
            WHERE id = $id
    ";
    
    mysqli_query($conn , $query);

    return mysqli_affected_rows($conn);
}


// fungctions untuk registrasi
function registrasi($data){
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if(mysqli_fetch_assoc($result)) {
        echo "
        <script>
            alert('username sudah digunakan');
        </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES ('' , '$username' , '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
