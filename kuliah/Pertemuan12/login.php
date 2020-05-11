<?php 
session_start();

if(isset($_SESSION['login'])){
  header("Location: index.php");
  exit;
}
require 'function.php';

// ketika tombol login ditekan
if (isset($_POST['login'])){
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
  <div class="container"></div>
      <h1>Login</h1>
      <?php if(isset($login['error'])) : ?>
      <p style="color: red; font-style:italic;"><?=$login['pesan'];?></p>
      <?php endif; ?>  

      <form action=""method="POST">
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