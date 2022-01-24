<!DOCTYPE html>
<html lang="fr">
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
<link rel='stylesheet' href='../../../css/style_inscrire.css' />
<!--[if lt IE 9]>
	<script src="../js/html5shiv.min.js"></script>
	<script src="../js/respond.min.js"></script>
<![endif]-->
</head>
     </body>
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
	<li><a href="http://localhost/PROJET_STAGE/PROJET/Accueil/Accueil.php" >ACCUEIL</a></li> 
	<li><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Conseil_&_infos/CONSEIL_&_INFOS.php">CONSEIL & INFOS</a></li> 
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
			<form method="post" action="../../Fichier_traitement/Traitement_connecter.php">
			<div class="form-group">
            <label for="exampleDropdownFormusername">username :</label>
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
		</div><!-- /.container-fluid-->
	</nav>
    	<!--End our navbar-->	
	
	<!--Start our row-->
  <section class="about row ">	
<div class="col-md-8">
 <ol class="breadcrumb use-roboto"><li><a href="http://localhost/PROJET_STAGE/PROJET/Accueil/Accueil.php"><i class="fa fa-home"></i> <span class="sr-only">Page d'accueil</span></a></li><li class="active">Inscription</li></ol>                
</div>	
                <div class="col-md-12">
                    <div class="wrapper wrapper-content">
                                                <h2 class="text-center">Vous êtes ?</h2>
<div class="row signup">
	<div class="col-xs-12 col-sm-5 col-md-4 col-sm-offset-1 ">
		<a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Inscrire/Inscrire_etudiant/Inscrire_etudiant.php">
			<div class="widget blue-bg p-lg text-center">
				<div class="m-b-md">
				    <i class="fa fa-graduation-cap fa-5x"></i>
				    <h3 class="font-bold no-margins">  Étudiant </h3>
				</div>
			</div>
		</a>
	</div>
	
</div>
<div class=" block text-center"><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Connecter/connecter.php" >Déjà membre ? Connectez-vous</a></div>                    
                     </div>
                </div>
    </section>
  
   
	<!--End our row-->

<!--Start footer-->

<footer class=" container-fluid footbot text-center breadcrumb ">
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