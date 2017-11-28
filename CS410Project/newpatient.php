<?php
	$username = $_POST["username"];
    $fName = $_POST["first"];
    $lName = $_POST["last"];
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
			<form action="new_patient_added.php" method="Post" enctype="multipart/form-data">
			<input type="hidden" name="username" value=<?php echo "$username";?>>

				<fieldset>
					<legend>Patient info:</legend>
					<!-- <img id="patientphoto" src="No_picture_available.png" alt="No picture available"> -->
					First name: <input type="text" class="patientID" name="npFName"><br>
					Last name: <input type="text" class="patientID" name="npLName"><br>
					Date of Birth: <input type="text" placeholder="mm/dd/yyyy" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d" maxlength="10" class="patientIDDOBSSN" name="dob"><br>
					Sex:  
					<select name="sex">
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="other">Other</option>
					</select>
					<!--Age: <input type="number" class="patientAttributes" min="0" max="125" name="age"><br> -->
					<br>
					<br>
					
					Height (in): <input type="number" class="patientAttributes" name="height">

					Weight (lbs): <input type="number" class="patientAttributes" name="weight">
					
					<br><br>
					
					<!-- no column in database for this info 
					Marital Status: 
					<select name="patient">
						<option value="Married">Married</option>
						<option value="Single">Single</option>
						<option value="Divorced">Divorced</option>
						<option value="Widowed">Widowed</option>
						<option value="Other">Other</option>
					</select> <br><br> -->

					SSN: <input type="password" placeholder="#########" class="patientIDDOBSSN" pattern="\d\d\d\d\d\d\d\d\d" maxlength="9" name="ssn"> <br>

					Room Number: <input type="text" placeholder="" class="patientID" name="address"> <br>
					
					<!--
					Home Phone: <input type="text" placeholder="###-###-####" class="phoneInfo" pattern="\d\d\d-\d\d\d-\d\d\d\d" maxlength="12" name="home_phone"> <br>

					Work Phone: <input type="text" placeholder="###-###-####" class="phoneInfo" pattern="\d\d\d-\d\d\d-\d\d\d\d" maxlength="12" name="work_phone"> <br>

					Employer: <input type="text" placeholder="" class="patientID" name="employer"> <br>
					-->
					
					Insurance: <input type="text" placeholder="" class="patientID" name="provider"> <br>

					Patient Photo: <input type="file" name="pic"> <br>
					
					<!--
					Email Address: <input type="text" placeholder="" class="patientID" pattern="\w+@\w+" name="email_address"> <br>
					-->
				
				</fieldset>
				<input type="submit" id="Submit" value="Submit">
			</form>
			</div>
		</main>
	</body>
</html>