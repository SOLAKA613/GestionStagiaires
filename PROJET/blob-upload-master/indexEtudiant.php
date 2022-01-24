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
<?php
include_once 'dbconfig.php';
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
<link rel='stylesheet' href='../../css/s-stage.css' />
<link rel='stylesheet' href='../../css/style_etudiant.css' />
<link rel='stylesheet' href='../../css/style_projet/style_dropdown.css' />
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
<li class="active"><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/ETUDIANT/Etudiant.PHP" ><i class="fa fa-book-reader fa-2x"></i> Etudiants</a>
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
<li class="active stage"><a href="http://localhost/PROJET_STAGE/PROJET/blob-upload-master/indexEtudiant.php" title=""><i class="fa fa-book fa-2x"></i> Rapports</a></li>

<li class="active" style="margin-left:1px">
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

<style>

</style>
       	<?php
				
				if(isset($_SESSION['FAIL']) && $_SESSION['FAIL']==true && isset($_SESSION['btn-upload']))
				{
					
				echo '<div class="alert alert-danger"><label>Problème lors du téléchargement du fichier !</div>';
				$_SESSION['FAIL']=false;	
				}
				
				
	    ?>	 
	 <!--start section stage-->
<section class="breadcrumb item " style=" position: relative;height: 570px;">
<!--start panel-default-->
<div class="panel panel-default"style="height: 501px;">
	<!--start panel-body--> 
  <div class="panel-body" style="height: 501px;">
   
   <div class="row">
                <div class="col-md-12">
                    <div class="wrapper wrapper-content">
                                                <div id="step1" class="ibox register-candidat">
    <form action="uploadEtudiant.php" method="post" enctype="multipart/form-data" id="signup-form" class="form-horizontal" role="form"  accept-charset="utf-8" novalidate="novalidate" onsubmit="return Validate()" name="vform">
    <div class="ibox-title border-primary">
        <h2>Ajouter rapport</h2>
    </div><hr>
    <div class="ibox-content">
	
	       
        <div class="form-group" id="CNE_div" style="margin-top: 101px;">
            <label for="CNE" class="col-sm-3 col-sm-offset-1 control-label" >CNE <span class="text-danger">*</span></label>
            <div class="col-sm-7">
                <input type="text" name="CNE" value="" id="CNE" placeholder="Veuillez saisir 8 chifres" class="form-control">
                        <div id="CNE_error"></div>    
			</div>
        </div>
        
       	
        
         
				<input type="file" name="file" style="margin-left: 300px;margin-top: 42px;"/>
				<button type="submit" style="margin-left: 300px;margin-top: 10px;width: 87px;" name="btn-upload">Ajouter</button>
			
	
	
				<br /><br />
				
				
				
					
				
		
        <div class="form-group">
            <div class="col-sm-11 col-sm-offset-1">
                <p class="text-danger" style="margin-top: 30px;">(*) Champ obligatoire</p>
            </div>
        </div>
        <div class="hr-line-dashed"></div>
		
		
     
       
			
      
   
     </form> 
               </div><!--End ibox-content-->
                </div><!--End ibox-->
            </div><!--End wrapper-->
  </div><!--End col-md-12-->
  </div><!--End ROW-->
  </div><!--End panel-body-->
   <!--Start panel-footer-->
  <div class="panel-footer " style="margin-top: -18px;width: 1117px;margin-left: 0px;">
     <div class="ibox-footer text-right" >
 <a href="viewEtudiant.php"><button type="button" class="btn btn-success">Voir la table des rapports</button></a>
     </div>
   
  
  </div>  <!--End panel-footer--> 
  </div><!--start panel-default-->
  </section><!--END section stage-->
	
			<!--Start footer-->
             <a class="scrollup " href="#" title="Haut de page" >
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
// SELECTING ALL ERROR DISPLAY ELEMENTS
var CNE_error = document.getElementById('CNE_error');
// SETTING ALL EVENT LISTENERS
CNE.addEventListener('blur', CNEVerify, true);
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
     if (CNE.value.length != 8) {
    CNE.style.border = "1px solid red";
    document.getElementById('CNE_div').style.color = "red";
    CNE_error.textContent = " ** La longueur du CNE doit être égale à 8";
    CNE.focus();
    return false;
  }
}
// event handler functions
function CNEVerify() {
  if ((CNE.value != "") && !isNaN(CNE.value) && (CNE.value.length == 8)) {
   CNE.style.border = "1px solid #5e6e66";
   document.getElementById('CNE_div').style.color = "#5e6e66";
   CNE_error.innerHTML = "";
   return true;
  }
}
</script>
</body>
</html>