<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{   try
	{
	if($_POST["operation"] == "Edit")
	{
		
		$statement = $connection->exec(
			"
			
			UPDATE etudiant 
			SET etudiant.CYCLE ='". $_POST["CYCLE"] ."', etudiant.NOM ='". $_POST["NOM"] ."', etudiant.PRENOM ='". $_POST["PRENOM"] ."',
			etudiant.FILIERE ='". $_POST["FILIERE"] ."',etudiant.GSM ='". $_POST["GSM"] ."',etudiant.EMAIL ='". $_POST["EMAIL"] ."',
			etudiant.AGE ='". $_POST["AGE"] ."',etudiant.ADRESSE ='". $_POST["ADRESSE"] ."',etudiant.NATIONALITE ='". $_POST["NATIONALITE"] ."'
		    where etudiant.CNE=".$_POST["user_id"]
		);
		$sta = $connection->exec(
			"
			
			UPDATE groupe
			SET groupe.TYPE ='". $_POST["TYPE"] ."'
		    where groupe.CNE=".$_POST["user_id"]
		);
		$state=$connection->exec(
		    "
			UPDATE stage,groupe
			SET stage.SUJET='".$_POST["SUJET"]."',stage.PLUS_INFORMATIONS='".$_POST["PLUS_INFORMATIONS"]."', stage.DATE_DEBUT='".$_POST["DATE_DEBUT"]."',stage.DATE_FIN='".$_POST["DATE_FIN"]."',stage.DATE_SOUTENANCE='".$_POST["DATE_SOUTENANCE"]."',
            stage.JURY_STAGE='".$_POST["JURY_STAGE"]."',stage.ENCADRANT='".$_POST["ENCADRANT"]."'			
			where stage.ID_GROUPE=groupe.ID_GROUPE AND groupe.CNE=".$_POST["user_id"]
		);
		
		$requte=$connection->query('SELECT `ID_GROUPE` FROM `groupe` WHERE CNE ='.$_POST["user_id"]);

        $ID_GROUPE= $requte->fetch();
		
		$requte1=$connection->query('SELECT `ID_STAGE` FROM `stage` WHERE ID_GROUPE ='.$ID_GROUPE["ID_GROUPE"]);

        $ID_STAGE = $requte1->fetch();
		
			$rapport=$connection->exec(
		    "
			UPDATE rapport
			SET RAPPORT='".$_POST["NOM_RAPPORT"]."',DATE_DEPOT='".$_POST["DATE_DEPOT"]."'
			where  rapport.ID_STAGE=".$ID_STAGE["ID_STAGE"]
		);
		
		$requte2=$connection->query('SELECT `ID_ORGANISME` FROM `effectuer` WHERE ID_STAGE ='.$ID_STAGE["ID_STAGE"]);

        $ID_ORGANISME = $requte2->fetch();
		
			$organisme=$connection->exec(
		    "
			UPDATE organisme
			SET NOM_ORG='".$_POST["NOM_ORG"]."',ADRESSE_ORG='".$_POST["ADRESSE_ORG"]."'
			where  organisme.ID_ORGANISME=".$ID_ORGANISME["ID_ORGANISME"]
		);
		
		
				
				
		
			echo 'Les données sont changé avec succés';
	}
}
	
	catch (Exception $e) 
		{
			echo $e->getMessage() . "<br/>";
		}
}

?>