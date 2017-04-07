<!DOCTYPE html>
<html>
<head>
	<title>QostQ&copy Home Page</title>
	<link rel="stylesheet" href="homepage.css">
<body>
	<header>

	<?php
		
				if(isset($_COOKIE["string"])){
					echo '<a class="masuk">'.$_COOKIE["string"].'</a>
					<br>
					<br>
					<hr>';
				}

				else{
					echo '
						<a href="login.php" class="masuk">Sign in</a>
						<a href="register.php" class="masuk">Sign up</a>
						<br>
						<br>
						<hr>';
				}

	?>
	</header>
	<content>
		<div id="home_atas">
			<h1 id="slogan">Cari Kost Online Tinggal Klik.</h1>
			<a href="daftarkos.php" id="link_daftar">Daftarkan Kost Anda</a>

		</div>
		
		<div id="home_bawah">
			<!--<a href="about.html" id="">--><h3>What is QostQ&copy?</h3>
			<img src="img/qm.png" alt="question-mark" width="200" height="200" id="about">
			
		</div>
	</content>
</body>
</html>
