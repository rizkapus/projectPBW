<!DOCTYPE html>
<html>

	<head>
		<title>QostQ&copy Registration Form</title>
		<link rel="stylesheet" href="register.css">
	</head>
	<body>
		<?php
			include("bg.php");
		?>

		<header>
			
		</header>

		<content>
		<h1>Register Now!</h1>

				<form id="formulir" action="data.php" method="post">
					<input type="text" name="nama" placeholder="Your name here" required> <br><br>
					<input type="text" name="username" placeholder="Your username here" required> <br><br>
					<input type="email" name="email" placeholder="Your email here" required> <br><br>
					<input type="Password" name="pass" placeholder="Your Password here" required> <br><br>
					<input type="Password" name="cpass" placeholder="Password Confirmation" required> <br>
					<label class="label">Date of Birth</label><br>
						<input type="date" name="dob" min="1987-01-01" max="2002-01-01"><br>
					<label class="label">Gender</label><br>
						<input type="radio" name="gender" value="m" required>Male
						<input type="radio" name="gender" value="f" required>Female<br><br>

						<?php

						if(isset($_GET['passconfirmed'])){
							echo 'password is not confirmed';
						}


						if(isset($_GET['exist'])){
							echo 'username is already exist';
						}


						if(isset($_GET['emailexist'])){
							echo 'email is already used';
						}

						?>

					<input type="submit" value="Sign up" id="tombol">
					<p id="membered">Already have a QostQ account? <a href="login.php">Sign in</a></p>
				</form>
			
		</content>

	</body>

</html>
