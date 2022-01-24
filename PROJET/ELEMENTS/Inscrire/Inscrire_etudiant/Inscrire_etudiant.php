<?php 
session_start();
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
<link rel="stylesheet" href='../../../../css/bootstrap.css' />
<link rel="stylesheet" href="../../../../css/font-awesome.min.css" />
<link rel='stylesheet' href='../../../../css/media.css' />
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel='stylesheet' href='../../../../css/style_stage.css' />
<link rel='stylesheet' href='../../../../css/style_etudiant.css' />
<!--[if lt IE 9]>
	<script src="../../../../js/html5shiv.min.js"></script>
	<script src="../../../../js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<script src="../../../../js/jquery-1.11.1.min.js"></script>
<script src="../../../../js/bootstrap.min.js"></script>
<script src="../../../../js/plugins.js"></script>

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
	<li><a href="http://localhost/PROJET_STAGE/PROJET/Accueil/Accueil.php" >ACCUEIL</a></li> 
	<li><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Conseil_&_infos/CONSEIL_&_INFOS.php" style="margin-left: 1px;">CONSEIL & INFOS</a></li> 
    <li><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/ORIENTATION/ORIENTATION.php">ORIENTATION</a></li>
      </li>	
	</ul>
	<ul class="nav navbar-nav navbar-right">
	<li class="nav navbar-nav">
	<li class="dropdown">
	<a class="btn btn-secondary " style="height: 52px;margin-right: 1px; border-radius: 0px;" id="dropdownMenuButton" data-toggle="dropdown"  ><i class="fa fa-sign-out-alt"></i>
	Se connecter</a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="    height: 100px;">
	<div class="deconnecte actif breadcrumb">
		<div class="logge" style="display: block;">
			<form method="post" action="../../../Fichier_traitement/Traitement_connecter.php">
			<div class="form-group">
            <label for="exampleDropdownFormusername">Nom de l'utilisateur :</label>
            <input type="text" name="username" class="form-control" id="exampleDropdownFormusername" placeholder="username">
            </div>
			<div class="form-group">
            <label for="exampleDropdownFormPassword1">Mot de passe :</label>
            <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="••••••••••••">
            </div>
			<div>
			<a   href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/RECUPERER_MDP/AccueilRecupMdp.php" class="accesperdus_link">Accès perdus ?  </a>
			<button type="submit" name="connecter" class="btn btn-success">Se connecter</button>
			</div>
			</form>
		</div>
	</div>
   </div>
	</li>
	<li><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Inscrire/Inscrire.php" style="color:#ffffff; background-color: #ca5c34;"><i class="fa fa-user-plus" aria-hidden="true"></i> S'inscrire</a></li>
           </li>	
	      </ul>  
		 </div>
		</div>
		<!-- End container-fluid-->
	</nav>
    	<!--End our navbar-->

<?php 
  if(isset($_SESSION['email_existe']) && isset($_SESSION['phone_existe']) && ($_SESSION['email_existe']==true) && ($_SESSION['phone_existe']==true))
    {
		$_SESSION['email_existe']=false;
		$_SESSION['phone_existe']=false;
	echo '<div class="alert alert-danger">email et némuro de téléphone sont déjà inscrit !</div>';	
	}
	if(isset($_SESSION['phone_existe']) && $_SESSION['phone_existe'] == true){
    echo '<div class="alert alert-danger">Ce némuro de téléphone est déjà inscrit !</div>';
    $_SESSION['phone_existe'] = false;
	
    }		
   if(isset($_SESSION['email_existe']) && $_SESSION['email_existe'] == true){
      echo '<div class="alert alert-danger">Cet email est déjà inscrit !</div>';
      $_SESSION['email_existe'] = false;
    }
	if(isset($_SESSION['CNE_existe']) && $_SESSION['CNE_existe'] == true){
      echo '<div class="alert alert-danger">Ce numéro de CNE est déjà inscrit !</div>';
      $_SESSION['CNE_existe'] = false;
    }
   
    
?>
      
		<!--start section stage-->
<section class="breadcrumb item " style="height: 719px;">

<div class="panel panel-default">
 
	<!--start panel-body--> 
  <div class="panel-body" style="height: 629px;">
   
   <div class="row">
                <div class="col-md-12">
                    <div class="wrapper wrapper-content">
                                                <div id="step1" class="ibox register-candidat">
    <form action="../../../Fichier_traitement/trait_Inscrire_etudiant.php" id="signup-form" class="form-horizontal" role="form" method="post" accept-charset="utf-8" novalidate="novalidate" onsubmit="return Validate()" name="vform">
    <div class="ibox-title border-primary">
        <h2>Inscription étudiant : Information de base</h2>
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
            <label for="Prenom" class="col-sm-3 col-sm-offset-1 control-label">CNE <span class="text-danger">*</span></label>
            <div class="col-sm-7">
                <input type="text" name="CNE" value="" id="CNE" placeholder="CNE" class="form-control " >
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
        <div class="form-group" id="email_div">
            <label class="col-sm-3 col-sm-offset-1 control-label">Email <span class="text-danger">*</span></label>
            <div class="col-sm-7">
                <input type="email" name="email" value="" id="email" placeholder="Email" class="form-control "  >
				<div id="email_error"></div>
                            </div>
        </div>
		<div class="form-group" id="username_div">
            <label class="col-sm-3 col-sm-offset-1 control-label">Nom de l'utilisateur <span class="text-danger">*</span></label>
            <div class="col-sm-7">
                <input type="text" name="username" value="" id="username" placeholder="Nom de l'utilisateur" class="form-control "  >
				<div id="username_error"></div>
            </div>
        </div>
        
		
		<div class="form-group" id="password_div">
            <label class="col-sm-3 col-sm-offset-1 control-label">Mot de passe <span class="text-danger">*</span></label>
            <div class="col-sm-7">
                <input type="password" name="password" value="" id="password" placeholder="Mot de passe" class="form-control " >
				<div id="password_error"></div>
                            </div>
        </div>
		
		
		
		
		<div class="form-group" id="password_confirm_div">
            <label class="col-sm-3 col-sm-offset-1 control-label">Confirmation <span class="text-danger">*</span></label>
            <div class="col-sm-7">
                <input type="password" name="password_confirm" value="" id="password_confirm" placeholder="Confirmez votre mot de passe" class="form-control " >
                         <div id="password_confirm_error"></div>   </div>
        </div>
		
		
		
		
        <div class="form-group" id="GSM_div">
            <label class="col-sm-3 col-sm-offset-1 control-label">GSM <span class="text-danger">*</span></label>
            <div class="col-sm-7">
			<input type="tel" name="GSM" value="" id="GSM" placeholder="0650123456" class="form-control"  >
			<div id="GSM_error"></div>   </div>
		</div>	
               
        <div class="form-group">
            <div class="col-sm-11 col-sm-offset-1">
                <p class="text-danger">(*) Champ obligatoire</p>
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        
   
      
   </div><!--End ibox-content-->
                </div><!--End ibox-->
            </div><!--End wrapper-->
  </div><!--End col-md-12-->
  </div><!--End ROW-->
  </div><!--End panel-body-->
    
	<!--Start panel-footer-->
  <div class="panel-footer ">
  <div class="ibox-footer text-left" >
  
   <div class="ibox-footer text-right" >
  <button type="submit" name="InsertB" style="margin-top: 7px;" class="btn btn-primary "><i class="fa fa-check"></i>  valider </button>
    </div>
  </div>
  </div>
  </div>
</form>	
    <!--End panel-footer-->
</section> 
<!--End section stage-->
	
		<!--Start footer-->
             <a class="scrollup " href="" title="Haut de page" >
				<i class="fa fa-arrow-alt-circle-up fa-4x" aria-hidden="true" ></i>
			 </a>
<footer class=" container-fluid footbot text-center breadcrumb " style="width: 1349px;">
		<div class="container">
			<div class="row copyright" style="margin-top: 17px;">
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
var email = document.forms['vform']['email'];
var password = document.forms['vform']['password'];
var password_confirm = document.forms['vform']['password_confirm'];
var GSM = document.forms['vform']['GSM'];
// SELECTING ALL ERROR DISPLAY ELEMENTS
var CNE_error = document.getElementById('CNE_error');
var Prenom_error = document.getElementById('Prenom_error');
var Nom_error = document.getElementById('Nom_error');
var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');
var password_confirm_error = document.getElementById('password_confirm_error');
var GSM_error = document.getElementById('GSM_error');
// SETTING ALL EVENT LISTENERS
CNE.addEventListener('blur', CNEVerify, true);
Prenom.addEventListener('blur', PrenomVerify, true);
Nom.addEventListener('blur', NomVerify, true);
email.addEventListener('blur', emailVerify, true);
password.addEventListener('blur', passwordVerify, true);
password_confirm.addEventListener('blur', password_confirmVerify, true);
GSM.addEventListener('blur', GSMVerify, true);
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
  // validate password
  if (password.value == "") {
    password.style.border = "1px solid red";
    document.getElementById('password_div').style.color = "red";
    password_error.textContent = " ** Ce champ est obligatoire.";
    password.focus();
    return false;
  }
  // validate password
     if ((password.value.length < 8) || (password.value.length > 20)) {
    password.style.border = "1px solid red";
    document.getElementById('password_div').style.color = "red";
    password_error.textContent = " ** La longueur du mot de passe doit être comprise entre 8 et 20";
    password.focus();
    return false;
  }
  // validate password_confirm
   if (password_confirm.value == "") {
    password_confirm.style.border = "1px solid red";
    document.getElementById('password_confirm_div').style.color = "red";
    password_confirm_error.textContent = " ** Ce champ est obligatoire.";
    password_confirm.focus();
    return false;
  }
  // check if the two passwords match
  if (password_confirm.value != password.value) {
    password_confirm.style.border = "1px solid red";
    document.getElementById('password_confirm_div').style.color = "red";
    password_confirm_error.textContent = "Les deux password ne sont pas compatible";
	password_confirm.focus();
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
  if(GSM.value.length!=10){
	GSM.style.border = "1px solid red";
    document.getElementById('GSM_div').style.color = "red";
    GSM_error.textContent = " ** La longueur du mot de passe doit être égale 10 ";
	GSM.focus();
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
  if ((Prenom.value != "") || ((Prenom.value.length > 2) || (Prenom.value.length <= 20)) || (isNaN(Prenom.value))) {
   Prenom.style.border = "1px solid #5e6e66";
   document.getElementById('Prenom_div').style.color = "#5e6e66";
   Prenom_error.innerHTML = "";
   return true;
  }
   
}
function NomVerify() {
  if ((Nom.value != "") || ((Nom.value.length > 2) || (Nom.value.length <= 20)) || (isNaN(Nom.value))) {
   Nom.style.border = "1px solid #5e6e66";
   document.getElementById('Nom_div').style.color = "#5e6e66";
   Nom_error.innerHTML = "";
   return true;
  }
}
function emailVerify() {
  if ((email.value != "") || (email.value.indexOf('@') > 0) || ((email.value.charAt(email.value.length-2)=='.') || (email.value.charAt(email.value.length-3)=='.')) ) {
  	email.style.border = "1px solid #5e6e66";
  	document.getElementById('email_div').style.color = "#5e6e66";
  	email_error.innerHTML = "";
  	return true;
  }
}
function passwordVerify() {
  if ((password.value != "") || ((password.value.length >= 8) && (password.value.length <= 20))) {
  	password.style.border = "1px solid #5e6e66";
  	document.getElementById('password_div').style.color = "#5e6e66";
  	password_error.innerHTML = "";
  	return true;
  }
}
function password_confirmVerify()
{
	 if (password.value === password_confirm.value) {
  	password_confirm.style.border = "1px solid #5e6e66";
  	document.getElementById('password_confirm_div').style.color = "#5e6e66";
  	password_confirm_error.innerHTML = "";
  	return true;
  }
}
function GSMVerify(){
	if ((GSM.value != "") || (!isNaN(GSM.value )) || (GSM.value.length==10)) {
  	GSM.style.border = "1px solid #5e6e66";
  	document.getElementById('GSM_div').style.color = "#5e6e66";
  	GSM_error.innerHTML = "";
  	return true;
  }
	
}
</script>
	</body>
</html>						