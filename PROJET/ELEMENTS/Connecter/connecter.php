<?php
include("../../CONNEXION_BASE_DONNEE/CONNEXION.php");
$Licence=$bdd->query('select FILIERE FROM filiere where CYCLE="LICENCE"');
$Master=$bdd->query('select FILIERE FROM filiere where CYCLE="MASTER"');
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
<title>Bootstrap Course 03 Include it</title>
<link rel="stylesheet" href='../../../css/bootstrap.css' />
<link rel="stylesheet" href="../../../css/font-awesome.min.css" />
<link rel='stylesheet' href='../../../css/media.css' />
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel='stylesheet' href='../../../css/style_stage.css' />
<link rel='stylesheet' href='../../../css/style_projet/style_dropdown.css' />
<link rel='stylesheet' href='../../../css/style_projet/style_admin.css' />
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
   
    <ul class="nav navbar-nav navbar-left ">
	 <li class="nav navbar-nav">
	<li><a href="http://localhost/PROJET_STAGE/PROJET/Accueil/Accueil.php" style="color:#ffffff; background-color: #ca5c34;">ACCUEIL</a></li> 
	<li><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Conseil_&_infos/CONSEIL_&_INFOS.php" style="margin-left: 1px;">CONSEIL & INFOS</a></li> 
    <li><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/ORIENTATION/ORIENTATION.php">ORIENTATION</a></li>
      </li>	
	</ul>
	<ul class="nav navbar-nav navbar-right ">
	<li class="nav navbar-nav">
	<li class="dropdown">
	<a class="btn btn-secondary " style="height: 52px;margin-right: 1px; border-radius: 0px;" id="dropdownMenuButton" data-toggle="dropdown"  ><i class="fa fa-sign-out-alt"></i>
	Se connecter</a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	<div class="deconnecte actif breadcrumb" style="height: 212px;">
		<div class="logge" style="display: block;">
			<form method="post" action="../../../Fichier_traitement/Traitement_connecter.php">
			<div class="form-group">
            <label for="exampleDropdownFormusername">Nom d'utilisateur :</label>
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
	<li><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Inscrire/Inscrire.php"><i class="fa fa-user-plus" aria-hidden="true"></i> S'inscrire</a></li>
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
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
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
			            <div class="navbar-collapse collapse col-xs-3" id="navbar-collapse">
							<ul class="nav navbar-nav">
        <li class="active" style="margin-left: 156px;">
                    <a href="#" ><i class="fa fa-chalkboard-teacher " style='font-size: 2em;'></i><span style="font-size:14px;"> Encadrants</span> <i class="fa fa-sort-desc" aria-hidden="true"></i></a>
									<ul class="dropdown-menu multi-level drop">
										<li class="dropdown-submenu">Master    <i class="fa fa-caret-right" aria-hidden="true"></i>
											<ul class="dropdown-menu">
													<?php
														   while($M= $Master->fetch())
																{	
																echo'<li ><a class="lien"  href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Table_encadrant/table_encadrant1.php?lice='. $M['FILIERE'] .'">' .$M['FILIERE'] . '</a></li>';
																}
																
													?>			  
											</ul>
										</li>
										<li class="dropdown-submenu">Licence   <i class="fa fa-caret-right" aria-hidden="true"></i>
											<ul class="dropdown-menu">
											   <?php
													  while($d= $Licence->fetch())
																 {	 
																 echo'<li><a class="lien" href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Table_encadrant/table_encadrant1.php?lice='.$d['FILIERE'] .'">' .$d['FILIERE'] . '</a></li>';
																 }
											   ?>	
											</ul> 
										</li>
									</ul>
        </li>

<li class="active"><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Entreprise/Entreprise1.php" ><i class="fa fa-building fa-2x"></i> Entreprise</a>
</li>
<li class="active"><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Rapport/Rapport.php" title=""><i class="fa fa-book fa-2x"></i> Rapports</a></li>
                              </ul>							
						</div>
					</div>
			</nav>	
</section>		
	<!--End our header-->	
	<?php 
				if(isset($_SESSION["ID"]) && $_SESSION["ID"]== true  )
				{
					$_SESSION["ID"]= false;	
				echo '<div class="alert alert-danger" style="margin-left: 100px; margin-right: 100px;">Nom d\'utilisateur ou Mot de passe incorrect</div>';
                   			
				}	
				?>
<!--start section stage-->
<section class="breadcrumb item item-panel">
<div class="panel panel-default">
      <!--End panel-heading-->
  <div class="panel-heading">
    <div class="col-md-8">
       <ol class="breadcrumb use-roboto" style="background-color:#FFF;width:1053px"><li><a href="https://www.stagiaires.ma/"><i class="fa fa-home"></i> <span class="sr-only">Page d'accueil</span></a></li><li class="active">Stagiaires</li></ol>                
    </div>
     <div class="col-md-12">
       </div>
  </div>
     <!--End heading--> 
	 
	<!--start panel-body--> 
 <form action="../../Fichier_traitement/Traitement_connecter.php" id="form" class="form-horizontal" role="form" method="post" accept-charset="utf-8" novalidate="novalidate">	
  <div class="panel-body pack" style="height: 266px;">
    <div class="row">
                <div class="col-md-12">
                    <div class="wrapper wrapper-content">
                        <div id="step1" class="ibox register-candidat">  
                            <div class="form-group" id="email_div">
							<label class="col-sm-3 col-sm-offset-1 control-label">Nom d'utilisateur <span class="text-danger">*</span></label>
							<div class="col-sm-5">
						    <input type="text" name="username" value="" id="username" placeholder="username" class="form-control " required />
							<div id="email_error"></div>
                            </div>
                            </div>
							<div class="form-group" id="Adresse_div">
							<label class="col-sm-3 col-sm-offset-1 control-label">Mot de passe <span class="text-danger">*</span></label>
							<div class="col-sm-5">
							<input type="password" name="password" value="" id="password" placeholder="Mot de passe" class="form-control" required />
							<div id="Adresse_error"></div>                        
							</div>
							</div>
                            
	                    </div>
						
                    </div>
                </div>
				
      </div>
	 
	  <div class="link" style="margin-top: 25px;">
	  
      <a   href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/RECUPERER_MDP/AccueilRecupMdp.php" >Mot de passe oublié ?  </a>
	   
	  </div> 
  </div>
    <!--End panel-body-->
	<!--Start panel-footer-->
  <div class="panel-footer " style="height: 61px;">

   <div class="ibox-footer text-right" >
   <button type="submit" class="btn btn-success" name="connecter" style="margin-top: 3px;"><i class="fa fa-check"></i> Valider </button>
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
</body>
</html>
<?php session_destroy(); ?>