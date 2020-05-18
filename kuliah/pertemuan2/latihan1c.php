<?php 
	$a = "a";
	$b = "b";
	$c = "c";
 ?>
 <!DOCTYPE html>
 <html>
 <head lang="en">
 	<meta charset="utf-8">
 </head>
 <body>
 	<style>
 		.container {
 			border:1px solid;
 			width:200px;
 			height: 200px;
 		}
 		.box {
 			border:1px solid;
 			width: 50px;
 			height: 50px;
 			margin-left: 5px;
 			margin-top: 5px;
 			text-align: center;
 			float: left;
 		}
 		.clear{
 			clear: both;
 		}

 	</style>
 		<div class="container">
 			<div class="box"><?php echo $a; ?></div>
 			<div class="box"><?php echo $a; ?></div>	
 			<div class="box"><?php echo $a; ?></div>	
 			<div class="box"><?php echo $b; ?></div>	
 			<div class="box"><?php echo $b; ?></div>
 			<div class="clear">
 			<div class="box"><?php echo $c; ?></div>					
 		</div>
 </body>
 </html>