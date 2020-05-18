<?php 
	echo "ini adalah tampilan hasil";
	echo "<hr>";

	// echo "username: ".$_GET['username'];

	// echo "<br>";
	// echo "password: ".$_GET['password'];

	function ceklogin($username,$password){
		if($username == "lukman" && $password == "123456"){
			echo "berhasil login";
		}else{
			echo "gagal login";
	

		}
	}

	//eksekusi
	//=======
	$username = $_GET['username'];
	$password = $_GET['password'];
	ceklogin($username,$password);
 ?>