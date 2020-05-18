<?php 
	$phi=3.14;
	$r1=4;
	$r2=3;



	function HitungLuasLingkaran($r){
		$phi =3.14*$r*$r;
		return $phi;
	}
	function HitungLuas2Lingkaran($r1, $r2){
	$total_luas_lingkaran =$r1*$r2;
	return $total_luas_lingkaran;
}

$luas_lingkaran1 = HitungLuasLingkaran($r1);
$luas_lingkaran2 =HitungLuasLingkaran($r2);
echo "Total Luas Lingkaran=" .HitungLuas2Lingkaran($r1,$r2);

	
 ?>