<?php
include("db.php");

// attempt select query execution
$query = "SELECT * FROM reservation WHERE approved=0";
$result= mysql_query($query, $connect);

$numRows= mysql_num_rows($result);
// close connection
mysql_close();
echo "<b><center>Database Output</center></b><br><br>";





$i=0;
while($i < $numRows){
	
$confirm=mysql_result($result,$i,"confirmation_number");
$dt=mysql_result($result,$i,"date");
$req_dept=mysql_result($result,$i,"requesting_dept");
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