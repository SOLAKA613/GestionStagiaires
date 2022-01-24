<?php
include('db.php');
include('function.php');
if(isset($_POST["user_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT  et.*,st.* ,org.*,rap.*,gr.* FROM etudiant as et,groupe as gr,stage as st,organisme as org ,effectuer as eff,rapport as rap
		WHERE et.CNE = '".$_POST["user_id"]."'
		  AND et.CNE=gr.CNE AND gr.ID_GROUPE=st.ID_GROUPE AND eff.ID_STAGE=st.ID_STAGE AND eff.ID_ORGANISME=org.ID_ORGANISME 
		  AND rap.ID_STAGE=st.ID_STAGE
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["CNE"] = $row["CNE"];
		$output["NOM"] = $row["NOM"];
		$output["PRENOM"] = $row["PRENOM"];
		$output["FILIERE"] = $row["FILIERE"];
		$output["CYCLE"] = $row["CYCLE"];
		$output["SUJET"] = $row["SUJET"];
       	$output["PLUS_INFORMATIONS"] = $row["PLUS_INFORMATIONS"];	
		$output["EMAIL"] = $row["EMAIL"];
		$output["AGE"] = $row["AGE"]; 
		$output["ADRESSE"] = $row["ADRESSE"];
		$output["GSM"] = $row["GSM"];
	    $output["NATIONALITE"] = $row["NATIONALITE"];
		$output["DATE_DEBUT"]=$row["DATE_DEBUT"];
		$output["DATE_FIN"]=$row["DATE_FIN"];
		$output["DATE_SOUTENANCE"]=$row["DATE_SOUTENANCE"];
		$output["TYPE"]=$row["TYPE"];
		$output["JURY_STAGE"]=$row["JURY_STAGE"];
		$output["ENCADRANT"]=$row["ENCADRANT"];
		$output["NOM_ORG"]=$row["NOM_ORG"];
		$output["ADRESSE_ORG"]=$row["ADRESSE_ORG"];
	    $output["RAPPORT"]=$row["RAPPORT"];
		$output["DATE_DEPOT"]=$row["DATE_DEPOT"];
	
	
	}
	echo json_encode($output);
}
?>