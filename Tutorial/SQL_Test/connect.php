<?php
//Constant declaration
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";
//User input 
$data = $_POST['data'];
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
$sql = "INSERT INTO TestTable (TestInput) VALUES ('$data')";
//Did the insertion happen?
if(!mysqli_query($con,$sql)){
	echo 'Not inserted';
}else{
	echo 'Inserted';
}
//close
$con->close();
?>

<form action="home.html" method="post">
	<input type="submit" name="back" value="Go Back">
</form>