<?php
	$username = $_POST["username"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$title = $_POST["title"];
	$password = $_POST["password"];
	
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
	//Check if ID is taken 
	$sql = "SELECT * FROM EZChart.Employee WHERE E_ID='$username'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	$checkID = $row["E_ID"];
	if($checkID==null){
		//Insert data 
		$sql = "INSERT INTO `Employee` (`E_ID`, `Password`, `FName`, `LName`, `Title`) VALUES ('$username', '$password', '$fname', '$lname', '$title')";
		$con->query($sql);
		$con->close();
		
		echo "Registration complete!";
		$go = "index.php";
		$note = "Login";
	}else{
		echo "ID is already taken";
		$go = "register.php";
		$note = "Try_Again";
	}


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
		<form action=<?php echo $go;?>>
			<input type="submit" name="button" value=<?php echo $note ?>>
		</form>
	</body>
</html>