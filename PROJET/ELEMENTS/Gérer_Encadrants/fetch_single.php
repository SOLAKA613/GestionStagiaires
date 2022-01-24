<?php
include('db.php');
include('function.php');
if(isset($_POST["user_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT  info.* FROM information_encadrant as info
		WHERE info.MATRICULE = '".$_POST["user_id"]."'
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["MATRICULE"] = $row["MATRICULE"];
		$output["NOM"] = $row["NOM"];
		$output["PRENOM"] = $row["PRENOM"];
		$output["DEPARTEMENT"] = $row["DEPARTEMENT"];
		$output["FILIERE"] = $row["FILIERE"];	
		$output["EMAIL"] = $row["EMAIL"];
		$output["GSM"] = $row["GSM"];
	    $output["PASSWORD"] = $row["PASSWORD"]; 
		$output["USERNAME"] = $row["USERNAME"];
	
	
	}
	echo json_encode($output);
}
?>