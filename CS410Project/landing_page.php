<?php
	$dbc = mysqli_connect('localhost', 'data_base_user_name', 'data_base_password', 'EZChart') or die('Error connecting to MySQL server.');
	$username = $_GET["username"];
	//$result = $db->prepare("SELECT * FROM user WHERE user_type = $username");
	$patients = array("Billy");  //Demo code needs to be replaced from database


	//this is only to see if I'm connecting to the db
	$query = "Insert INTO employee (EmployeeID, Password, Title, Name) VALUES ('0004', '34d832', 'CNA', 'Amy')";
	$result = mysqli_query($dbc, $query) or die('Error querying database.');

	mysqli_close($dbc);

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
			<h1>Welcome:  <?php print $username ?></h1>
		</header>
		
		<main>
			<form>
				<button type="submit" name="newPatient" formaction="newpatient.php">Add New Patient</button>
				<button type="submit" name="newEntry" formaction="patient.php">Add/View Entry</button>
			</form>
		</main>
	</body>
</html>