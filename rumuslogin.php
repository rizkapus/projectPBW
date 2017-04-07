<?php

	$host= "localhost";
	$username="root";
	$password= "";
	$database= "qostq";

	$mysqli= new mysqli($host,$username,$password,$database);

	$username = $_POST['username'];
	$password = $_POST['pass'];


	$result = $mysqli->query("SELECT * from data_user where username ='".$username."' and pass ='".$password."';");
	$row = $result->fetch_assoc();
	if($result->num_rows>0){
		$cookie_username="string";
		$cookie_value	=$row["username"];
		setcookie($cookie_username, $cookie_value, time() + (86400), "/");
		header("location: home%20page.php");
	}

	else{
		header("location: login.php?failed=1");
	}
	
	

	// if($result->num_rows==1){
	// 		echo "Login Berhasil";

	// }

	// else{
			
	// 		echo "Anda Gagal";
	// 	}
?>

