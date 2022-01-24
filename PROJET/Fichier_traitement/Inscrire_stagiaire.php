<?php
session_start();
if(!isset($_SESSION["NOM"])&&!isset($_SESSION["PENOM"])&&!isset($_SESSION['connecter']))
{	
header('location:http://localhost/PROJET_STAGE/PROJET/Accueil/Accueil.php');
}
include("../CONNEXION_BASE_DONNEE/CONNEXION.php");
$Licence=$bdd->query('select FILIERE FROM filiere where CYCLE="LICENCE"');
$Master=$bdd->query('select FILIERE FROM filiere where CYCLE="MASTER"');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8" />
<!-- IE Compatibility INTERNET EXPLORER Meta -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--First Compatibility Mobile Meta -->
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Offres et demandes de stages</title>
<link rel="stylesheet" href='../../css/bootstrap.css' />
<link rel="stylesheet" href="../../css/font-awesome.min.css" />
<link rel='stylesheet' href='../../css/media.css' />
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel='stylesheet' href='../../css/style_stage.css' />
<link rel='stylesheet' href='../../css/style_projet/style_dropdown.css' />
<link rel='stylesheet' href='../../css/style_projet/style_Entreprise.css' />
<link rel='stylesheet' href='../../css/style_projet/style_inscrire_stagiaire.css'/>
<!--[if lt IE 9]>
	<script src="../js/html5shiv.min.js"></script>
	<script src="../js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<script src="../../js/jquery-1.11.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/plugins.js"></script>

<!--Start our navbar-->
<nav class="navbar navbar-default navbar-inverse navbar-fixed-top " role="navigation" ><!--navbar-fixed-top:pour fixer la parite en haut qui est responsable sur la recherche laurs de déplacement de page -->
  <!--Start container-fluid-->
  <div class="container">
  <!--Start navbar-header -->
  <div class="navbar-header" style="height:53px; ">
   <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
   <span class="sr-only">Toggle navigation</span><!--button:pour transformer le menu sous forme d'une bouton qui contient ces menu ,et elles sont affiche lorsque on appuier sur ces menus -->
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   </button>
   </div>
   
   <div class="collapse navbar-collapse AA " id="bs-example-navbar-collapse-1">
   
    <ul class="nav navbar-nav navbar-left">
	 <li class="nav navbar-nav">
	<li><a href="http://localhost/PROJET_STAGE/PROJET/Accueil/AccueilEtudiant.php" style="color:#ffffff; background-color: #ca5c34;">ACCUEIL</a></li> 
	<li><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Conseil_&_infos/CONSEIL_&_INFOS2.php" style="margin-left: 1px;">CONSEIL & INFOS</a></li> 
    <li><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/ORIENTATION/ORIENTATION2.php">ORIENTATION</a></li>
      </li>	
	</ul>
	    <ul class="nav navbar-nav navbar-right">
	       <li class="nav navbar-nav">
	
			<li class="ac"><a><i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
			<?php echo  $_SESSION['NOM'] . " " . $_SESSION['PRENOM']; ?> </a>
			</li>
           </li>	
	    </ul>  
   </div>
 </div>
		<!-- End container-fluid-->
	</nav>
    	<!--End our navbar-->	
	<!--Start our header-->	
<section class="header">
	<nav class="navbar navbar-default container-fluid menu-pages" role="navigation">
			<div class="container-fluid">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<a class="logo navbar-btn pull-left navbar-left" href="/site/" title="Accueil">
							  <img src="../../image/Faculté de science/fs_log.png" alt="Accueil">
							</a>
					</div>
					 <!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>  
			            <div class="navbar-collapse collapse" id="navbar-collapse" >
							<ul class="nav navbar-nav">

<li class="active "><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Stage/Ajouter-groupe.php" ><i class="fa fa-file-alt fa-2x"></i> Stage </a>
</li>
<li class="active " ><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/ETUDIANT/Etudiant.PHP"  ><i class="fa fa-book-reader fa-2x"></i> Etudiants</a>
</li>

  <li class="active">
                    <a href="#" ><i class="fa fa-chalkboard-teacher " style='font-size: 2em;'></i><span style="font-size:14px;"> Encadrants</span> <i class="fa fa-sort-desc" aria-hidden="true"></i></a>
									<ul class="dropdown-menu multi-level drop">
										<li class="dropdown-submenu">Master    <i class="fa fa-caret-right" aria-hidden="true"></i>
											<ul class="dropdown-menu">
													<?php
														   while($M= $Master->fetch())
																{	
																echo'<li ><a class="lien"  href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Table_encadrant/table_encadrant2.php?lice='. $M['FILIERE'] .'">' .$M['FILIERE'] . '</a></li>';
																}
																
													?>			  
											</ul>
										</li>
										<li class="dropdown-submenu">Licence   <i class="fa fa-caret-right" aria-hidden="true"></i>
											<ul class="dropdown-menu">
											   <?php
													  while($d= $Licence->fetch())
																 {	 
																 echo'<li><a class="lien" href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Table_encadrant/table_encadrant2.php?lice='.$d['FILIERE'] .'">' .$d['FILIERE'] . '</a></li>';
																 }
											   ?>	
											</ul> 
										</li>
									</ul>
        </li>

<li class="active " style="margin-left: 1px;margin-right: 1px;"><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Entreprise/Entreprise2.php" ><i class="fa fa-building fa-2x"></i> Entreprise</a>
</li>
<li class="active"><a href="http://localhost/PROJET_STAGE/PROJET/blob-upload-master/indexEtudiant.php" title=""><i class="fa fa-book fa-2x"></i> Rapports</a></li>

<li class="active">
                    <a href="#" ><i class="fas fa-key " style='font-size: 2em;'></i><span style="font-size:14px;"> MOT DE PASSE</span> <i class="fa fa-sort-desc" aria-hidden="true"></i></a>
									<ul class="dropdown-menu multi-level drop" style="width: 244px;">
										<li class="dropdown-item" ><a  style="color: #e4d5d0;" href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/RECUPERER_MDP/EtudiantChangerMdp.php">CHANGER MOT DE PASSE</a>    </i>
										</li>
										<li class="dropdown-item"><a  style="color: #e4d5d0;" href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/RECUPERER_MDP/EtudiantRecupMdp.php">RECUPERER MOT DE PASSE</a>   </i>
										</li>
									</ul>
</li>

<li class="active"><a href="http://localhost/PROJET_STAGE/PROJET/Accueil/Accueil.php" title=""><i class="fa fa-power-off fa-2x"></i><span class="text"> Deconnecté </span></a>
                                  </ul>							
                                						
						</div>
					</div>
			</nav>	
</section>		
	<!--End our header-->
<?php
try
{
if(!isset($_SESSION["NOM"])&&!isset($_SESSION["PENOM"])&&!isset($_SESSION['connecter']))
{	
header('location:http://localhost/PROJET_STAGE/PROJET/Accueil/Accueil.php');
}	
include("../CONNEXION_BASE_DONNEE/CONNEXION.php");

if(isset($_POST['Terminer']) && isset($_SESSION['CNE']) && isset($_SESSION['CYCLE'])  && isset($_SESSION['Nom'])  && isset($_SESSION['Prenom']) &&
isset($_SESSION['FILIERE']) && isset($_SESSION['GSM'])  && isset($_SESSION['email'])  && isset($_SESSION['Age'])  && isset($_SESSION['Adresse'])  &&
isset($_POST['Sujet'])  && isset($_POST['PLUS_INFORMATIONS']) && isset($_POST['Date_de_début'])  && isset($_POST['Date_Fin'])  && 
isset($_POST['Date_Soutnance'])  && isset($_POST['Jury_Stage'])  && isset($_POST['Encadrant']) )
	
	{
		
$Etudiant=$bdd->exec('INSERT INTO `etudiant` (`CNE`, `CYCLE`, `NOM`, `PRENOM`, `FILIERE`, `GSM`, `EMAIL`, `AGE`, `ADRESSE`, `NATIONALITE`) 
VALUES ("'.$_SESSION['CNE'].'", "'.$_SESSION['CYCLE'].'", "'.$_SESSION['Nom'].'", "'.$_SESSION['Prenom'].'", "'.$_SESSION['FILIERE'].'","'.$_SESSION['GSM'].'",
 "'.$_SESSION['email'].'", "'.$_SESSION['Age'].'", "'.$_SESSION['Adresse'].'", "'.$_SESSION['NATIONALITE'].'")');
 
 
$Groupe=$bdd->exec('INSERT INTO `groupe` (`CNE`,TYPE) VALUES("'.$_SESSION['CNE'].'","'.$_POST['TYPE'].'")');

$requte=$bdd->query('SELECT `ID_GROUPE` FROM `groupe` WHERE CNE ='.$_SESSION['CNE']);

$ID = $requte->fetch(); 

$stage=$bdd->exec('INSERT INTO `stage` (`ID_GROUPE`,`SUJET`,`PLUS_INFORMATIONS`, `DATE_DEBUT`, `DATE_FIN`, `DATE_SOUTENANCE`, `JURY_STAGE`, `ENCADRANT`)
VALUES("'.$ID['ID_GROUPE'].'","'.$_POST['Sujet'].'","'.$_POST['PLUS_INFORMATIONS'].'","'.$_POST['Date_de_début'].'","'.$_POST['Date_Fin'].'", "'.$_POST['Date_Soutnance'].'",
 "'.$_POST['Jury_Stage'].'","'.$_POST['Encadrant'].'") ');

$ID_ST=$bdd->query('SELECT `ID_STAGE` FROM `stage` WHERE ID_GROUPE ='.$ID['ID_GROUPE']);

$ID_STAGE = $ID_ST->fetch(); 

$EFFECTUER=$bdd->exec('INSERT INTO `effectuer` (`ID_STAGE`) VALUES("'.$ID_STAGE['ID_STAGE'].'")');

$ID_ORG=$bdd->query('SELECT `ID_ORGANISME` FROM `effectuer` WHERE ID_STAGE = "'.$ID_STAGE['ID_STAGE'].'" ' );

$ID_ORGANISME = $ID_ORG->fetch();
$RA=$bdd->query('SELECT `ADRESSE` FROM `entreprise` WHERE NOM ="'.$_POST['Entreprise'].'"');
$ENT = $RA->fetch();
$ORGANISME=$bdd->exec('INSERT INTO `organisme` (`ID_ORGANISME`,`NOM_ORG`,`ADRESSE_ORG`) VALUES("'.$ID_ORGANISME['ID_ORGANISME'].'","'.$_POST['Entreprise'].'","'.$ENT['ADRESSE'].'" ) ');

$RAPPORT=$bdd->exec('INSERT INTO `rapport` (`ID_STAGE`, `SUJET`) VALUES("'.$ID_STAGE['ID_STAGE'].'","'.$_POST['Sujet'].'") '); 



 
 
 ?>	
	       <div class="alert alert-success" role="alert">
            <i class="fas fa-check fa-2x"></i><p class="reussi">Votre inscription est réussi,Merci.</p>
		   </div>
<?php			 
	}
else 
	{
?>		
          <div class="alert alert-danger" role="alert">
          <i class="fas fa-remove fa-2x" ></i>
		  <p class=" echec">Erreur ,votre inscription est échoué,nous vous prions de répéter votre inscription </br>
		   avec d'entrer des informations qui sont corrects,Merci.</p>
          </div>	
<?php
	 }	
}
catch(Exception $e){
die('Erreur:'.$e->getMessage());
}	
?>
<footer class=" container-fluid footbot text-center breadcrumb ">
		<div class="container">
			<div class="row copyright fot">
				<p>
					Tous Droits Réservés FS Tetouan Copyright  © 2019. Courriel: <a class="" href="mailto:fs.tetouan.contact@gmail.com">fs.tetouan.contact@gmail.com</a><br>
					Faculté des Sciences, BP. 2121 M'Hannech II , 93030 Tétouan Maroc
				</p>
			</div>
			
		</div>
</footer>
<!--End footer-->
</body>
</html>	