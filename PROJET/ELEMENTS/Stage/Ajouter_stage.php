<?php
session_start();
if(!isset($_SESSION["NOM"])&&!isset($_SESSION["PENOM"])&&!isset($_SESSION['connecter']))
{	
header('location:http://localhost/PROJET_STAGE/PROJET/Accueil/Accueil.php');
}
include("../../CONNEXION_BASE_DONNEE/CONNEXION.php");
$Encadrant=$bdd->query('select NOM,PRENOM FROM information_encadrant ');
$Entreprise=$bdd->query('select NOM FROM entreprise ');
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
<link rel="stylesheet" href='../../../css/bootstrap.css' />
<link rel="stylesheet" href="../../../css/font-awesome.min.css" />
<link rel='stylesheet' href='../../../css/media.css' />
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel='stylesheet' href='../../../css/style_stage.css' />
<link rel='stylesheet' href='../../../css/s-stage.css' />
<link rel='stylesheet' href='../../../css/style_projet/style_dropdown.css' />
<!--[if lt IE 9]>
	<script src="../js/html5shiv.min.js"></script>
	<script src="../js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<script src="../../../js/jquery-1.11.1.min.js"></script>
<script src="../../../js/bootstrap.min.js"></script>
<script src="../../../js/plugins.js"></script>

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
							  <img src="../../../image/Faculté de science/fs_log.png" alt="Accueil">
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

<li class="active stage"><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Stage/Ajouter-groupe.php" ><i class="fa fa-file-alt fa-2x"></i> Stage </a>
</li>
<li class="active " style="margin-left:1px;margin-right:1px;"><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/ETUDIANT/Etudiant.PHP"  ><i class="fa fa-book-reader fa-2x"></i> Etudiants</a>
</li>

  <li class="active">
                    <a href="" ><i class="fa fa-chalkboard-teacher " style='font-size: 2em;'></i><span style="font-size:14px;"> Encadrants</span> <i class="fa fa-sort-desc" aria-hidden="true"></i></a>
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
<li class="active"><a href="#" title=""><i class="fa fa-book fa-2x"></i> Rapports</a></li>

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
<!--start section stage-->
<section class="breadcrumb item " style="height: 927px;">
<div class="panel panel-default">
      <!--End panel-heading-->
  <div class="panel-heading">
    <div class="col-md-8">
       <ol class="breadcrumb use-roboto"><li><a href="http://localhost/PROJET_STAGE/PROJET/Accueil/Accueil.php"><i class="fa fa-home"></i> <span class="sr-only">Page d'accueil</span></a></li><li class="active">Stagiaires</li></ol>                
    </div>
     <div class="col-md-12">
<div class="skills-progress">
  <div class="progress">
     <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0"  aria-valuemax="100" style="width:100%">
				    100%
	 </div>
   </div>
</div>
       </div>
  </div>
     <!--End heading--> 
	   <form action="../../Fichier_traitement/Inscrire_stagiaire.php" id="signup-form" class="form-horizontal" role="form" method="post" accept-charset="utf-8" novalidate="novalidate" onsubmit="return Validate()" name="vform">
    <!--start panel-body--> 
  <div class="panel-body" style="height: 738px;">
   <div class="row">
                <div class="col-md-12">
                    <div class="wrapper wrapper-content">
                                                <div id="step1" class="ibox register-candidat">
	<div class="ibox-title border-primary">
        <h2>Ajouter Stage : Information de base</h2>
    </div><hr>
    <div class="ibox-content">
	    <div class="form-group" id="Sujet_div">
            <label for="Sujet" class="col-sm-3 col-sm-offset-1 control-label">Sujet de stage <span class="text-danger">*</span></label>
            <div class="col-sm-7">
                <input type="text" name="Sujet" value="" id="Sujet" placeholder="Sujet..." class="form-control " >
				<div id="Sujet_error"></div>
            </div>
        </div>
           
       
        <div class="form-group">
            <label class="col-sm-3 col-sm-offset-1 control-label">Plus d'informations à ce sujet </label>
            <div class="col-sm-6">
                <textarea type="text" name="PLUS_INFORMATIONS"  rows="5" value="" id="Information_sujet" placeholder="Plus d'informations à ce sujet..." class="form-control"></textarea>
            </div>
        </div>
                
        <div class="form-group">
            <label class="col-sm-3 col-sm-offset-1 control-label">Date de début</label>
            <div class="col-sm-6">
                <?php echo '<input type="date" min="'.date("Y-m-d"). '" name="Date_de_début" value="" id="Date de début" placeholder="jj/mm/aa" class="form-control"/> ';?>
                            </div>
        </div>
		<div class="form-group">		
			<label class="col-sm-3 col-sm-offset-1 control-label">Date Fin </label>				
			<div class="col-sm-6">
                <?php echo '<input type="date" min="'.date("Y-m-d").'" name="Date_Fin" value="" id="Date Fin" placeholder="Date Fin" class="form-control">';?>
            </div>				
        </div>
        <div class="form-group">
            <label class="col-sm-3 col-sm-offset-1 control-label">Date Soutnance</label>
            <div class="col-sm-6">
              <?php  echo '<input type="date" min="'.date("Y-m-d").'" name="Date_Soutnance" value="" id="Date Soutnance" placeholder="Date Soutnance" class="form-control">'; ?>
            </div>
		</div>
        
				<div class="form-group" >
            <label class="col-sm-3 col-sm-offset-1 control-label">Encadrant Professionnel </label>
			<div class="col-sm-6">
                <input type="text" name="Jury_Stage" value="" id="Jury_Stage" placeholder="Encadrant Professionnel" class="form-control">
				
            </div>				
                </div>
			<div class="form-group" >
			 <label class="col-sm-3 col-sm-offset-1 control-label">Type de stage<span class="text-danger">*</span></label>
			 <div class="col-sm-3">
                <select  class="form-control" name="TYPE" id="hebdomadaire_liste">
                        
						 	 
						 <option value="LOCAL">LOCAL</option>
						 <option value="EXTÉRIEUR">EXTÉRIEUR</option>
					    
               </select>
			 </div>  
            </div>	
				
		<div class="form-group">
            <label class="col-sm-3 col-sm-offset-1 control-label">Encadrant <span class="text-danger">*</span></label>
            <div class="col-sm-3">
                <select id="Encadrant" name="Encadrant" class="form-control">
                     <?php  
					 while($EN= $Encadrant-> fetch())
					 { 
				      $NOM=$EN['NOM'] . " " .$EN['PRENOM'];
					  echo  '<option value="' . $NOM .'"> ' .$EN["NOM"] ." ". $EN["PRENOM"] ."</option>";                     
			         }					
					 ?>
				</select>	 
             </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 col-sm-offset-1 control-label"> Entreprise<span class="text-danger">*</span></label>
            <div class="col-sm-3">
                <select id="Entreprise"  name="Entreprise" class="form-control">
                       <?php 
					   while($TR=$Entreprise-> fetch())
					   {  
					   echo  '<option value="' .$TR['NOM'] . '">'. $TR['NOM'] . '</option>';
					   }
					   ?>
				</select>	   
             </div>
        </div>
	<div class="form-group">
            <div class="col-sm-11 col-sm-offset-1">
                <p class="text-danger" >(*) Champ obligatoire</p>
            </div>
        </div>
    
        </div>
	</div>	
    <!--End panel-body-->
	</div>          
		  </div>
            </div>
	</div>		
	 
  <!--Start panel-footer-->
  <div class="panel-footer " >
  <div class="ibox-footer text-left righ" >
  <a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Stage/Ajouter_Stagiaire.php">
		<button type="button" class="btn btn-info " style="margin-left:0px;"><i class="fa fa-arrow-left"></i> Précédent</button></a>
    </div>
   <div class="ibox-footer text-right righ" >
  <button type="submit" class="btn btn-success" name="Terminer" style="margin-top: 0px;"><i class="fa fa-check"></i>Terminer</button>
	</div>
  
  </div>  
</form>        
			
    <!--End panel-footer-->
</section>
<!--End section stage-->

 <!--Start footer-->
            <a class="scrollup " href="#" title="Haut de page" >
				<i class="fa fa-arrow-alt-circle-up fa-4x" aria-hidden="true" ></i>
			</a>
<footer class=" container-fluid footbot text-center breadcrumb ">
		<div class="container">
			<div class="row copyright">
				<p>
					Tous Droits Réservés FS Tetouan Copyright  © 2019. Courriel: <a class="" href="mailto:fs.tetouan.contact@gmail.com">fs.tetouan.contact@gmail.com</a><br>
					Faculté des Sciences, BP. 2121 M'Hannech II , 93030 Tétouan Maroc
				</p>
			</div>
			
		</div>
</footer>
<!--End footer-->
	
	

<script type="text/javascript">
// SELECTING ALL TEXT ELEMENTS

var Sujet = document.forms['vform']['Sujet'];
//var Jury_Stage = document.forms['vform']['Jury_Stage'];

// SELECTING ALL ERROR DISPLAY ELEMENTS
var Sujet_error = document.getElementById('Sujet_error');
//var Jury_Stage_error = document.getElementById('Jury_Stage_error');

// SETTING ALL EVENT LISTENERS

Sujet.addEventListener('blur', SujetVerify, true);
//Jury_Stage.addEventListener('blur', Jury_StageVerify, true);

// validation function
function Validate() {
	
	// validate Sujet
  if (Sujet.value == "") {
    Sujet.style.border = "1px solid red";
    document.getElementById('Sujet_div').style.color = "red";
    Sujet_error.textContent = " ** Ce champ est obligatoire.";
    Sujet.focus();
    return false;
  }
 
 if (!isNaN(Sujet.value)) {
    Sujet.style.border = "1px solid red";
    document.getElementById('Sujet_div').style.color = "red";
    Sujet_error.textContent = " ** Seulement les caractéres sont valide.";
    Sujet.focus();
    return false;
  }
  
 if ((Sujet.value.length < 5) || (Sujet.value.length > 50)) {
    Sujet.style.border = "1px solid red";
    document.getElementById('Sujet_div').style.color = "red";
    Sujet_error.textContent = " ** La longueur de nom de sujet doit être comprise entre 5 et 50";
    Sujet.focus();
    return false;
  }
  
 /* if (Jury_Stage.value == "") {
    Jury_Stage.style.border = "1px solid red";
    document.getElementById('Jury_Stage_div').style.color = "red";
    Jury_Stage_error.textContent = " ** Ce champ est obligatoire.";
    Jury_Stage.focus();
    return false;
  }
 
 if (!isNaN(Jury_Stage.value)) {
    Jury_Stage.style.border = "1px solid red";
    document.getElementById('Jury_Stage_div').style.color = "red";
    Jury_Stage_error.textContent = " ** Seulement les caractéres sont valide.";
    Jury_Stage.focus();
    return false;
  }
  
 if ((Jury_Stage.value.length < 5) || (Jury_Stage.value.length > 40)) {
    Sujet.style.border = "1px solid red";
    document.getElementById('Jury_Stage_div').style.color = "red";
    Jury_Stage_error.textContent = " ** La longueur de nom de sujet doit être comprise entre 5 et 50";
    Jury_Stage.focus();
    return false;
  }*/
// event handler functions
}
function SujetVerify() {
  if ((Sujet.value != "") && (Sujet.value.length >= 5) && (Sujet.value.length <= 50) && isNaN(Sujet.value)) {
   Sujet.style.border = "1px solid #5e6e66";
   document.getElementById('Sujet_div').style.color = "#5e6e66";
   Sujet_error.innerHTML = "";
   return true;
  }   
}

</script>
	
	
</body>
</html>
