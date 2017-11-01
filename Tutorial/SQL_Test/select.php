<?php
//Constant declaration
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";

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
$sql = "SELECT * FROM TestTable";
$result = $con->query($sql);

while($row = $result->fetch_assoc()) {
	echo $row["TestInput"]."<br>";
}else {
    echo "0 results";
}

//close
$con->close();
?>

<form action="home.html" method="post">
	<input type="submit" name="back" value="Go Back">
</form>