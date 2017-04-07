<?php

	$host= "localhost";
	$username="root";
	$password= "";
	$database= "qostq";

	$connect= mysqli_connect($host,$username,$password,$database);

	$nama		 = $_POST["nama"];
	$username	 = $_POST["username"];
	$email	  	 = $_POST["email"];
	$password	 = $_POST["pass"];
	$passconf	 = $_POST["cpass"];
	$dob		 = $_POST["dob"];
	$jeniskelamin= $_POST["gender"];


	$result= mysqli_query($connect, "select *from data_user where username='$username'");
	if($result->num_rows>0){
		header("location: register.php?exist=1");
	}

	if($passconf!=$password){
		header("location: register.php?passconfirmed=0");
	}

	$result= mysqli_query($connect, "select *from data_user where email='$email'");
	if($result->num_rows>0){
		header("location: register.php?emailexist=1");
	}

	else{
	mysqli_query($connect, "insert into data_user (nama, username, email, pass, cpass, dob, jk) value('$nama', '$username', '$email', '$password', '$passconf', '$dob', '$jeniskelamin')");
	}	


	

?>
