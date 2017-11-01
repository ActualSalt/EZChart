<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";

$data = $_POST['data'];

$con = mysqli_connect($servername, $dbusername, $dbpassword);

if(!$con){
	echo 'Not connected';
}

if(!mysqli_select_db($con, $dbname)){
	echo 'DB Not selected';
}

$sql = "INSERT INTO TestTable (TestInput) VALUES ('$data')";

if(!mysqli_query($con,$sql)){
	echo 'Not inserted';
}else{
	echo 'Inserted';
}

$con->close();
?>

<form action="home.html" method="post">
	<input type="submit" name="back" value="Go Back">
</form>