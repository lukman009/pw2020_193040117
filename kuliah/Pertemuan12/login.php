<?php 
session_start();

if(isset($_SESSION['login'])){
  header("Location: index.php");
}

require 'function.php';

// ketika tombol login di tekan
if(isset($_POST['login'])){
  $login = login($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
      <h1>Login</h1>
      <?php if(isset($login['error'])) : ?>
      <p style="color: blue; font-style:italic;"><?=$login['pesan'];?></p>
      <?php endif; ?>  

      <form action=""method="post">
        <ul>
        <li>
        <label for=""></label>
        Userame :
        <input type="text" name="username" autofocus autocomplete="off" required>
      </label>
        </li>
        <li>
          <label>
            Password :
            <input type="password" name="password" required>
          </label>
        </li>
        <li>
          <button type="submit" name="login">Login</button>
        </li>
        <li>
          <a href="registrasi.php">Tambah User Baru</a>
        </li>
        </ul>
      
      </form>
</body>
</html>