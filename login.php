
<!DOCTYPE html>
<html>
<head>
	<title>QostQ&copy Login Form</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<?php
			include("bg.php");
		?>
	<header>
		<h1>Log me in.</h1>
	</header>

	<content>
		<form action="rumuslogin.php" method="post">
			<input type="text" name="username" placeholder="Your username here"  required><br><br>
			<input type="Password" name="pass" placeholder="Your Password here"  required><br><br>
			<?php
				if(isset($_GET['failed'])){
					echo 'incorrect username or password';
				}
			?>
			<input type="submit" value="Sign in" id="tombol">
			<p id="membered">Don't have QostQ account? Create one! <a href="register.php">Sign up</a></p>


			
		</form>
	</content>

	<footer>
		<!--<h5>QostQ&copy</h5>-->
	</footer>
</body>
</html>
