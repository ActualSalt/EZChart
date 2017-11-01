<?php

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>New Entry</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="newpatient.css">
		<script src=".js" type="text/javascript"></script>
	</head>
	<body>
		<header>
			<h1>New Chart Entry:</h1>
		</header>
		
		<main>
			<div id="PatientInfoForm" class="container">
			<form>
				<fieldset>
					<legend>Patient info:</legend>
					First name: <input type="text" id="PatientID" name="fname"><br>
					Last name: <input type="text" id="PatientID" name="lname"><br>
					Date of Birth: <input type="text" placeholder="mm/dd/yyyy" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d" maxlength="10" id="PatientIDDOB"><br>
					Sex:  
					<select name="patient">
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="other">Other</option>
					</select>
					Age: <input type="number" id="PatientAttributes" min="0" max="125" name="age"><br><br>
					Height (in): <input type="number" id="PatientAttributes" name="height">
					Weight (lbs): <input type="number" id="PatientAttributes" name="weight"><br>
					Blood Pressure: <input type="text" id="PatientAttributes" name="bp">
					<textarea rows="4" cols="50" placeholder="Enter behaviors here." name="behaviors"></textarea>
					<textarea rows="4" cols="50" placeholder="Additional Comments." name="comments"></textarea>
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
			</div>
		</main>
	</body>
</html>