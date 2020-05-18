<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Modul 2 - Latihan 2b	</title>
	<div class="container">
	<style> 
		.kotak {
			background-color: white;
			width:30px;
			height:30px;
			text-align: center;
			line-height: 30px;
			border:1px solid;
			float: left;
			margin:2px;
			color:black;
			

		}
		.kotak1{

			background-color: #57e65a;
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
			border : 1px solid;
			float: left;
			margin: 2px;
			color: black;
		}
		.clear{
			clear: both;

		}
		</div>
	</style>
</head>
<body>
	

	<?php 	
		for ($b = 1; $b <=5; $b++){

		$k=$b;
		while($k >=1){
			echo"<div class='kotak'>#$b</div>";
			echo "<div class='kotak1'>$b</div>";
			$k--;
			}
			echo "<div class='clear'></div>";
		}	
				
	 ?>

</body>
</html>  