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
					First name: <input type="text" class="patientID" name="fname"><br>
					Last name: <input type="text" class="patientID" name="lname"><br>
					<!-- Date of Birth: <input type="text" placeholder="mm/dd/yyyy" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d" maxlength="10" class="patientIDDOB"><br> -->
					Sex:  
					<select name="patient">
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="other">Other</option>
					</select>
					Age: <input type="number" class="patientAttributes" min="0" max="125" name="age"><br><br>
					<!-- Height (in): <input type="number" class="patientAttributes" name="height"> -->
					Weight (lbs): <input type="number" class="patientAttributes" name="weight"><br>
					Blood Pressure: <input type="text" class="patientAttributes" name="bp"><br>
					Breakfast:<input id="breakfast" type="checkbox"><br>
					Lunch:<input id="lunch" type="checkbox"><br>
					Dinner:<input id="dinner" type="checkbox"><br><br>
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
					First name: <input type="text" class="chartEntererID" name="fname"><br>
					Last name: <input type="text" class="chartEntererID" name="lname"><br>
				</fieldset><br>
				<input type="submit" id="Submit" value="Submit">
			</form>
			</div>
		</main>
	</body>
</html>