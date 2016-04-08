<?php
// database credentials
$username="chrieqpq_cot";
$password="Aggie1891";
$database="chrieqpq_db";

// establish connection to the database
$connect = mysql_connect(localhost,$username,$password);

// checks to see if the connection was successful
@mysql_select_db($database, $connect) or die( "Unable to connect to database");





?>