<?php
session_start();
if(!isset($_SESSION["NOM"])&&!isset($_SESSION["PENOM"])&&!isset($_SESSION['connecter']))
{	
header('location:http://localhost/PROJET_STAGE/PROJET/Accueil/Accueil.php');
}
include("../../CONNEXION_BASE_DONNEE/CONNEXION.php");

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
	<li><a href="http://localhost/PROJET_STAGE/PROJET/Accueil/AccueilAdministrateur.php" style="color:#ffffff; background-color: #ca5c34;">ACCUEIL</a></li> 
	<li><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Conseil_&_infos/CONSEIL_&_INFOS3.php" style="margin-left: 1px;">CONSEIL & INFOS</a></li> 
    <li><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/ORIENTATION/ORIENTATION3.php">ORIENTATION</a></li>
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
					<div class="col-xs-3">
							<a class="logo navbar-btn pull-left navbar-left" href="/site/" title="Accueil">
							  <img src="../../../image/Faculté de science/fs_log.png" alt="Accueil">
							</a>
					</div>
					 <!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle toggl" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>  
			            <div class="navbar-collapse collapse" id="navbar-collapse" >
							<ul class="nav navbar-nav">
<li class="active" style="margin-left: 81px;"><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Administrateur-table-insert-update-delete/Choisir_filiere.php"><i class="fa fa-user-graduate fa-2x"></i> Stagiaires</a>
</li>

<li class="active"><a href="http://localhost/PROJET_STAGE/PROJET/blob-upload-master/indexAdministrateur.php" title=""><i class="fa fa-book fa-2x"></i> Rapports</a></li>

  


<li class="active">
                    <a href="#" ><i class="fas fa-key " style='font-size: 2em;'></i><span style="font-size:14px;"> MOT DE PASSE</span> <i class="fa fa-sort-desc" aria-hidden="true"></i></a>
									<ul class="dropdown-menu multi-level drop" style="width: 244px;">
										<li class="dropdown-item" ><a  style="color: #e4d5d0;" href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/RECUPERER_MDP/AdminChangerMdp.php">CHANGER MOT DE PASSE</a>    </i>
										</li>
										<li class="dropdown-item"><a  style="color: #e4d5d0;" href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/RECUPERER_MDP/AdminRecupMdp.php">RECUPERER MOT DE PASSE</a>   </i>
										</li>
									</ul>
</li>

<li class="active"><a href="http://localhost/PROJET_STAGE/PROJET/Accueil/Accueil.php" title=""><i class="fa fa-power-off fa-2x"></i><span class="text"> Deconnecté </span></a>
</li>
                            </ul>							
						</div>
					</div>
			</nav>	
</section>		
	<!--End our header-->
<?php
 
 if(isset($_POST['submit']))
{	
$password =$bdd->query("select COUNT(PASSWORD) AS NBPASSWORD from administrateur where PASSWORD='".$_POST["Ancpass"]."'");
$Admin_pass = $password->fetch();

if($Admin_pass['NBPASSWORD']!=0)
{	
$updatepassword =$bdd->query("UPDATE administrateur SET PASSWORD='".$_POST["Newpass"]."'");
echo '<script>alert("Opération terminée avec succès")</script>';
}
else
{	
	echo '<div class="alert alert-danger">cette ancien mot de passe n\'existe pas !</div>';	
}
}
   
    
?>
	
<!--start section stage-->
<section class="breadcrumb item panetem" style="height: 509px;">
<div class="panel panel-default">
       
	<!--start panel-body--> 
  <div class="panel-body BOD" style="height: 420px;">
   <div class="row">
                <div class="col-md-12">
                    <div class="wrapper wrapper-content">
                                                <div id="step1" class="ibox register-candidat">
    <form action="" id="signup-form" class="form-horizontal" role="form" method="post" accept-charset="utf-8" novalidate="novalidate" onsubmit="return Validate()" name="vform">
    <div class="ibox-title border-primary">
        <h2>Changer mot de passe</h2>
    </div><hr>
    <div class="ibox-content" style="margin-top: 87px;">
	   
	        <div class="form-group" id="Ancpass_div">
            <label for="Ancpass" class="col-sm-3 col-sm-offset-1 control-label">Ancienne mot de passe <span class="text-danger">*</span></label>
            <div class="col-sm-7">
                <input type="password" name="Ancpass" value="" id="Ancpass" placeholder="Ancienne mot de passe" class="form-control">
                        <div id="Ancpass_error"></div>    
			</div>
            </div>
           
		
        <div class="form-group" id="Newpass_div">
            <label class="col-sm-3 col-sm-offset-1 control-label">Nouveau mot de passe <span class="text-danger">*</span></label>
            <div class="col-sm-7">
			<input type="password" name="Newpass" value="" id="Newpass" placeholder="Nouveau mot de passe" class="form-control"  >
			<div id="Newpass_error"></div>   </div>
		</div>			
        <div class="form-group">
            <div class="col-sm-11 col-sm-offset-1" style="margin-top: 29px;">
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
   <div class="ibox-footer text-right righ" >
  <button type="submit" class="btn btn-success " style="margin-top: 41px;" name="submit">Changer <i class="fa fa-check"></i></button>
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
var Ancpass = document.forms['vform']['Ancpass'];
var Newpass = document.forms['vform']['Newpass'];
// SELECTING ALL ERROR DISPLAY ELEMENTS
var Ancpass_error = document.getElementById('Ancpass_error');
var Newpass_error = document.getElementById('Newpass_error');
// SETTING ALL EVENT LISTENERS
Ancpass.addEventListener('blur', AncpassVerify, true);
Newpass.addEventListener('blur', NewpassVerify, true);
// validation function
function Validate() {
	// validate Ancpass
	if (Ancpass.value == "") {
    Ancpass.style.border = "1px solid red";
    document.getElementById('Ancpass_div').style.color = "red";
    Ancpass_error.textContent = " ** Ce champ est obligatoire.";
    Ancpass.focus();
    return false;
  }
    // validate Ancpass
     if (Ancpass.value.length < 8) {
    Ancpass.style.border = "1px solid red";
    document.getElementById('Ancpass_div').style.color = "red";
    Ancpass_error.textContent = "  ** La longueur du mot de passe doit être supérieur à 7";
    Ancpass.focus();
    return false;
  }
  
   
  // validate Newpass
	if (Newpass.value == "") {
    Newpass.style.border = "1px solid red";
    document.getElementById('Newpass_div').style.color = "red";
    Newpass_error.textContent = " ** Ce champ est obligatoire.";
    Newpass.focus();
    return false;
  }
    // validate Newpass
     if (Newpass.value.length < 8) {
    Newpass.style.border = "1px solid red";
    document.getElementById('Newpass_div').style.color = "red";
    Newpass_error.textContent = "  ** La longueur du mot de passe doit être supérieur à 7";
    Newpass.focus();
    return false;
  }
 
}	
// event handler functions
function AncpassVerify() {
  if ((Ancpass.value != "") && (Ancpass.value.length => 8) ) {
   Ancpass.style.border = "1px solid #5e6e66";
   document.getElementById('Ancpass_div').style.color = "#5e6e66";
   Ancpass_error.innerHTML = "";
   return true;
  }
}
function NewpassVerify() {
  if ((Newpass.value != "") && (Newpass.value.length => 8) ) {
   Newpass.style.border = "1px solid #5e6e66";
   document.getElementById('Newpass_div').style.color = "#5e6e66";
   Newpass_error.innerHTML = "";
   return true;
  }
}

</script>
	</body>
</html>						