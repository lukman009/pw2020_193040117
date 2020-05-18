<!DOCTYPE html>
<html>
<head>
	<title>Modul 2 - Latihan 2e</title>
	<style >
		.kotak {
			border:1px solid;
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
			float: left;
			margin: 2px;
			color: black;
		}
    	.clear{
			clear: both;
		}
		.hitam{
			background-color: black;

		}
		.putih{
			background-color: white;
		}
		
		
	</style>
</head>
<body>
	<?php 
	for($i=1; $i <=5 ; $i++){
		if($i%2){
			for($j=1; $j <=5 ; $j++){
				if($j%2){
					echo "<div class='kotak hitam'></div>";
					}else{
						echo "<div class='kotak putih'></div>";
				}

			}
			echo "<div class='clear'></div>";
		}else{
			for($j=1; $j <=5 ; $j++){
				if($j%2){
					echo "<div class='kotak putih'></div>";
				}else{
					echo "<div class='kotak hitam'></div>";
				}
			}
			echo "<div class='clear'></div>";
		}
	}



	
	 ?>
</body>
</html>