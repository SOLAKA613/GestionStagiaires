<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		
		$statements = $connection->prepare("
			INSERT INTO etudiant (CNE, CYCLE,NOM,PRENOM,FILIERE,GSM,EMAIL,AGE,ADRESSE,NATIONALITE) 
			VALUES (:CNE, :CYCLE, :NOM, :PRENOM, :FILIERE, :GSM, :EMAIL, :AGE, :ADRESSE, :NATIONALITE)
		");
		$result = $statements->execute(
			array(
				':CNE'	=>	$_POST["CNE"],
				':CYCLE'	=>	$_POST["CYCLE"],
				':NOM'	=>	$_POST["NOM"],
				':PRENOM'	=>	$_POST["PRENOM"],
				':FILIERE'	=>	$_POST["FILIERE"],
				':GSM'	=>	$_POST["GSM"],
				':EMAIL'	=>	$_POST["EMAIL"],
				':AGE'	=>	$_POST["AGE"],
				':ADRESSE'	=>	$_POST["ADRESSE"],
				':NATIONALITE'	=>	$_POST["NATIONALITE"]
				
			)
		);
		$sta = $connection->prepare("
			INSERT INTO groupe (CNE,TYPE) 
			VALUES (:CNE,:TYPE)
		");
		$result2 = $sta->execute(
			array(
				':CNE'	=>	$_POST["CNE"],				
			    ':TYPE'	=>	$_POST["TYPE"]
			)
		);
		
		$requte=$connection->query('SELECT `ID_GROUPE` FROM `groupe` WHERE CNE ='.$_POST['CNE']);

        $ID = $requte->fetch();
		
		$stat = $connection->prepare("
			INSERT INTO stage (ID_GROUPE,SUJET,PLUS_INFORMATIONS,DATE_DEBUT,DATE_FIN,DATE_SOUTENANCE,JURY_STAGE,ENCADRANT) 
			VALUES (:ID_GROUPE,:SUJET, :PLUS_INFORMATIONS, :DATE_DEBUT, :DATE_FIN, :DATE_SOUTENANCE, :JURY_STAGE, :ENCADRANT)
			");
		$result3 = $stat->execute(
			array(
				':SUJET'	=>	$_POST["SUJET"],
				':PLUS_INFORMATIONS'	=>	$_POST["PLUS_INFORMATIONS"],
				':DATE_DEBUT'	=>	$_POST["DATE_DEBUT"],
				':DATE_FIN'	=>	$_POST["DATE_FIN"],
				':DATE_SOUTENANCE'	=>	$_POST["DATE_SOUTENANCE"],
				':JURY_STAGE'	=>	$_POST["JURY_STAGE"],
				':ENCADRANT'	=>	$_POST["ENCADRANT"],
				'ID_GROUPE' => $ID["ID_GROUPE"]
				
			)
		);
		$requte1=$connection->query('SELECT `ID_STAGE` FROM `stage` WHERE ID_GROUPE ='.$ID["ID_GROUPE"]);

        $ID1 = $requte1->fetch();
		
			$st = $connection->prepare("
			INSERT INTO effectuer (ID_STAGE) 
			VALUES (:ID_STAGE)
		");
		$result4 = $st->execute(
			array(
				':ID_STAGE'	=>	$ID1["ID_STAGE"]				
			)
		);
		
		$requte5=$connection->query('SELECT `ID_ORGANISME` FROM `effectuer` WHERE ID_STAGE ='.$ID1["ID_STAGE"]);

        $ID2 = $requte5->fetch();
		
		$s = $connection->prepare("
			INSERT INTO organisme (ID_ORGANISME,NOM_ORG,ADRESSE_ORG) 
			VALUES (:ID_ORGANISME,:NOM_ORG,:ADRESSE_ORG)
		");
		$result6 = $s->execute(
			array(
				':ID_ORGANISME'	=>	$ID2["ID_ORGANISME"],
                ':NOM_ORG' => $_POST["NOM_ORG"],
				':ADRESSE_ORG' => $_POST["ADRESSE_ORG"]				
				
			)
		);
		
		$rapport = $connection->prepare("
			INSERT INTO rapport (ID_STAGE,RAPPORT,DATE_DEPOT) 
			VALUES (:ID_STAGE,:RAPPORT,:DATE_DEPOT)
		");
		$result7 = $rapport->execute(
			array(
			    ':ID_STAGE'	=>	$ID1["ID_STAGE"],
				':RAPPORT'	=>$_POST["NOM_RAPPORT"],
                ':DATE_DEPOT' => $_POST["DATE_DEPOT"]
							
				
			)
		);
		if(!empty($result))
		{
			echo 'Informations inséré avec succés';
		}
	}
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

?>