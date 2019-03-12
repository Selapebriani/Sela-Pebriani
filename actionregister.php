<?php 
	require 'koneksi.php';
	session_start();
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($conn,"INSERT INTO user VALUES(null,'$username','$password')");




	if ($result) {
		echo "Berhasil !";
		echo("<br>");
		echo "Login ";
		echo "<a href='register.php'>disini</a>";
	}
	else {
		echo "Anda gagal registrasi";
		echo "<a href='formregister.php'>try egen</a>";
	}


?>