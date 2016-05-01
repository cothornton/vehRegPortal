<?php
include("db.php");

// attempt select query execution
 $query_sql = "SELECT * FROM reservation";
$query= mysql_query($query_sql, $connect);
// close connection
mysql_close();
echo "<b><center>Database Output</center></b><br><br>";




 // attempt search query execution
                   

                    
    while($result = mysql_fetch_array($query)){
                      
	
		$confirm=$result["confirmation_number"];
        $dt=$result["date"];
        $req_dept=$result["requesting_dept"];
        $building=$result["building"];
     	$driver=$result["driver"];
        $pass_name=$result["passenger_name"];
        $veh=$result["vehicle"];
        $mi=$result["miles"];
        $purpose=$result["purpose"];


		echo 
			"Confirmation Number: $confirm<br>
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