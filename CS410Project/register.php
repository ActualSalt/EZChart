
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
			<form action="register_complete.php" method="post">
				<div id="Title" class="container">
					<label><b>EZChart</b></label>
				</div>
				<div id="smalltitle" class="container">
					<label><b>Register a New Account</b></label>
				</div>


				<div class="container">
					<label><b>First Name</b></label>
					<input type="text" placeholder="Enter First Name" name="fname" required>
					<label><b>Last Name</b></label>
					<input type="text" placeholder="Enter Last Name" name="lname" required>
					<label><b>Title</b></label>
					<input type="text" placeholder="Enter Job Title" name="title" required>
					<label><b>Username</b></label>
					<input type="text" placeholder="Enter Username" name="username" required>
					<label><b>Password</b></label>
					<input type="password" placeholder="Enter Password" id="password" name="password" required>

					<label><b>Confirm Password</b></label>
					<input type="password" placeholder="Confirm Password" id="confirm_password" required>

					<button type="submit">Register</button>
				</div>

				<div class="container">
					<button type="button" class="cancelbtn">Cancel</button>
				</div>
				<div id="Logo" class="logocontainer">
					<img src="logofinal.png" alt="Logo for Medical System" style="width:100px;height:100px;">
				</div>
			</form>
		</main>
	</body>
</html>
