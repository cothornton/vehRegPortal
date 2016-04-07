<?php

// database credentials
$username="chrieqpq_cot";
$password="Aggie1891";
$database="chrieqpq_db";

// establish connection to the database
$connect = mysql_connect(localhost,$username,$password);

// checks to see if the connection was successful
@mysql_select_db($database, $connect) or die( "Unable to connect to database");

// attempt insert query execution
$query = "SELECT * FROM reservation";
$result= mysql_query($query, $connect);

$numRows= mysql_num_rows($result);


// close connection
mysql_close();

echo "<b><center>Database Output</center></b><br><br>";





$i=0;
while($i < $numRows){
	
$confirm=mysql_result($result,$i,"confirmation_number");
$dt=mysql_result($result,$i,"date");
$req_dept=mysql_result($result,$i,"confirmation_number");
$building=mysql_result($result,$i,"building");
$driver=mysql_result($result,$i,"driver");
$pass_name=mysql_result($result,$i,"passenger_name");
$veh=mysql_result($result,$i,"vehicle");
$mi=mysql_result($result,$i,"miles");
$purpose=mysql_result($result,$i,"purpose");


echo "Confirmation Number: $confirm<br>
		<br>Date: $dt</br>
		<br>Requesting Department: $req_dept</br>
		<br>Building: $building</br>
		<br>Driver: $veh</br>
		<br>Passenger Name: $pass_name</br>
		<br>Vehicle: $veh</br>
		<br>Miles: $mi</br>
		<br>Purpose: $purpose</br><br><br><br>";

$i++;

}



?>