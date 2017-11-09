<!DOCTYPE html>
<html lang="en">
	<head>
		<title>New Patient Added</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="newpatient.css">
		<script src=".js" type="text/javascript"></script>
	</head>
	<form>
		<button type="submit" formaction="landing_page.php">Home</button>
	</form>
<html>


<?php 

//this page is just temporary and will be merged with newpatient.php

//include "my_login_info.php";
$dbc = mysqli_connect('localhost', 'root', '', 'ezchart') or die('Error connecting to database.');

$first_name = $_POST['npFName']; 
$last_name = $_POST['npLName'];
$sex = $_POST['sex']; 
$height = $_POST['height'];
$weight = $_POST['weight'];
$roomNumber = $_POST['address'];
$SSN = $_POST['ssn'];
$Insurance = $_POST['provider'];
$title = $_POST['title'];
$charter = 'Jessica'; //temp. this value comes from whoever is logged in
$dob = $_POST['dob'];
$pic = $_FILES['pic']['name'];

//move uploaded file to Image folder - this works, but people may have to change settings on folders
//to make sure everything can be written to (that is, that the file is not read only)
define('GW_UPLOADPATH', 'Images/');
$target = GW_UPLOADPATH . $pic;
if(move_uploaded_file($_FILES['pic']['tmp_name'], $target)){
	echo "way to go!";
}else{
	echo "something went wrong moving file";
}



//echo 'Here is some more debugging info:';
    //print_r($_FILES);


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
//echo "dob: $dob";
//echo "photo: $pic";
//echo "type: $type";


//test string for new db - works
//$query = "INSERT INTO Patient(P_ID, Charter, FName, LName, DOB, Sex, Height, Weight, Pic, RoomNumber, SSN,
//	Insurance) VALUES('003', 'Jessica', 'Nick', 'Anderson', '02-21-1943', 'm', '70', '198', 'none for now',
//	'304', '000112222', 'Red Cross')";


$query = "INSERT INTO Patient(P_ID, Charter, FName, LName, DOB, Sex, Height, Weight, Pic, RoomNumber, SSN,
	Insurance) VALUES('0', '$charter', '$first_name', '$last_name', '$dob', '$sex', '$height', '$weight', '$pic', 
	'$roomNumber', '$SSN', '$Insurance')";

$result = mysqli_query($dbc, $query); // or die('Error querying database.');
if(!$result) { //this does the actual query to db
	echo "query not successful";
} else {
	echo "$first_name $last_name was added to database. You may chart on patient here or go to main page.";
}
mysqli_close($dbc);



?>


<?php phpinfo(); ?>
