





 <?php
   $bdd = new PDO('mysql:host=localhost;dbname=stage_pfe', 'root', '');
    session_start();
    if (isset($_POST['InsertB'])) {
      
        try {
            if (
                isset($_POST['Nom']) && isset($_POST['Adresse']) 
                && isset($_POST['email']) && isset($_POST['GSM']) && $_POST['Nom'] != '' && $_POST['Adresse'] != '' && $_POST['email'] != ''  && $_POST['GSM'] != '')
				
             
             {
                
					 $email_existe =$bdd->query('SELECT COUNT(*) AS nbemail FROM entreprise WHERE Email="'.$_POST['email'].'" ');
                     $phone_existe =$bdd->query('SELECT COUNT(*) AS nbphone FROM entreprise WHERE GSM="'.$_POST['GSM'].'" ');
                     
					
					 
					 $email = $email_existe->fetch();
					 $phone = $phone_existe->fetch();
                    
					if (($email['nbemail'] != 0)&&($phone['nbphone'] != 0))
                    {
					$_SESSION['email_existe'] = true;
                    $_SESSION['phone_existe'] = true;
                    header('Location: ' . $_SERVER['HTTP_REFERER']);					
					}
					
					 if ($email['nbemail'] != 0) {
                         $_SESSION['email_existe'] = true;
                        header('Location: ' . $_SERVER['HTTP_REFERER']);
                       }
					   
					if ($phone['nbphone'] != 0) {
                         $_SESSION['phone_existe'] = true;
                         header('Location: ' . $_SERVER['HTTP_REFERER']); 
						 }	 
				 if (($email['nbemail'] == 0)&&($phone['nbphone'] == 0))						
                    {
				   
				    $reponse = $bdd->exec('INSERT INTO entreprise VALUES("' . $_POST['Nom'] . '","' . $_POST['Adresse'] . '", "' . $_POST['email'] . '","' . $_POST['GSM'] .'")');
                    echo '<div class="alert alert-success" role="alert" style="margin-top:20px;width:1025px;margin:auto;">Votre inscription est réussit,merci. </div><br/>';
                    }
					else{
						echo '<div class="alert alert-success" role="alert" style="margin-top:20px;width:1025px;margin:auto;">Votre inscription est non réussit . </div><br/>';
					}
                    
                    
				}   
				
            }
         catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
            echo 'Les variables du formulaire ne sont pas déclarées';
        }
    }
    ?>
	
<?php 
/*
  if(isset($_SESSION['email_existe']) && isset($_SESSION['phone_existe']) && ($_SESSION['email_existe']==true) && ($_SESSION['phone_existe']==true))
    {
		$_SESSION['email_existe']=false;
		$_SESSION['phone_existe']=false;
	echo '<div class="alert alert-danger">email et némuro de téléphone sont déjà existe !</div>';	
	}
	if(isset($_SESSION['phone_existe']) && $_SESSION['phone_existe'] == true){
    echo '<div class="alert alert-danger">Ce némuro de téléphone est déjà inscrit !</div>';
    $_SESSION['phone_existe'] = false;
	
    }		
   if(isset($_SESSION['email_existe']) && $_SESSION['email_existe'] == true){
      echo '<div class="alert alert-danger">Cet email est déjà inscrit !</div>';
      $_SESSION['email_existe'] = false;
    }
   
   */
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8" />
<!-- IE Compatibility INTERNET EXPLORER Meta -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--First Compatibility Mobile Meta -->
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Bootstrap Course 03 Include it</title>
<link rel="stylesheet" href='../css/bootstrap.css' />
<link rel="stylesheet" href="../css/font-awesome.min.css" />
<link rel='stylesheet' href='../css/media.css' />
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel='stylesheet' href='../css/style_stage.css' />
<link rel='stylesheet' href='../css/style_etudiant.css' />
<!--[if lt IE 9]>
	<script src="../../../../js/html5shiv.min.js"></script>
	<script src="../../../../js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/plugins.js"></script>

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
	<li><a href="http://localhost/PROJET_STAGE/PROJET/Accueil/Accueil.php" >ACCUIEL</a></li> 
	<li><a href="http://localhost/PROJET_STAGE/PROJET/Accueil/Conseil_&_infos/CONSEIL_&_INFOS.php" style="margin-left: 1px;">CONSEIL & INFOS</a></li> 
    <li><a href="http://localhost/PROJET_STAGE/PROJET/Accueil/ORIENTATION/ORIENTATION.php">ORIENTATION</a></li>
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
			<form method="post" action="https://www.cmonsite.fr/identification.php">
			<div class="form-group">
            <label for="exampleDropdownFormPassword1">Votre pseudo :</label>
            <input type="email" class="form-control" id="exampleDropdownFormemail" placeholder="pseudo">
            </div>
			<div class="form-group">
            <label for="exampleDropdownFormPassword1">Mot de passe :</label>
            <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="••••••••••••">
            </div>
			<div  >
			<a   href="https://www.cmonsite.fr/motdepasse.php" class="accesperdus_link">Accès perdus ?  </a>
			<button type="button" class="btn btn-success">Se connecter</button>
			</div>
			</form>
		</div>
	</div>
   </div>
	</li>
	<li><a href="http://localhost/PROJET_STAGE/PROJET/Accueil/Inscrire/Inscrire.php" style="color:#ffffff; background-color: #ca5c34;"><i class="fa fa-user-plus" aria-hidden="true"></i> S'inscrire</a></li>
           </li>	
	      </ul>  
		 </div>
		</div>
		<!-- End container-fluid-->
	</nav>
    	<!--End our navbar-->


    
		<!--start section stage-->
<section class="breadcrumb item ">

<div class="panel panel-default">
 
	<!--start panel-body--> 
  <div class="panel-body">
   
   <div class="row">
                <div class="col-md-12">
                    <div class="wrapper wrapper-content">
                                                <div id="step1" class="ibox register-candidat">
    <form action="../../../Fichier_traitement/trait_Inscrire_etudiant.php" id="signup-form" class="form-horizontal" role="form" method="post" accept-charset="utf-8" novalidate="novalidate" onsubmit="return Validate()" name="vform">
    <div class="ibox-title border-primary">
        <h2>Inscription Entreprise : Information de base</h2>
    </div><hr>
    <div class="ibox-content" style="margin-top:100px;">
	
	       
        
        <div class="form-group" id="Nom_div">
            <label class="col-sm-3 col-sm-offset-1 control-label">Nom <span class="text-danger">*</span></label>
            <div class="col-sm-7">
                <input type="text" name="Nom" value="" id="Nom" placeholder="Nom" class="form-control "  >
				<div id="Nom_error"></div>
            </div>
        </div>
		
		
		<div class="form-group labe" id="Adresse_div">
            <label for="Prenom" class="col-sm-3 col-sm-offset-1 control-label">Adresse <span class="text-danger">*</span></label>
            <div class="col-sm-7">
                <input type="text" name="Adresse" value="" id="Adresse" placeholder="Adresse" class="form-control " >
				<div id="Adresse_error"></div>
                            </div>
        </div>
		
		
        <div class="form-group labe" id="email_div">
            <label class="col-sm-3 col-sm-offset-1 control-label">Email <span class="text-danger">*</span></label>
            <div class="col-sm-7">
                <input type="email" name="email" value="" id="email" placeholder="Email" class="form-control "  >
				<div id="email_error"></div>
                            </div>
        </div>
        		
		
        <div class="form-group labe" id="GSM_div">
            <label class="col-sm-3 col-sm-offset-1 control-label">GSM <span class="text-danger">*</span></label>
            <div class="col-sm-7">
			<input type="tel" name="GSM" value="" id="GSM" placeholder="0650123456" class="form-control"  >
			<div id="GSM_error"></div>   </div>
		</div>	
               
        <div class="form-group" style="margin-top: 35px;">
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
var Nom = document.forms['vform']['Nom'];
var Adresse = document.forms['vform']['Adresse'];
var email = document.forms['vform']['email'];
var GSM = document.forms['vform']['GSM'];
// SELECTING ALL ERROR DISPLAY ELEMENTS
var Adresse_error = document.getElementById('Adresse_error');
var Nom_error = document.getElementById('Nom_error');
var email_error = document.getElementById('email_error');
var GSM_error = document.getElementById('GSM_error');
// SETTING ALL EVENT LISTENERS
Adresse.addEventListener('blur', AdresseVerify, true);
Nom.addEventListener('blur', NomVerify, true);
email.addEventListener('blur', emailVerify, true);
GSM.addEventListener('blur', GSMVerify, true);
// validation function
function Validate() {
	
  
  // validate Nom
  if (Nom.value == "") {
    Nom.style.border = "1px solid red";
    document.getElementById('Nom_div').style.color = "red";
    Nom_error.textContent = "** Ce champ est obligatoire.";
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
  
  // validate Nom
    if ((Nom.value.length <= 2) || (Nom.value.length > 20)) {
    Nom.style.border = "1px solid red";
    document.getElementById('Nom_div').style.color = "red";
    Nom_error.textContent = " ** La longueur du nom d'utilisateur doit être comprise entre 2 et 20";
    Nom.focus();
    return false;
  }
   
  
  
  	// validate Adresse
  if (Adresse.value == "") {
    Adresse.style.border = "1px solid red";
    document.getElementById('Adresse_div').style.color = "red";
    Adresse_error.textContent = " ** Ce champ est obligatoire.";
    Adresse.focus();
    return false;
  }
  
      // validate Adresse
  if (!isNaN(Adresse.value)) {
    Adresse.style.border = "1px solid red";
    document.getElementById('Adresse_div').style.color = "red";
    Adresse_error.textContent = " ** seulement les caractéres sont valide";
    Adresse.focus();
    return false;
  }
  // validate Adresse
  if ((Adresse.value.length <= 2) || (Adresse.value.length > 20)) {
    Adresse.style.border = "1px solid red";
    document.getElementById('Adresse_div').style.color = "red";
    Adresse_error.textContent = " ** La longueur de l'adresse de l'entreprise doit être comprise entre 2 et 20";
    Adresse.focus();
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


function NomVerify() {
  if ((Nom.value != "") || ((Nom.value.length > 2) || (Nom.value.length <= 20)) || (isNaN(Nom.value))) {
   Nom.style.border = "1px solid #5e6e66";
   document.getElementById('Nom_div').style.color = "#5e6e66";
   Nom_error.innerHTML = "";
   return true;
  }
}

function AdresseVerify() {
  if ((Adresse.value != "") || ((Adresse.value.length > 2) || (Adresse.value.length <= 20)) || (isNaN(Adresse.value))) {
   Adresse.style.border = "1px solid #5e6e66";
   document.getElementById('Adresse_div').style.color = "#5e6e66";
   Adresse_error.innerHTML = "";
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