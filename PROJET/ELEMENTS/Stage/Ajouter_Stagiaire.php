<?php
session_start();
if(!isset($_SESSION["NOM"])&&!isset($_SESSION["PENOM"])&&!isset($_SESSION['connecter']))
{	
header('location:http://localhost/PROJET_STAGE/PROJET/Accueil/Accueil.php');
}
$fil = "";
$cycle = "";
if( isset($_POST["fil"]) && isset($_POST['cycle']) && isset($_POST["fil_"]))
{
	$cycle = $_POST['cycle'];	
	if($cycle == "LICENCE")
	{
		$fil = $_POST["fil"];
	} else {
		$fil = $_POST["fil_"];
	}


}
$_SESSION["CYCLE"]=$cycle;
$_SESSION["FILIERE"]=$fil;

include("../../CONNEXION_BASE_DONNEE/CONNEXION.php");
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
<?php 
  if(isset($_SESSION['email_existe']) && isset($_SESSION['phone_existe']) && isset($_SESSION['cne_existe']) && ($_SESSION['email_existe']==true) && ($_SESSION['phone_existe']==true) && ($_SESSION['cne_existe']==true))
    {
		$_SESSION['email_existe']=false;
		$_SESSION['phone_existe']=false;
		$_SESSION['cne_existe']=false;
		
	echo '<div class="alert alert-danger">Numéro de cne et email et némuro de téléphone sont déjà inscrit !</div>';	
	}
	if(isset($_SESSION['email_existe']) && isset($_SESSION['phone_existe'])  && ($_SESSION['email_existe']==true) && ($_SESSION['phone_existe']==true) )
    {
		$_SESSION['email_existe']=false;
		$_SESSION['phone_existe']=false;
		
	echo '<div class="alert alert-danger">Email et némuro de téléphone sont déjà inscrit !</div>';	
	}
	
	if(isset($_SESSION['email_existe']) && isset($_SESSION['cne_existe']) && ($_SESSION['email_existe']==true)  && ($_SESSION['cne_existe']==true))
    {
		$_SESSION['email_existe']=false;
		$_SESSION['cne_existe']=false;
		
	echo '<div class="alert alert-danger">Numéro de cne et email sont déjà inscrit !</div>';	
	}
	if(isset($_SESSION['phone_existe']) && isset($_SESSION['cne_existe']) && ($_SESSION['phone_existe']==true) && ($_SESSION['cne_existe']==true))
    {
		$_SESSION['phone_existe']=false;
		$_SESSION['cne_existe']=false;
		
	echo '<div class="alert alert-danger">Numéro de cne et némuro de téléphone sont déjà inscrit !</div>';	
	}
	
	if(isset($_SESSION['email_existe']) && isset($_SESSION['phone_existe']) && isset($_SESSION['cne_existe']) && ($_SESSION['email_existe']==true) && ($_SESSION['phone_existe']==true) && ($_SESSION['cne_existe']==true))
    {
		$_SESSION['email_existe']=false;
		$_SESSION['phone_existe']=false;
		$_SESSION['cne_existe']=false;
		
	echo '<div class="alert alert-danger">Numéro de cne et email et némuro de téléphone sont déjà inscrit !</div>';	
	}
	if(isset($_SESSION['email_existe']) && isset($_SESSION['phone_existe']) && isset($_SESSION['cne_existe']) && ($_SESSION['email_existe']==true) && ($_SESSION['phone_existe']==true) && ($_SESSION['cne_existe']==true))
    {
		$_SESSION['email_existe']=false;
		$_SESSION['phone_existe']=false;
		$_SESSION['cne_existe']=false;
		
	echo '<div class="alert alert-danger">Numéro de cne et email et némuro de téléphone sont déjà inscrit !</div>';	
	}
	if(isset($_SESSION['phone_existe']) && $_SESSION['phone_existe'] == true){
    echo '<div class="alert alert-danger">Ce némuro de téléphone est déjà inscrit !</div>';
    $_SESSION['phone_existe'] = false;
    }
	
   if(isset($_SESSION['email_existe']) && $_SESSION['email_existe'] == true){
      echo '<div class="alert alert-danger">Cet email est déjà inscrit !</div>';
      $_SESSION['email_existe'] = false;
    }
	 if(isset($_SESSION['cne_existe']) && $_SESSION['cne_existe'] == true){
      echo '<div class="alert alert-danger">Ce numéro de cne est déjà inscrit !</div>';
      $_SESSION['cne_existe'] = false;
    }
	
   
    
?>
	
<!--start section stage-->
<section class="breadcrumb item panetem" style="height: 840px;">
<div class="panel panel-default">
      <!--End panel-heading-->
  <div class="panel-heading">
    <div class="col-md-8">
       <ol class="breadcrumb use-roboto"><li><a href="http://localhost/PROJET_STAGE/PROJET/Accueil/Accueil.php"><i class="fa fa-home"></i> <span class="sr-only">Page d'accueil</span></a></li><li class="active">Stagiaires</li></ol>                
    </div>
     <div class="col-md-12">
<div class="skills-progress">
  <div class="progress">
     <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0"  aria-valuemax="100" style="width:70%">
				    70%
	 </div>
   </div>
</div>
       </div>
  </div>
     <!--End heading--> 
	<!--start panel-body--> 
  <div class="panel-body BOD" style="height: 651px;">
   <div class="row">
                <div class="col-md-12">
                    <div class="wrapper wrapper-content">
                                                <div id="step1" class="ibox register-candidat">
    <form action="http://localhost/PROJET_STAGE/PROJET/Fichier_traitement/Trait_Ajouter_Stagiaire.php" id="signup-form" class="form-horizontal" role="form" method="post" accept-charset="utf-8" novalidate="novalidate" onsubmit="return Validate()" name="vform">
    <div class="ibox-title border-primary">
        <h2>Ajouter Stagiaire(s) : Information de base</h2>
    </div><hr>
    <div class="ibox-content">
	   <div class="form-group">
            <label class="col-sm-3 col-sm-offset-1 control-label">Genre <span class="text-danger">*</span></label>
            <div class="col-sm-7">
                                <div class="radio radio-info radio-inline">
                    <input id="Homme" value="Homme" name="gender" type="radio" checked="checked">
                    <label for="Homme"> Homme </label>
                </div>
                                <div class="radio radio-info radio-inline">
                    <input id="Femme" value="Femme" name="gender" type="radio">
                    <label for="Femme"> Femme </label>
                </div>
                                            </div>
        </div>
	        <div class="form-group" id="CNE_div">
            <label for="CNE" class="col-sm-3 col-sm-offset-1 control-label">CNE <span class="text-danger">*</span></label>
            <div class="col-sm-7">
                <input type="text" name="CNE" value="" id="CNE" placeholder="Veuillez saisir 10 chifres" class="form-control">
                        <div id="CNE_error"></div>    
			</div>
            </div>
           
        <div class="form-group" id="Prenom_div">
            <label for="Prenom" class="col-sm-3 col-sm-offset-1 control-label">Prénom <span class="text-danger">*</span></label>
            <div class="col-sm-7">
                <input type="text" name="Prenom" value="" id="Prenom" placeholder="Prénom" class="form-control " >
				<div id="Prenom_error"></div>
            </div>
        </div>
        <div class="form-group" id="Nom_div">
            <label class="col-sm-3 col-sm-offset-1 control-label">Nom <span class="text-danger">*</span></label>
            <div class="col-sm-7">
                <input type="text" name="Nom" value="" id="Nom" placeholder="Nom" class="form-control "  >
				<div id="Nom_error"></div>
            </div>
        </div>
		<div class="form-group" id="Age_div">
            <label class="col-sm-3 col-sm-offset-1 control-label">Age <span class="text-danger">*</span></label>
            <div class="col-sm-7">
                <input type="number" name="Age" value="" id="Age" placeholder="Age" class="form-control">
                        <div id="Age_error"></div>                           
			</div>
        </div>
        <div class="form-group" id="email_div">
            <label class="col-sm-3 col-sm-offset-1 control-label">Email <span class="text-danger">*</span></label>
            <div class="col-sm-7">
                <input type="email" name="email" value="" id="email" placeholder="Email" class="form-control "  >
				<div id="email_error"></div>
                            </div>
        </div>
        <div class="form-group" id="Adresse_div">
            <label class="col-sm-3 col-sm-offset-1 control-label">Adresse<span class="text-danger">*</span></label>
            <div class="col-sm-7">
                <input type="text" name="Adresse" value="" id="Adresse" placeholder="Adresse" class="form-control">
                         <div id="Adresse_error"></div>                        
			</div>
        </div>
		
		
		
        <div class="form-group" id="GSM_div">
            <label class="col-sm-3 col-sm-offset-1 control-label">GSM <span class="text-danger">*</span></label>
            <div class="col-sm-7">
			<input type="tel" name="GSM" value="" id="GSM" placeholder="0650123456" class="form-control"  >
			<div id="GSM_error"></div>   </div>
		</div>	
		
		<div class="form-group" id="NATIONALITE_div">
            <label class="col-sm-3 col-sm-offset-1 control-label">NATIONALITÉ<span class="text-danger">*</span></label>
            <div class="col-sm-7">
                <input type="text" name="NATIONALITE" value="" id="NATIONALITE" placeholder="NATIONALITÉ" class="form-control">
                         <div id="NATIONALITE_error"></div>                        
			</div>
        </div>
		
        <div class="form-group">
            <div class="col-sm-11 col-sm-offset-1">
                <p class="text-danger">(*) Champ obligatoire</p>
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        
       
    </div> 
                     </div>
                </div>
            </div>
  </div>
  </div>
    <!--End panel-body-->
	<!--Start panel-footer-->
  <div class="panel-footer " >
  <div class="ibox-footer text-left righ" >
  <a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Stage/Ajouter-groupe.php">
		<button type="button" class="btn btn-info "><i class="fa fa-arrow-left"></i> Précédent</button></a>
    </div>
   <div class="ibox-footer text-right righ" >
  <button type="submit" class="btn btn-primary " name="Suivant1">Suivant <i class="fa fa-arrow-right"></i></button>
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
			<div class="row copyright fot">
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
var CNE = document.forms['vform']['CNE'];
var Nom = document.forms['vform']['Nom'];
var Prenom = document.forms['vform']['Prenom'];
var Age = document.forms['vform']['Age'];
var email = document.forms['vform']['email'];
var Adresse = document.forms['vform']['Adresse'];
var GSM = document.forms['vform']['GSM'];
var NATIONALITE = document.forms['vform']['NATIONALITE'];
// SELECTING ALL ERROR DISPLAY ELEMENTS
var CNE_error = document.getElementById('CNE_error');
var Prenom_error = document.getElementById('Prenom_error');
var Nom_error = document.getElementById('Nom_error');
var Age_error = document.getElementById('Age_error');
var email_error = document.getElementById('email_error');
var Adresse_error = document.getElementById('Adresse_error');
var GSM_error = document.getElementById('GSM_error');
var NATIONALITE_error = document.getElementById('NATIONALITE_error');
// SETTING ALL EVENT LISTENERS
CNE.addEventListener('blur', CNEVerify, true);
Prenom.addEventListener('blur', PrenomVerify, true);
Nom.addEventListener('blur', NomVerify, true);
Age.addEventListener('blur', AgeVerify, true);
email.addEventListener('blur', emailVerify, true);
Adresse.addEventListener('blur', AdresseVerify, true);
GSM.addEventListener('blur', GSMVerify, true);
NATIONALITE.addEventListener('blur', NATIONALITEVerify, true);
// validation function
function Validate() {
	// validate CNE
	if (CNE.value == "") {
    CNE.style.border = "1px solid red";
    document.getElementById('CNE_div').style.color = "red";
    CNE_error.textContent = " ** Ce champ est obligatoire.";
    CNE.focus();
    return false;
  }
    // validate CNE
     if (isNaN(CNE.value)) {
    CNE.style.border = "1px solid red";
    document.getElementById('CNE_div').style.color = "red";
    CNE_error.textContent = "  ** seulement les nombres sont valide";
    CNE.focus();
    return false;
  }
   // validate CNE
     if (CNE.value.length != 10) {
    CNE.style.border = "1px solid red";
    document.getElementById('CNE_div').style.color = "red";
    CNE_error.textContent = " ** La longueur du CNE doit être égale à 10";
    CNE.focus();
    return false;
  }

	
	// validate Prenom
  if (Prenom.value == "") {
    Prenom.style.border = "1px solid red";
    document.getElementById('Prenom_div').style.color = "red";
    Prenom_error.textContent = " ** Ce champ est obligatoire.";
    Prenom.focus();
    return false;
  }
  // validate Prenom
  if ((Prenom.value.length <= 2) || (Prenom.value.length > 20)) {
    Prenom.style.border = "1px solid red";
    document.getElementById('Prenom_div').style.color = "red";
    Prenom_error.textContent = " ** La longueur du prénom d'utilisateur doit être comprise entre 2 et 20";
    Prenom.focus();
    return false;
  }
   // validate Prenom
  if (!isNaN(Prenom.value)) {
    Prenom.style.border = "1px solid red";
    document.getElementById('Prenom_div').style.color = "red";
    Prenom_error.textContent = " ** seulement les caractéres sont valide";
    Prenom.focus();
    return false;
  }
  
  // validate Nom
  if (Nom.value == "") {
    Nom.style.border = "1px solid red";
    document.getElementById('Nom_div').style.color = "red";
    Nom_error.textContent = "** Ce champ est obligatoire.";
    Nom.focus();
    return false;
  }
  // validate Nom
    if ((Nom.value.length <= 2) || (Nom.value.length > 20)) {
    Nom.style.border = "1px solid red";
    document.getElementById('Nom_div').style.color = "red";
    Nom_error.textContent = " ** La longueur du nom d'utilisateur doit être comprise entre 2 et 20";
    Nom.focus();
    return false;
  }
   // validate Nom
  if (!isNaN(Nom.value)) {
    Nom.style.border = "1px solid red";
    document.getElementById('Nom_div').style.color = "red";
    Nom_error.textContent = " ** seulement les caractéres sont valide";
    Nom.focus();
    return false;
  }
    // validate Age
  if (Age.value == "") {
    Age.style.border = "1px solid red";
    document.getElementById('Age_div').style.color = "red";
    Age_error.textContent = " ** Ce champ est obligatoire.";
    Age.focus();
    return false;
  }
   // validate Age
  if (Age.value < 18 || Age.value > 70) {
    Age.style.border = "1px solid red";
    document.getElementById('Age_div').style.color = "red";
    Age_error.textContent = " ** l'age d'utilisateur doit être comprise entre 18 et 70 ";
    Age.focus();
    return false;
  }
   // validate Age
  if (isNaN(Age.value)) {
    Age.style.border = "1px solid red";
    document.getElementById('Age_div').style.color = "red";
    Age_error.textContent = " ** seulement les nombres sont valide";
    Age.focus();
    return false;
  }
  // validate email
  if (email.value == "") {
    email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red";
    email_error.textContent = " ** Ce champ est obligatoire.";
    email.focus();
    return false;
  }
  // validate email
  if(email.value.indexOf('@') <= 0 ){
	email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red";
    email_error.textContent = " ** @ Invalid Position";
    email.focus()
	return false;
	}
	// validate email
	/*if((email.value.charAt(email.value.length-2)!='.') || (email.value.charAt(email.value.length-3)!='.')){
	email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red";
    email_error.textContent = " ** . Invalid Position";
    email.focus()
	return false;
			}*/
	 // validate Adresse
    if (Adresse.value == "") {
    Adresse.style.border = "1px solid red";
    document.getElementById('Adresse_div').style.color = "red";
    Adresse_error.textContent = " ** Ce champ est obligatoire.";
	Adresse.focus();
    return false;
    }
    // validate Adresse 
	if(Adresse.value.length <= 10){
	Adresse.style.border = "1px solid red";
    document.getElementById('Adresse_div').style.color = "red";
    Adresse_error.textContent = " ** La longueur d'adresse d'utilisateur doit être supérieur au égale à 10 ";
	Adresse.focus();
    return false;  
    }					
  // validate GSM  
    if (GSM.value == "") {
    GSM.style.border = "1px solid red";
    document.getElementById('GSM_div').style.color = "red";
    GSM_error.textContent = " ** Ce champ est obligatoire.";
	GSM.focus();
    return false;
  }
  if(isNaN(GSM.value )){
    GSM.style.border = "1px solid red";
    document.getElementById('GSM_div').style.color = "red";
    GSM_error.textContent = " ** seulement les nombres sont valide ";
	GSM.focus();
    return false;
  }
  if((GSM.value.length!=10) || (GSM.value.length>12)){
	GSM.style.border = "1px solid red";
    document.getElementById('GSM_div').style.color = "red";
    GSM_error.textContent = " ** La longueur du mot de passe doit être égale 10 ou égale 12";
	GSM.focus();
    return false;  
  }
  // validate NATIONALITÉ
  if (NATIONALITE.value == "") {
    NATIONALITE.style.border = "1px solid red";
    document.getElementById('NATIONALITE_div').style.color = "red";
    NATIONALITE_error.textContent = "** Ce champ est obligatoire.";
    NATIONALITE.focus();
    return false;
  }
  // validate Nom
    if ((NATIONALITE.value.length <= 2) || (NATIONALITE.value.length > 50)) {
    NATIONALITE.style.border = "1px solid red";
    document.getElementById('NATIONALITE_div').style.color = "red";
    NATIONALITE_error.textContent = " ** La longueur du NATIONALITÉ d'utilisateur doit être comprise entre 2 et 50";
    NATIONALITE.focus();
    return false;
  }
   // validate Nom
  if (!isNaN(NATIONALITE.value)) {
    NATIONALITE.style.border = "1px solid red";
    document.getElementById('NATIONALITE_div').style.color = "red";
    NATIONALITE_error.textContent = " ** seulement les caractéres sont valide";
    NATIONALITE.focus();
    return false;
  }  
}
// event handler functions
function CNEVerify() {
  if ((CNE.value != "") && !isNaN(CNE.value) && (CNE.value.length == 10)) {
   CNE.style.border = "1px solid #5e6e66";
   document.getElementById('CNE_div').style.color = "#5e6e66";
   CNE_error.innerHTML = "";
   return true;
  }
}
function PrenomVerify() {
  if ((Prenom.value != "") || ((Prenom.value.length > 2) && (Prenom.value.length <= 20)) || (isNaN(Prenom.value))) {
   Prenom.style.border = "1px solid #5e6e66";
   document.getElementById('Prenom_div').style.color = "#5e6e66";
   Prenom_error.innerHTML = "";
   return true;
  }
   
}
function NomVerify() {
  if ((Nom.value != "") && ((Nom.value.length > 2) && (Nom.value.length <= 20)) && (isNaN(Nom.value))) {
   Nom.style.border = "1px solid #5e6e66";
   document.getElementById('Nom_div').style.color = "#5e6e66";
   Nom_error.innerHTML = "";
   return true;
  }
}

function AgeVerify(){
	if ((Age.value != "") && (Age.value >= 18 && Age.value <= 70) && (!isNaN(Age.value)))  {
  	Age.style.border = "1px solid #5e6e66";
  	document.getElementById('Age_div').style.color = "#5e6e66";
  	Age_error.innerHTML = "";
  	return true;
  }
} 
function emailVerify() {
  if ((email.value != "") && (email.value.indexOf('@') > 0)  ) {
  	email.style.border = "1px solid #5e6e66";
  	document.getElementById('email_div').style.color = "#5e6e66";
  	email_error.innerHTML = "";
  	return true;
  }
}
function AdresseVerify() {
  if ((Adresse.value != "") && (Adresse.value.length >= 10) ) {
  	Adresse.style.border = "1px solid #5e6e66";
  	document.getElementById('Adresse_div').style.color = "#5e6e66";
  	Adresse_error.innerHTML = "";
  	return true;
  }
}
function GSMVerify(){
	if ((GSM.value != "") && (!isNaN(GSM.value )) && ((GSM.value.length==10)||(GSM.value.length==12) )) {
  	GSM.style.border = "1px solid #5e6e66";
  	document.getElementById('GSM_div').style.color = "#5e6e66";
  	GSM_error.innerHTML = "";
  	return true;
  }
function NATIONALITEVerify() {
  if ((NATIONALITE.value != "") && ((NATIONALITE.value.length > 2) && (NATIONALITE.value.length <= 50)) && (isNaN(NATIONALITE.value))) {
   NATIONALITE.style.border = "1px solid #5e6e66";
   document.getElementById('NATIONALITE_div').style.color = "#5e6e66";
   NATIONALITE_error.innerHTML = "";
   return true;
  }
}	
}
</script>
	</body>
</html>						