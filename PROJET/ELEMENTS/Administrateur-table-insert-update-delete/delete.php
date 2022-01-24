<?php

include('db.php');
include("function.php");

if(isset($_POST["user_id"]))
{
	
	$statement = $connection->prepare(
		"DELETE FROM etudiant WHERE CNE = :CNE"
	);
	$result = $statement->execute(
		array(
			':CNE'	=>	$_POST["user_id"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Données supprimées';
	}
}



?>