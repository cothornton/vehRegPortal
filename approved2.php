<?php
	include("../db.php");
	session_start();

	if(isset($_POST["approve"])){
		
		$id = $_GET["id"];

	$query = "UPDATE `reservation` SET `approved`= 1 WHERE id = $id" ;          
	$result = mysql_query($query);



	// header('Location: success.html');


	if(!$result) {
	  die(mysql_error());
	}

	

	}
		

    
?>

<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>
