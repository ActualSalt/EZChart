<?php

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>New Patient</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="newpatient.css">
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
					First name: <input type="text" id="PatientID" name="fname"><br>
					Last name: <input type="text" id="PatientID" name="lname"><br>
					DOB (mm/dd/yyyy): <input type="text" id="PatientIDDOB"><br>
					Gender:  
					<select name="patient">
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="other">Other</option>
					</select><br><br>
					Height (in): <input type="number" id="PatientAttributes" name="height">
					Weight (in): <input type="number" id="PatientAttributes" name="weight">
					Age: <input type="number" id="PatientAttributes" name="age">
				</fieldset>
				
				<fieldset>
					<legend>Chart Enterer:</legend>
					Title:  
					<select name="title">
						<option value="cna">CNA</option>
						<option value="rn">RN</option>
						<option value="dr">Dr.</option>
					</select><br><br>
					First name: <input type="text" id="ChartEntererID" name="fname"><br>
					Last name: <input type="text" id="ChartEntererID" name="lname"><br>
				</fieldset><br>
				<input type="submit" id="Submit" value="Submit">
			</form>
		</main>
	</body>
</html>