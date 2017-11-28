<?php
	$username = $_POST["username"];
	$P_ID = $_POST["PID"];
	include "my_login_info.php";
	$con = mysqli_connect($servername, $db_login_name, $db_password, $db_name) or die('Error connecting to database.');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>View Entry</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="login.css">
		<script src=".js" type="text/javascript"></script>
	</head>
	<body>
		<header>
		
		</header>
		<main>
			<form method="post">
				<h2>ID: <?php echo "$P_ID";?></h2>

				<input type="hidden" name="username" value=<?php echo "$username";?>>
				<button type="submit" name="goBack" formaction="patient.php">Go Back</button>
				<button type="submit" name="newEntry" formaction="newentry.php">New Entry</button>
			</form>
		</main>
	</body>
</html>