<?php 

		//array 1 dimensi
		$arah = array("kanan","kiri" );
		
		$arah[2] ="atas";
		//echo $arah;
		
		$arah[] ="bawah";

		$arah[1] ="kanan";
		$arah[0] ="kiri";


		echo "panjang array =".count($arah); 
		echo "<br>";
		print_r($arah);
			echo "<br>";
		for ($i=0; $i < count($arah) ; $i++) {
			echo "Arah= ".$arah[$i];
			echo "<br>"; 
				
			}	

			echo "<br>";

			foreach ($arah as $namaarah) {
				echo $namaarah;
			}


		//array multidimensi
		
		// $mahasiswa = array();
		// $mahasiswa[0][0] ="193040117";
		// $mahasiswa[0][1] ="Lukman Tresnahadi";
		// $mahasiswa[1][0] ="Tasikmalaya";
		// $mahasiswa[1][1] ="087818860563";

		// // print("<pre>".print_r($mahasiswa,true)."</pre>");
		// //print_r($mahasiswa);

		// //echo"nama:".$mahasiswa[0][1];
		// //echo"<br>";
		// //echo"kota :".$mahasiswa[1][0];

		// for ($i=0; $i<count($mahasiswa) ; $i++) {
		// 	for ($j=0; $j<count($mahasiswa)  ; $j++) { 
		// 	 	echo $mahasiswa[$i][$j];
		// 	 	echo "<br>";
		// 	 } 
		// 	# code...
		// }
 ?>