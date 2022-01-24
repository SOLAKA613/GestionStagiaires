<?php
session_start();
include("../CONNEXION_BASE_DONNEE/CONNEXION.php");
$Encadrant_existe =$bdd->query('SELECT COUNT(*) AS nbEncadrant FROM information_encadrant WHERE USERNAME="'.$_POST['username'].'" AND PASSWORD="'.$_POST['password'].'" ');
$Encadrant = $Encadrant_existe->fetch();
$Etudiant_existe =$bdd->query('SELECT COUNT(*) AS nbEtudiant FROM etudiant_inscrit WHERE USERNAME="'.$_POST['username'].'" AND PASSWORD="'.$_POST['password'].'" ');
$Etudiant = $Etudiant_existe->fetch();
$Administrateur_existe =$bdd->query('SELECT COUNT(*) AS nbAdministrateur FROM administrateur WHERE USERNAME="'.$_POST['username'].'" AND PASSWORD="'.$_POST['password'].'" ');
$Administrateur = $Administrateur_existe->fetch();
if($Encadrant['nbEncadrant']==1)
{
$NOMEncadrant=$bdd->query('SELECT NOM,PRENOM  FROM information_encadrant WHERE USERNAME="'.$_POST['username'].'" AND PASSWORD="'.$_POST['password'].'" ');	
$NOMENC=$NOMEncadrant->fetch();
$_SESSION['NOM']=$NOMENC['NOM'];	
$_SESSION['PRENOM']=$NOMENC['PRENOM'];
header("location:http://localhost/PROJET_STAGE/PROJET/Accueil/AcceuilEncadrant.php");	
}
else
if($Etudiant['nbEtudiant']==1)	
{
$NOMEtudiant=$bdd->query('SELECT NOM,PRENOM  FROM etudiant_inscrit WHERE USERNAME="'.$_POST['username'].'" AND PASSWORD="'.$_POST['password'].'" ');	
$NOMETU=$NOMEtudiant->fetch();
$_SESSION['NOM']=$NOMETU['NOM'];	
$_SESSION['PRENOM']=$NOMETU['PRENOM'];		
header("location:http://localhost/PROJET_STAGE/PROJET/Accueil/AccueilEtudiant.php");
}
else
if($Administrateur['nbAdministrateur']==1)	
{
$NOMAdministrateur=$bdd->query('SELECT NOM,PRENOM  FROM administrateur WHERE USERNAME="'.$_POST['username'].'" AND PASSWORD="'.$_POST['password'].'" ');	
$NOMADMIN=$NOMAdministrateur->fetch();
$_SESSION['NOM']=$NOMADMIN['NOM'];	
$_SESSION['PRENOM']=$NOMADMIN['PRENOM'];		
header("location:http://localhost/PROJET_STAGE/PROJET/Accueil/AccueilAdministrateur.php");
}
else
{
 $_SESSION["ID"]= true;
          header('Location:  http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Connecter/connecter.php');	
	
}	
$_SESSION['connecter']=$_POST['connecter'];
?>