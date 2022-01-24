<?php
include("../../CONNEXION_BASE_DONNEE/CONNEXION.php");
if(isset($_POST['submit']))
{	
$password =$bdd->query("select PASSWORD from  information_encadrant where MATRICULE='".$_POST["matricule"]."'");
$encad_pass = $password->fetch();
$pass =$bdd->query("select COUNT(PASSWORD) AS NBPASSWORD from  information_encadrant where MATRICULE='".$_POST["matricule"]."'");
$ENC = $pass->fetch();
}
session_start();

if(!isset($_SESSION["NOM"])&&!isset($_SESSION["PENOM"])&&!isset($_SESSION['connecter']))
{	
header('location:http://localhost/PROJET_STAGE/PROJET/Accueil/Accueil.php');
}

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
	<li><a href="http://localhost/PROJET_STAGE/PROJET/Accueil/AcceuilEncadrant.php" style="color:#ffffff; background-color: #ca5c34;">ACCUEIL</a></li> 
	<li><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Conseil_&_infos/CONSEIL_&_INFOS1.php" style="margin-left: 1px;">CONSEIL & INFOS</a></li> 
    <li><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/ORIENTATION/ORIENTATION1.php">ORIENTATION</a></li>
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
<li class="active" style="margin-left: 81px;"><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Encadrant-table-insert-update-delete/index.php" ><i class="fa fa-user-graduate fa-2x"></i> Stagiaires</a>
</li>

<li class="active"><a href="http://localhost/PROJET_STAGE/PROJET/blob-upload-master/indexEncadrant.php" title=""><i class="fa fa-book fa-2x"></i> Rapports</a></li>

<li class="active">
                    <a href="#" ><i class="fas fa-key " style='font-size: 2em;'></i><span style="font-size:14px;"> MOT DE PASSE</span> <i class="fa fa-sort-desc" aria-hidden="true"></i></a>
									<ul class="dropdown-menu multi-level drop" style="width: 244px;">
										<li class="dropdown-item" ><a  style="color: #e4d5d0;" href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/RECUPERER_MDP/EncadrantChangerMdp.php">CHANGER MOT DE PASSE</a>    </i>
										</li>
										<li class="dropdown-item"><a  style="color: #e4d5d0;" href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/RECUPERER_MDP/EncadrantRecupMdp.php">RECUPERER MOT DE PASSE</a>   </i>
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
if($ENC['NBPASSWORD']!=1)
{
	echo '<div class="alert alert-danger">cette MATRICULE n\'existe pas !</div>';
}
}	
?>	
	
<div style="height:337px">	
        <!--Start header-formule-->
		<div class="groupe">
		<span class="image"></span>
		<h2 class="titre titresnewdesign">Retrouvez ici votre mot de passe</h2>
		</div>
		
		<!--End header-formule-->
    <!--Début de formule_connect-->  
		<div class="row" style="width: 1350px;">
	<div class="col-md-offset-4 col-md-4">
	<div class="well">
	<form method="post">
	<div class="form-group">
	<label>Votre numéro de MATRICULE</label>
	<input type="text" class="form-control" name="matricule">
	</div>
	<div class="form-group">
	<label for="message">Votre mot de passe est:  <?php if(isset($encad_pass['PASSWORD'])){echo $encad_pass['PASSWORD'];} ?>
	</label>
	</div>
	</br>
	<button type="submit" name="submit" class="btn btn-primary btn-block" style="margin-left: 90px;
      width: 200px;" value="1"><i class="fa fa-reply"></i> Envoyer MATRICULE </button>
	</form>
	</div>
	</div>
	    </div>
</div>
	<!--Fin de formule_connect-->  

	<!--Start footer-->

<footer class=" container-fluid footbot text-center breadcrumb " style="width: 1362px;">
		<div class="container">
			<div class="row copyright">
				<p style="margin-top: 15px;">
					Tous Droits Réservés FS Tetouan Copyright  © 2019. Courriel: <a class="" href="mailto:fs.tetouan.contact@gmail.com">fs.tetouan.contact@gmail.com</a><br>
					Faculté des Sciences, BP. 2121 M'Hannech II , 93030 Tétouan Maroc
				</p>
			</div>
			
		</div>
</footer>
<!--End footer-->
	
	
	
	</body>
</html>