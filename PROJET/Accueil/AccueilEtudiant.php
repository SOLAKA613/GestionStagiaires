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
<script type="text/javascript" src="../../js/calendrier.js"></script>
<link rel='stylesheet' media="screen, print, handheld" type="text/css"  href='../../css/calendrier.css' />
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
<nav class="navbar navbar-default navbar-inverse navbar-fixed-top " role="navigation" ><!--navbar-fixed-top:pour fixer la parite en haut qui est responsable sur la recherche laurs de d??placement de page -->
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
							  <img src="../../image/Facult?? de science/fs_log.png" alt="Accueil">
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

<li class="active"><a href="http://localhost/PROJET_STAGE/PROJET/Accueil/Accueil.php" title=""><i class="fa fa-power-off fa-2x"></i><span class="text"> Deconnect?? </span></a>
                                  </ul>							
                                						
						</div>
					</div>
			</nav>	
</section>		
	<!--End our header-->
	<!--Start carousel-->
    	 <div id="myslide" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myslide" data-slide-to="0" class="active"></li>
    <li data-target="#myslide" data-slide-to="1"></li>
    <li data-target="#myslide" data-slide-to="2"></li>
	<li data-target="#myslide" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" >
    <div class="item active">
      <img src="../../image/recru.jpg" alt="Informatique 01" >
  
    </div>
    <div class="item">
      <img src="../../image/Incu.jpg" alt="Informatique 02">
      
    </div>
   
      <div class="item">
      <img src="../../image/13.jpg" alt="Informatique 02">
     
    </div>
	
	 <div class="item">
      <img src="../../image/12.jpg" alt="Informatique 02">
      
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#myslide" role="button" data-slide="prev"><!--ce ligne est responsable sur le fl??che de d??placement des images-->
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myslide" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--End carousel-->
<!--Start Paragraphe-->
<section class="container breadcrumb our-information">
<p class="lead">
<h2 class="container">Pr??sentation :</h2>
<img src="../../image/Facult?? de science/maxresdefault.jpg" alt="facult??">
La Facult?? des Sciences de T??touan est une facult?? public, cr????e au sein de l'Universit?? Sidi Mohammed Ben Abdellah par d??cret n??2-82-355 du 16 Rabia1403 (31janvier 1983).
Depuis l'ann??e universitaire 1989-90, la Facult?? des Sciences de T??touan rel??ve de L'universit?? Abdelmalek Essaadi.</br>
</br></br></br></br></br>
<h5 class="color">Depuis la mise en place de la r??forme p??dagogique en 2003-2004 (syst??me LMD: 3-5-8), la FS - T??touan offre en formation initiale les dipl??mes suivants:</h5>
</br></br>
<ul>
<li><h4>	Cycle Licence: Bac + 3 ans </h4></li>
</ul>
<ol>
<li>	Dipl??me de Licence d'Etudes Fondamentales (LEF) </li>
<li>	Dipl??me de Licence Professionnelle (LP): (possibilit?? d'acc??s en S3 ou S5) </li>
</ol>
<ul>
<li><h4>	Cycle Master: Bac + 5 ans </h4></li>
</ul>
<ol>
<li>	Dipl??me de Master (M) </li>
<li>	Dipl??me de Master sp??cialis?? (MS) </li>
</ol>
<ul>
<li><h4>	Cycle Doctorat: Bac + 8 ans </h4></li>
</ul>
<ol>
<li>	Dipl??me de Doctorat </li>
</ol>
<ul>	
<li><h4>Dans le cadre de la formation continue (formation diplomate) la FS-T??touan offre les dipl??mes suivants:</h4></li>
</ul>
<ol>
<li>	Dipl??me du Cycle d'Approfondissement (DCA): ouvert au titulaire d'un Bac + 2 </li>
<li>	Dipl??me du Cycle des Etudes Sup??rieures Sp??cialis??es (DCESS): ouvert aux titulaires d'un bac + 3 ou ??quivalent </li>
</ol>
</p>
</section>
<!--End Parageraphe-->	
 <section class="price_table " style="margin-bottom:30px">
 <!--Start mot Doyen-->
<div class="breadcrumb col-lg-4 col-sm-6 col-xs-12">
	<h3><i aria-hidden="true" class="fa fa-tags"></i> Mot du doyen</h3>
	  <section id="block-views-mot-du-doyen-block" class="block block-views clearfix">
        <div class="contenu-mot-doyen">
     <img typeof="foaf:Image" class="img-rounded" src="http://www.fst.ac.ma/site/sites/default/files/styles/photo_doyen/public/Abdellatif_Moukrim.jpg?itok=ycD4ZcEq" width="80" height="80">
	 <p class="rtejustify">
	 <span style="color:#000000 lead">La R??gion Tanger - T??touan - Al Hoceima conna??t un d??veloppement ??conomique et social remarquable.
	 Elle est devenue un v??ritable chantier avec des projets structurants visant ?? assoir une plateforme propice aux investissements ?? m??me d???assurer un ess... 
	 </span>
	 </p>
	    </div>
       </section>
	   <span style="display: block; width: 100%; text-align: right;">
	   <a href="/site/mot-doyen.html" style="font-size: 12px;">
	   <i aria-hidden="true" class="fa fa-plus-square"></i> Lire plus...</a></span>
</div>
 
 <!--End mot Doyen-->
 <!--Start calendrier-->
   <script type="text/javascript" class="col-lg-4 col-sm-6 col-xs-12">
        calendrier();
    </script>
 <!--End calendrier-->
 </section>
 <!--Start footer-->
            <a class="scrollup " href="#" title="Haut de page" >
				<i class="fa fa-arrow-alt-circle-up fa-4x" aria-hidden="true" ></i>
			</a>
 
<footer class=" container-fluid footbot text-center breadcrumb ">
		<div class="container">
			<div class="row copyright fot">
				<p>
					Tous Droits R??serv??s FS Tetouan Copyright  ?? 2019. Courriel: <a class="" href="mailto:fs.tetouan.contact@gmail.com">fs.tetouan.contact@gmail.com</a><br>
					Facult?? des Sciences, BP. 2121 M'Hannech II , 93030 T??touan Maroc
				</p>
			</div>
			
		</div>
</footer>
<!--End footer-->
</body>
</html>		
		      