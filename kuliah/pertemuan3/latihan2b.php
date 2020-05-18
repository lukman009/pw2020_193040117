<!DOCTYPE html>
<html lang="en">
<head>
	<title>Modul 2 - Latihan 1</title>
</head>
<body>
	<div class="container">
	<table border="1" cellpadding="3" cellspacing="0">
		<tr>
			<th>Kolom 1</th>
			<th>Kolom 2</th>
			<th>Kolom 3</th>
			<th>Kolom 4</th>
			<th>Kolom 5</th>
		</tr>
		<?php
				$b=1;
				while($b <=5){
						echo "<tr>";
				if($b %2){
				for ($i=1; $i<=5; $i++){
					echo "<td>Baris $b,Kolom $i</td>";

					}
				}else{	
				for ($i=1; $i <=5 ; $i++) {
				echo "<td>&nbsp;</td>";
				}	
				}

				
				
				echo "</tr>";	
				$b++;
				
				
			}

		 ?>
	</table>
</body>
</html>