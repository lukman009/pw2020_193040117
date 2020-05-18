<?php 
	$lirik = "Dan Bandung bagiku bukan cuma <br>
Urusan wilayah belaka, lebih jauh dari itu <br>
Melibatkan perasaan yang bersamaku ketika sunyi <br>
Dan Bandung bagiku bukan cuma <br>
Masalah geografis lebih jauh dari itu <br>
Melibatkan perasaan yang bersamaku ketika sunyi <br>

<br>
Mungkin saja ada tempat yang lainnya <br>
Ketika ku berada di sana  <br>
Akan tetapi perasaanku sepenuhnya ada di Bandung <br>
Yang bersamaku ketika itu <br>
Yang bersamaku ketika rindu <br>
Yang bersamaku ketika sunyi";
	$lirik = str_replace("a", "o", $lirik);
	$lirik = str_replace("i", "o", $lirik);
	$lirik = str_replace("u", "o", $lirik);
	$lirik = str_replace("e", "o", $lirik);

	echo "$lirik";

 ?>