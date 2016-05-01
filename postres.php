<?php
	include("db.php");

	// instantiate variables and assigns the form value to the variable
	// ID field
	// instantiate variables and assign the values from the form
	$date = mysql_real_escape_string($_POST['date']);
	$req_dept = mysql_real_escape_string($_POST['requesting_dept']);
	$driverFirstName = mysql_real_escape_string($_POST['driverFirstName']);
	$driverLastName = mysql_real_escape_string($_POST['driverLastName']);
	$driverEmail = mysql_real_escape_string($_POST['driverEmail']);
	$driverPhone = mysql_real_escape_string($_POST['driverPhone']);
	$numPassengers = mysql_real_escape_string($_POST['numPassengers']);
	$leaveDate = mysql_real_escape_string($_POST['leaveDate']);
	$returnDate = mysql_real_escape_string($_POST['returnDate']);
	$leaveTime = mysql_real_escape_string($_POST['leaveTime']);
	$returnTime = mysql_real_escape_string($_POST['returnTime']);
	$destination = mysql_real_escape_string($_POST['destination']);
	$vehicle = mysql_real_escape_string($_POST['vehicle']);
	$purpose = mysql_real_escape_string($_POST['purpose']);
	
	// approved - 0 or false until approved from administrator




	// SQL query to inject form data into the MySQL database
	$query = "INSERT INTO reservation (`confirmation_number`,`date`,`requesting_dept`,  `driverFirstName`, `driverLastName`, `driverEmail`, `driverPhone`, `numPassengers`, `leaveDate`, `returnDate`, `leaveTime`, `returnTime`, `destination`, `vehicle`, `purpose`)  VALUES ( (RAND() * 1000000 ) , '".$date."','".$req_dept."','".$driverFirstName."','".$driverLastName."', '".$driverEmail."','".$driverPhone."','".$numPassengers."','".$leaveDate."','".$returnDate."' ,'".$leaveTime."','".$returnTime."','".$destination."' ,'".$vehicle."','".$purpose."')";
	$result = mysql_query($query);

	if(!$result) {
	  die(mysql_error());
	}

	header('Location: success.html');
?>