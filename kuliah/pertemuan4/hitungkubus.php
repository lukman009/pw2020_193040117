<?php 
	//kubus pertama
	$sisi1 = 9;

	//kubus kedua
	 $sisi2= 4;
	
	//luas ke 1
	 $luas_kb1 =$sisi1*$sisi1*6;

	 //luas ke 2 
	$luas_kb2 = $sisi2*$sisi2*6;

	echo "Total Luas = ".tambahluasduakubus($luas_kb1$luas_kb2);
	function tambahluasduakubus($luas,$luas2)
	{
		$total_luas = $luas1*$luas2;
		return $total_luas;
	}
 ?>