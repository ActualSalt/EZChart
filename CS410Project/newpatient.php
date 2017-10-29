<?php

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>New Patient</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="login.css">
		<script src=".js" type="text/javascript"></script>
	</head>
	<body>
		<header>
			<h1>Add a new patient:</h1>
		</header>
		
		<main>
			<form>
				<fieldset>
					<legend>Patient info:</legend>
					First name: <input type="text" name="fname"><br>
					Last name: <input type="text" name="lname"><br>
					Date of birth: <input type="text"><br>
					Gender:  
					<select name="patient">
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="other">Other</option>
					</select><br><br>
					Height: <input type="text" name="height">
					Weight: <input type="text" name="weight">
					Age: <input type="number" name="age">
				</fieldset>
				
				<fieldset>
					<legend>Chart Enterer:</legend>
					Title:  
					<select name="title">
						<option value="cna">CNA</option>
						<option value="rn">RN</option>
						<option value="dr">Dr.</option>
					</select><br><br>
					First name: <input type="text" name="fname"><br>
					Last name: <input type="text" name="lname"><br>
				</fieldset><br>
				<input type="submit" value="Submit">
			</form>
		</main>
	</body>
</html>