<?php
	$username = $_POST["username"];
	include "my_login_info.php";
	$con = mysqli_connect($servername, $db_login_name, $db_password, $db_name) or die('Error connecting to database.');
	//SQL query 
	$pass = "SELECT * FROM EZChart.Employee WHERE E_ID='$username'";
	$result = $con->query($pass);
	$getPass = $result->fetch_assoc();
	//Password  
	$password = $getPass["Password"];
	$long = "150";
	$medium = "100";
	$short = "35";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Patient</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="login.css">
		<script src=".js" type="text/javascript"></script>
		<style>
			.pButton {
				background-color: #ccffcc; /* Green */
   				border: none;
			    color: black;
			    padding: 5px 5px; ;
			    text-align: center;
			    text-decoration: none;
			    font-size: 13px;
			    margin: -5px;
			    cursor: pointer;
			}
		</style>
	</head>
	<body>
		<header>
			<h1></h1>
		</header>
		<main>
			<form method="post">
				<br><b> &nbsp;  &nbsp; Patient List</b> 
				<input type="hidden" name="username" value=<?php echo "$username";?>>
				<input type="hidden" name="psw" value=<?php echo "$password";?>>
				<button type="submit" name="newEntry" formaction="landing_page.php">Main Menu</button>
	<!--Table begins-->
	<table cellspacing="10" cellpadding="0" border="0" width="100%">
	 <tr>
	  <td>
	   <table cellspacing="0" cellpadding="10" border="1" width="100%" >
	     <tr style="color:white;background-color:grey">
	        <th width=<?php echo "$medium"?>>Patient ID</th>
	        <th width=<?php echo "$long"?>>First Name</th>
	        <th width=<?php echo "$long"?>>Last Name</th>
	        <th width=<?php echo "$short"?>>Room #</th>
	        <th width=<?php echo "$long"?>>Charter</th>
	        <th width=<?php echo "$long"?>>Time Stamp</th>
	     </tr>
	   </table>
	  </td>
	 </tr>
	<tr>
	<td>
	   <div style="width:100%; height:300px; overflow:auto;">
	     <table cellspacing="0" cellpadding="10" border="1" width="100%" >
<?php
	//Table output 
	$sql = "SELECT * FROM EZChart.Patient";
	$result = $con->query($sql);
?> 
 <?php while ($row = $result->fetch_array()):?>
 	<form method="post">
     <tr>
     	<input type="hidden" name="username" value=<?php echo "$username";?>>
     	<input type="hidden" name="PID" value=<?php echo $row["P_ID"];?>>

        <td width=<?php echo "$medium"?>>
        	<button type="submit" name="pButt" class="pButton"
        	 formaction="viewentry.php"><?php echo $row["P_ID"];?></button>
        </td>
        <td width=<?php echo "$long"?>><?php echo $row["FName"];?></td>
        <td width=<?php echo "$long"?>><?php echo $row["LName"];?></td>
	    <td width=<?php echo "$short"?>><?php echo $row["RoomNumber"];?></td>
	    <td width=<?php echo "$long"?>><?php echo $row["Charter"];?></td>
	    <td width=<?php echo "$long"?>><?php echo $row["TimeStamp"];?></td>
	</tr>
	</form>
<?php endwhile;?>
	     </table>  
	   </div>
	  </td>
	 </tr>
	</table>
			</form>
		</main>
	</body>
</html>