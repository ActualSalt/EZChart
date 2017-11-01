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
			<div id="PatientNewInfoForm" class="container">
			<form method="post" action="new_patient_added.php">
				<fieldset>
					<legend>Patient info:</legend>
					First name: <input type="text" id="PatientID" name="fname"><br>
					Last name: <input type="text" id="PatientID" name="lname"><br>
					Date of Birth: <input type="text" placeholder="yyyy/mm/dd" maxlength="10" id="PatientIDDOB name="birthday"><br>
					Sex:  
					<select name="sex">
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="other">Other</option>
					</select>
					Height (in): <input type="number" id="PatientAttributes" name="height">
					Weight (lbs): <input type="number" id="PatientAttributes" name="weight">
					<textarea rows="1" cols="50" name="dnr_status">DNR Status</textarea>
					<textarea rows="20" cols="50" name="notes">Admission Notes</textarea>
					<!-- need to add area to upload patient picture-->
				</fieldset>
				
				<fieldset>
					<legend>Chart Enterer:</legend>
					Title:  
					<select name="title">
						<option value="cna">CNA</option>
						<option value="rn">RN</option>
						<option value="dr">Dr.</option>
					</select><br>
					First name: <input type="text" id="ChartEntererID" name="fname"><br>
					Last name: <input type="text" id="ChartEntererID" name="lname"><br>
				</fieldset><br>
				<input type="submit" id="Submit" value="Submit">
			</form>
			</div>
		</main>
	</body>
</html>