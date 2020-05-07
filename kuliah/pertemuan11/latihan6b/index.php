<?php
require 'php/function.php';

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
    <div class="container">
      <?php foreach($makanan as $m):?>
        <p class="nama">
          <a href="php/detail.php?id=<?=$m['id']?>">
                                <?=$m['nama']?>
          </a>
        </p>
      <?php endforeach;?>
    </div>


  
  </table>
</body>

</html>