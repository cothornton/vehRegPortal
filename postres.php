<?php

// database credentials
$username="chrieqpq_cot";
$password="Aggie1891";
$database="chrieqpq_db";

// establish connection to the database
mysql_connect(localhost,$username,$password);

// checks to see if the connection was successful
@mysql_select_db($database) or die( "Unable to connect to database");

// instantiate variables and assigns the form value to the variable
$confirmation_number = mysql_real_escape_string($_POST['confirmation_number']);
$date = mysql_real_escape_string($_POST['date']);
$req_dept = mysql_real_escape_string($_POST['requesting_dept']);
$building = mysql_real_escape_string($_POST['building']);
$driver = mysql_real_escape_string($_POST['driver']);
$pass_name= mysql_real_escape_string($_POST['passenger_name']);
$vehicle = mysql_real_escape_string($_POST['vehicle']);
$miles = mysql_real_escape_string($_POST['miles']);
$purpose = mysql_real_escape_string($_POST['purpose']);

// SQL query to inject form data into the MySQL database
$query = "INSERT INTO reservation (`confirmation_number`,`date`, `requesting_dept`, `building`, `driver`, `passenger_name`, `vehicle`, `miles`, `purpose`)  VALUES (".$confirmation_number.",".$date.",".$req_dept.",".$building.", ".$driver.",".$pass_name.",".$vehicle.",".$miles.",".$purpose.")";
$result = mysql_query($query);
if(!$result) {
  die(mysql_error());
}

header('Location: success.html');
?>