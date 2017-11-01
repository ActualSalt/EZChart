<?php
include "my_login_info.php";
$dbc = mysqli_connect('localhost', $db_name, $db_password, 'EZChart') or die('Error connecting to database.');

$first_name= $_POST['first_name'];
$last_name = $_POST['last_name']; 
$birthdate = $_POST['birthday'];
$sex = $_POST['sex'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$dnr_status = $_POST['dnr_status'];
$admission_notes = $_POST['notes'];

echo "first name is: $first_name ";
echo "last name is: $last_name ";
echo "dob: $birthdate ";
echo "sex: $sex ";
echo "height: $height ";
echo "weight: $weight ";
echo "dnr: $dnr_status ";
echo "notes: $admission_notes";

//needs form validation 

//test string - it works! 
//$query = "INSERT INTO patient_info(first_name, last_name, sex, date_of_birth, weight, dnr_status, admission_notes, image, height) VALUES('June', 'May', 'f', '1949-08-18', '134', 'all life saving measures', 'likes pizza', 'not avaliable', '55')";

$query = "INSERT INTO patient_info(first_name, last_name, sex, date_of_birth, weight, dnr_status, admission_notes, image, height) VALUES('$first_name', '$last_name', '$sex', '$birthdate', '$weight', '$dnr_status', '$admission_notes', 'not avaliable', '$height')";

$result = mysqli_query($dbc, $query) or die('Error querying database.');

mysqli_close($dbc);







?>