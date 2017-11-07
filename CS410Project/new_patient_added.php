<?php 

//this page is just temporary and will be merged with newpatient.php

include "my_login_info.php";
$dbc = mysqli_connect('localhost', $db_name, $db_password, 'EZChart2') or die('Error connecting to database.');

$first_name = $_POST['fname']; echo #first_name;
$last_name = $_POST['lname'];
$sex = $_POST['sex']; 
$height = $_POST['height'];
$weight = $_POST['weight'];
$roomNumber = $_POST['address'];
$SSN = $_POST['ssn'];
$Insurance = $_POST['provider'];
$marriage = $_POST['patient'];
$title = $_POST['title'];

//echo "first name is: $first_name ";
//echo "last name is: $last_name ";
//echo "dob: $birthdate ";
//echo "sex: $sex ";
//echo "height: $height ";
//echo "weight: $weight ";
//echo "marriage: $marriage";
//echo "title: $title";
//echo "dnr: $dnr_status ";
//echo "notes: $admission_notes";


//test string for new db - works
$query = "INSERT INTO Patient(E_ID, P_ID, Charter, FName, LName, DOB, Sex, Height, Weight, Pic, RoomNumber, SSN,
	Insurance) VALUES('0', '003', 'Jessica', 'Nick', 'Anderson', '02-21-1943', 'm', '70', '198', 'none for now',
	'304', '000112222', 'Red Cross')";


//$query = "INSERT INTO patient_info(first_name, last_name, sex, date_of_birth, weight, dnr_status, admission_notes, image, height) VALUES('$first_name', '$last_name', '$sex', '$birthdate', '$weight', '$dnr_status', '$admission_notes', 'not avaliable', '$height')";

$result = mysqli_query($dbc, $query); // or die('Error querying database.');
if(!$result) { //this does the actual query to db
	echo "query not successful";
} else {
	echo "$first_name $last_name was added to database. You may chart on patient here or go to main page.";
}
mysqli_close($dbc);

?>