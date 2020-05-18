		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="utf-8">
			<title>Modul 2 - Latihan 2D</title>
			<style>
				.kotak{
					width: 30px;
					height: 30px;
					text-align: center;
					line-height: 30px;
					border:1px solid;
					float: left;
					margin: 2px;
					color: black;
				}
				.kotak1{
					background-color: #57e65a;
					width: 30px;
					height: 30px;
					text-align: center;
					line-height: 30px;
					border:1px solid;
					float: left;
					margin: 2px;
					color: black;
				}
				.clear{
					clear: both;
				}
				.ganjil{
					background-color: #003;
					color: #fff;
					width: 30px;
					height: 30px;
					text-align: center;
					line-height: 30px;
					border:1px solid;
					float: left;
					margin:2px;
				}
				.genap{
					background-color: #57e65a;
				}
			</style>
			<?php 
				$a="1";
				$b="2";
				$c="3";
				$d="4";
				$e="5";
			 ?>
			 <div class="kotak">
			 	<?php 
			 		echo "#" .$a; 
			 	?>
			 </div>
			 <div class="ganjil">
			 	<?php 
			 		echo $a; 
			 	?>
			 </div>
			 <div class="clear"></div>
			 <div class="kotak">
				<?php 
					echo "#".$b;
				 ?>	 
				</div>
				<div class="kotak1">
				<?php 
					echo $a;	
				 ?>
				</div>
				<div class="kotak">
					<?php 
					echo "#" .$b; 
					?>
				</div>
				<div class="kotak1">
				<?php 
					echo "$b";
				 ?>	
				</div>
				<div class="clear"></div>
				<div class="kotak">
					<?php 
						echo "#" .$c;
					 ?>
					</div>
					<div class="ganjil">
						<?php 
							echo $a;
						 ?>
					</div>
					<div class="kotak">
						<?php 
							echo "#" .$c;
						 ?>
						</div>
						<div class="ganjil">
							<?php 
								echo $b;
							 ?>
							</div>
						<div class="kotak">
							<?php 
								echo "#" .$c;
							 ?>
							</div>
						<div class="ganjil">
						<?php 
							echo $c;
						 ?>	
						</div>
						<div class="clear"></div>
						<div class="kotak">
							<?php 
								echo "#".$d;
							 ?>
							</div>
						<div class="kotak1">
							<?php 
								echo $a;
							 ?>
							</div>


						<div class="kotak">
							<?php 
								echo "a" .$d;
							 ?>
						</div>

						<div class="kotak1">
							<?php 
								echo $b;
							 ?>
						</div>

						<div class="kotak">
							<?php 
								echo "#" .$d;
							 ?>
						</div>

						<div class="kotak1">
							<?php 
								echo $c;
							 ?>
						</div>

						<div class="kotak">
							<?php 
								echo "#" .$d;
							 ?>
						</div>

						<div class="kotak1">
							<?php 
								echo $d;
							 ?>
						</div>


						<div class="clear"></div>
						<div class="kotak">
							<?php 
								echo "#" .$e;
							 ?>
						</div>

						<div class="ganjil">
							<?php 
								echo $a;
							 ?>
						</div>	 

						<div class="kotak">
							<?php 
								echo "#" .$e;
							 ?>
						</div>

						<div class="ganjil">
							<?php 
								echo $b;
							 ?>
						</div>

						<div class="kotak">
							<?php 
								echo "#" .$e;
							 ?>
						</div>

						<div class="ganjil">
							<?php 
								echo $c;
							 ?>
						</div>

						<div class="kotak">
							<?php 
							echo "#" .$e;
							 ?>
							
						</div>
						<div class="ganjil">
							<?php 
								echo $d;
							 ?>
						</div>

						<div class="kotak">
							<?php 
								echo "#" ,$e;
							 ?>
						</div>

						<div class="ganjil">
							<?php 
								echo $e;
							 ?>
							</div>
		</head>
		<body>

		</body>
		</html>