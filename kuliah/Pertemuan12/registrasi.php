<?php 
require 'function.php';

  if (isset($_POST['registrasi'])){
    if ( registrasi($_POST) > 0 ){
      echo "<script>
      alert('user baru berhasil ditambahkan. silahkan login);
      document.location.href = 'login.php'
      </script>";

    }else {
      echo "user gagal ditambahkan";
    }
  }
  
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
</head>
<body>
  <h1>Form Registrasi</h1>
  <form action="" method="post">
  <ul>
    <li>
      <label for="">
        Username :
        <input type="text" name = "username" autofocus autocomplete="off" required>
      </label>
    </li>
    <li>
      <label for="">
        Password :
        <input type="password" name="password" required>
      </label>
    </li>
    <li>
      <label for="">
        Konfirmasi Password :
        <input type="password" name="password2" required>
      </label>
    </li>
    <li>
      <button type="submit" name="registrasi"> Registrasi </button>
    </li>
  </ul>
  </form>
</body>
</html>