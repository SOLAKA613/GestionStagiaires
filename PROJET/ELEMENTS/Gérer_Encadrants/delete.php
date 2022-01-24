<?php

include('db.php');
include("function.php");

if(isset($_POST["user_id"]))
{
	
	$statement = $connection->prepare(
		"DELETE FROM information_encadrant WHERE MATRICULE = :MATRICULE"
	);
	$result = $statement->execute(
		array(
			':MATRICULE'	=>	$_POST["user_id"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Données supprimées';
	}
}



?>