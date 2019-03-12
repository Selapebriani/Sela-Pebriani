<?php 
	require 'koneksi.php';


	session_start();
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$waktu = $_POST['waktu'];
	
	

	$tambah = mysqli_query($conn,"INSERT INTO blog VALUES(null,'$judul','$isi','$waktu')");

		if ($tambah>0) {
			echo "Data berhasil ditambahkan";
			echo "<br>";
			echo "Klik ";
			echo "<a href='admin.php'>disini</a>";
			echo " untuk melihat hasil";
		}
		else {
			echo "Data gagal ditambahkan";
			echo "<br>";
			echo "Silahkan klik ";
			echo "<a href='creat.php'>disini</a>";

		}
	

 ?>