<?php
	$db = new PDO("mysql:dbname=ez_chart", "root");
	// $result = $db->prepare("SELECT * FROM user WHERE user_type = $username");
	$patients = array("Billy");  //Demo code needs to be replaced from database
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Landing Page</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="login.css">
		<script src=".js" type="text/javascript"></script>
	</head>
	<body>
		<header>
			<h1></h1>
		</header>
		
		<main>
			<form>
				Select a patient:
				<select name="patient">
					<?php foreach($patients as $patient)
					{ ?>
						<option value="<?php $patient ?>"><?php print $patient ?></option><?php ;
					} ?>
				</select>
				<button type="submit" name="newEntry" formaction="newentry.php">New Entry</button>
				<button type="submit" name="viewEntry" formaction="viewentry.php">View Entry</button>
			</form>
		</main>
	</body>
</html>