<?php 
	require 'koneksi.php';
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($conn,"SELECT * FROM user where username='$username' and password ='$password'");

	$data	= mysqli_fetch_assoc($result);

 	if (mysqli_num_rows($result)>0){
 		//login
 		$_SESSION['login'] = true;
 		$_SESSION['username'] = $username;
 		$_SESSION['id'] = $data['id'];
 		header("location:admin.php");
 	}
 	
 	else {
 		echo "Tidak bisa masuk";
 		echo "<br>";
 		echo "<a href='formregister.php'>Silahkan<a>";
 		echo " registrasi terlebih dahulu";
 		echo "<br>";
 		echo "<br>";
 		echo "<a href='register.php'> SignUp?<a>";
 	}

?>