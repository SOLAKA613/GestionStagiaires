<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		
		$statements = $connection->prepare("
		    INSERT INTO `information_encadrant`(`MATRICULE`, `NOM`, `PRENOM`, `DEPARTEMENT`, `FILIERE`, `EMAIL`, `GSM`, `PASSWORD`, `USERNAME`) 
			VALUES (:MATRICULE,:NOM,:PRENOM,:DEPARTEMENT,:FILIERE,:EMAIL,:GSM,:PASSWORD,:USERNAME)
		
		");
		$result = $statements->execute(
			array(
				':MATRICULE'	=>	$_POST["MATRICULE"],
				':NOM'	=>	$_POST["NOM"],
				':PRENOM'	=>	$_POST["PRENOM"],
				':DEPARTEMENT'	=>	$_POST["DEPARTEMENT"],
				':FILIERE'	=>	$_POST["FILIERE"],
				':EMAIL'	=>	$_POST["EMAIL"],
				':GSM'	=>	$_POST["GSM"],
				':PASSWORD'	=>	$_POST["PASSWORD"],
				':USERNAME'	=>	$_POST["USERNAME"]
				
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
			
			UPDATE `information_encadrant` 
			SET  NOM ='". $_POST["NOM"] ."', PRENOM ='". $_POST["PRENOM"] ."',
			DEPARTEMENT ='". $_POST["DEPARTEMENT"] ."',FILIERE ='". $_POST["FILIERE"] ."',EMAIL ='". $_POST["EMAIL"] ."',
			GSM ='". $_POST["GSM"] ."',PASSWORD ='". $_POST["PASSWORD"] ."',USERNAME ='". $_POST["USERNAME"] ."'
		    where MATRICULE=".$_POST["MATRICULE"]
		);
		
		
				
				
		
			echo 'Les données sont changé avec succés';
	}
}

?>