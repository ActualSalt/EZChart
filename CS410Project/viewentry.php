<?php
	$username = $_POST["username"];
	$P_ID = $_POST["PID"];
	include "my_login_info.php";
	$con = mysqli_connect($servername, $db_login_name, $db_password, $db_name) or die('Error connecting to database.');
	//SQL query 
	$pass = "SELECT * FROM $db_name.Patient WHERE P_ID='$P_ID'";
	$result = $con->query($pass);
	$row = $result->fetch_assoc();


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

		<table>
			<tr>
				  
			</tr>
		</table>

		<main>
			<form method="post">
				<h2>&nbsp; ID: <?php echo "$P_ID";?></h2>
				<table cellspacing="10" border="0">
					<tr>
						<td>First Name</td>
						<td><?php echo $row["FName"];?></td>	  
					</tr>
					<tr>
						<td>Last Name</td>
						<td><?php echo $row["LName"];?></td>	  
					</tr>
					<tr>
						<td>DOB</td>
						<td><?php echo $row["DOB"];?></td>	  
					</tr>
					<tr>
						<td>Sex</td>
						<td><?php echo $row["Sex"];?></td>	  
					</tr>
					<tr>
						<td>Height</td>
						<td><?php echo $row["Height"];?></td>	  
					</tr>
					<tr>
						<td>Weight</td>
						<td><?php echo $row["Weight"];?></td>	  
					</tr>
					<tr>
						<td>Roomnumber</td>
						<td><?php echo $row["RoomNumber"];?></td>	  
					</tr>
					<tr>
						<td>SSN</td>
						<td><?php echo $row["SSN"];?></td>	  
					</tr>
					<tr>
						<td>Insurance</td>
						<td><?php echo $row["Insurance"];?></td>	  
					</tr>


				</table>
				<input type="hidden" name="username" value=<?php echo "$username";?>>
				<button type="submit" name="goBack" formaction="patient.php">Go Back</button>
				<button type="submit" name="newEntry" formaction="newentry.php">New Entry</button>
			</form>
		</main>
	</body>
</html>