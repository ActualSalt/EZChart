<?php
	$username = $_POST["username"];
	
	//Constant declaration
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "EZChart";
	
	//Connection
	$con = mysqli_connect($servername, $dbusername, $dbpassword);

	//Was a connection made?
	if(!$con){
		echo 'Not connected';
	}
	//Was DB selected?
	if(!mysqli_select_db($con, $dbname)){
		echo 'DB Not selected';
	}

	//SQL query 
	$sql = "SELECT * FROM EZChart.Employee WHERE E_ID='xXSlayerXx'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	//close
	//$con->close();
	


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
			<h2>
				Welcome, 
				<?php 
					$sup = $row["FName"]." ".$row["LName"];
					echo $sup."<br>";		
				?>
			</h2>
		</header>

		Logged in as 
		<?php
			$sup = $row["E_ID"];
			echo "<b>".$sup."<br></b>";
			$sup = $row["Title"];
			echo " Title: ".$sup;
		?>



		<main>
			<form>
				<button type="submit" name="newPatient" formaction="newpatient.php">Add New Patient</button>
				<button type="submit" name="newEntry" formaction="patient.php">Add/View Entry</button>
			</form>
		</main>
	</body>
</html>