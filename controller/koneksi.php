<?php 
	$server 	="localhost";
	$user		="root";
	$password	="";
	$nama_db	="vsga";

	$db=mysqli_connect($server, $user, $password, $nama_db);

	if (mysqli_connect_error()) {
		echo "koneksi  database gagal: " . mysqli_connect_error();	
		}else{
			echo "database berhasil tersambung.";
		}
?>