<?php

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>EZ Chart Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="login.css">
		<script src=".js" type="text/javascript"></script>
	</head>
	<body>
		<header>
			
		</header>
		
		<main>
			<form action="landing_page.php" method="post">
				<div id="Title" class="container">
					<label><b>EZChart</b></label>
				</div>
				<div id="smalltitle" class="container">
					<label><b>Login</b></label>
				</div>

				<div class="container">
					<label><b>Username</b></label>
					<input type="text" placeholder="Enter Username" name="username" required>

					<label><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="psw" required>

					<button type="submit">Login</button>
					<input type="checkbox" checked="checked"> Remember me
				</div>

				<div class="container">
					<button type="button" class="cancelbtn">Cancel</button>
					<span class="psw">Forgot <a href="#">password?</a></span>
				</div>
				<div class="container">
					<span class="register">Need an account? Register <a href="register.html">here</a></span>
				</div>
				<div id="Logo" class="logocontainer">
					<img src="logofinal.png" alt="Logo for Medical System" style="width:100px;height:100px;">
				</div>
			</form>
		</main>
	</body>
</html>
