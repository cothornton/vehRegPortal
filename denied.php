


<?php
include("../db.php");
	session_start();

	if(isset($_POST["deny"])){
		
		$id = $_GET["id"];

	$query = "UPDATE `reservation` SET `approved`= 0 WHERE id = $id" ;          
	$result = mysql_query($query);



	// header('Location: success.html');


	if(!$result) {
	  die(mysql_error());
	}

	

	}
?>


