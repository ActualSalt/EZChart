<?php
	$username = $_POST["username"];
	include "my_login_info.php";
	$con = mysqli_connect($servername, $db_login_name, $db_password, $db_name) or die('Error connecting to database.');
	//SQL query 
	$sql = "SELECT * FROM EZChart.Employee WHERE E_ID='$username'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	//Password  
	$password = $row["Password"];
	//Patient ID Generator
	//Random 
	$digits = 5;
	$random = rand(pow(10, $digits-1), pow(10, $digits)-1);
	//Check 
	$sql = "SELECT * FROM EZChart.Patient WHERE P_ID='$random'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	$P_ID_Check = $row["P_ID"];
	if($P_ID_Check==null){
		$Patient_ID = $random;
	}else{
		$isAvail = true;
		while($isAvail){
			$random = rand(pow(10, $digits-1), pow(10, $digits)-1);
			$sql = "SELECT * FROM EZChart.Patient WHERE P_ID='$random'";
			$result = $con->query($sql);
			$row = $result->fetch_assoc();
			$P_ID_Check = $row["P_ID"];
			if(P_ID_Check==null){
				$isAvail = false;
				$Patient_ID = $random;
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>New Patient Added</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="newpatient.css">
		<script src=".js" type="text/javascript"></script>
	</head>
	<form method="post">
		<input type="hidden" name="username" value=<?php echo "$username";?>>
		<input type="hidden" name="psw" value=<?php echo "$password";?>>
		<button type="submit" name="Home" formaction="landing_page.php">Go Home</button>
	</form>
<html>

<?php 
$first_name = $_POST['npFName']; 
$last_name = $_POST['npLName'];
$dob = $_POST['dob'];
$sex = $_POST['sex']; 
$height = $_POST['height'];
$weight = $_POST['weight'];
$SSN = $_POST['ssn'];
$roomNumber = $_POST['address'];
$Insurance = $_POST['provider'];
$charter = $username;
$pic = $_FILES['pic']['name'];

$qry = "INSERT INTO EZChart.Patient (`E_ID`, `P_ID`, `Charter`, `FName`, `LName`, `DOB`, `Sex`, `Height`, `Weight`, `Pic`, `RoomNumber`, `SSN`, `Insurance`, `TimeStamp`) VALUES (NULL, '$Patient_ID', '$username', '$first_name', '$last_name', '$dob', '$sex', '$height', '$weight', '$pic', '$roomNumber', '$SSN', '$Insurance', CURRENT_TIMESTAMP)";
$result = $con->query($qry);
mysqli_close($con);
?>
<?php //phpinfo(); ?>
