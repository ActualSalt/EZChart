<?php
include "my_login_info.php";
$dbc = mysqli_connect('localhost', $db_name, $db_password, 'EZChart') or die('Error connecting to database.');

$first_name = $_POST['fname']; //this is not working
echo $first_name;
echo "Hello";

//connection to database works, having trouble getting information from newpatient.php

//$query = "INSERT INTO patient_info(first_name, last_name, sex, date_of_birth, weight, dnr_status, admission_notes, image, height) VALUES('Bob', 'Anderson', 'm', '1947-09-01', '230', 'do all life saving measures', 'patient will be moving into memory unit', 'not avaliable', '61')";

$result = mysqli_query($dbc, $query) or die('Error querying database.');

mysqli_close($dbc);







?>

Welcome <?php echo $_POST["fname"]; ?><br>