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
<link rel='stylesheet' href='../../../css/CONSEIL & INFOS.css' />
<script type="text/javascript" src="../../../js/calendrier.js"></script>
<link rel='stylesheet' media="screen, print, handheld" type="text/css"  href='../../../css/calendrier.css' />
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
    <li><a href="http://localhost/PROJET_STAGE/PROJET/Accueil/Accueil.php" style="margin-right: 1px;">ACCUEIL</a></li> 
	<li><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Conseil_&_infos/CONSEIL_&_INFOS.php"  style="color:#ffffff; background-color: #ca5c34;">CONSEIL & INFOS</a></li> 
    <li><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/ORIENTATION/ORIENTATION.php" style="margin-left: 1px;">ORIENTATION</a></li>
      </li>	
	</ul>
	<ul class="nav navbar-nav navbar-right">
	<li class="nav navbar-nav">
	<li class="dropdown">
	<a class="btn btn-secondary " style="height: 52px;margin-right: 1px; border-radius: 0px;" id="dropdownMenuButton" data-toggle="dropdown"  ><i class="fa fa-sign-out-alt"></i>
	Se connecter</a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	<div class="deconnecte actif breadcrumb">
		<div class="logge" style="display: block;">
			<form method="post" action="../../Fichier_traitement/Traitement_connecter.php">
			<div class="form-group">
            <label for="exampleDropdownFormusername">Nom d'utilisateur :</label>
            <input type="text" name="username" class="form-control" id="exampleDropdownFormusername" placeholder="username">
            </div>
			<div class="form-group">
            <label for="exampleDropdownFormPassword1">Mot de passe :</label>
            <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="••••••••••••">
            </div>
			<div>
			<a   href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/RECUPERER_MDP/AccueilRecupMdp.php" >Accès perdus ?  </a>
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
		</div><!--End container-fluid-->
	</nav>
    	<!--End our navbar-->	
		
		
	<!--Start our header-->
    <!--Start header  -->
<div class="header container-fluid  " style="background-image:url('../../../image/Image de stage/orientation_stage.jpg');background-size:cover;background-position:center center;">
                            <div class="bg-primary-a-7 row" style="margin:6em -10px 0 -10px;">
                                <div class="container">
                                        
                                            <div class="col-sm-10">
                                           <h1 class="text-light ul-bold">Donner des conseils et informations<br><small class=""></small></h1><br></div>
                                </div>
                            </div>
</div>
    
    <!--End header -->
	 
    <!--End our header-->
	<!--Start stage-image -->
	
<div class="stage-image card mb-3 " style="max-width: 640px; margin-left:110px;">
  <div class="row no-gutters">
    
    <div class="col-md-10 ">
	<h2 class="title ">Stages en milieu professionnel </h2>
      <div class="card-body">
        <h2 class="card-title ">Les stages à la Faculté des Sciences </h2>
        <p class="card-text " >Au cours de l’année universitaire 2016-2017, 2323 stages ont été effectués par les étudiants de la Faculté des sciences.<br>
        Si les stages de Master y sont majoritaires (1723 stages dont 845 en Master 1 et 878 en Master 2), la présence de 600 stages de licence n’est pas négligeable.
        Les deux tiers des stages avaient une durée supérieure à 2 mois (donc gratifiés).</p>
		  
		<p class="card-text"><small class="text-muted">Guide du stagiaire 2018 – 2019 : </small></p>  
		  
		<p class="card-text " >Les employeurs l’affirment, une expérience professionnelle en cours d’études est devenue un élément
         déterminant dans le cv d’un étudiant. Un bon stage constitue toujours un élément décisif pour engager un
        jeune diplômé sorti de l’Université.
        Effectuer un stage est souvent une étape essentielle dans un parcours de formation et même le point de
         départ de toute une vie professionnelle.Aussi, faire un stage doit vous donner</p>
		<ul>
		<li>L’occasion de confronter les acquis théoriques appris à la Faculté des Sciences aux réalités du mondeProfessionnel.</li>  
        <li>de découvrir et d’expérimenter dans le quotidien le fonctionnement d’une entreprise avec ses
          valeurs, ses politiques, son vocabulaire.</li>
		<li>de vérifier vos motivations et d’affiner votre projet professionnel.</li>  
      </div>
    </div>
	  <div class="col-md-2">
      <img src="../../../image/Image de stage/Couv-livret-stage-200x266.jpg"  class="card-img" alt="Image de Stage" width="151" height="200" sizes="(max-width: 151px) 100vw, 151px">
    </div>
	<div class="breadcrumb ">
	<div class="heading icon-left">
	<h2 class="content-box-heading" style="font-size:22px;line-height:27px;" data-inline-fontsize="true" data-inline-lineheight="true" data-fontsize="22" data-lineheight="27">Contacts</h2></div>
    
	<div class="content-container" style="color:#2c3e50;">
<p>Du lundi au vendredi<br>
09h00 à 11h30 et de 13h30 à 16h00<br>
(fermé tous les vendredis après-midi)</p>
<p><a href="mailto:fds.stages@umontpellier.fr" target="_blank" rel="noopener">fds.stages@umontpellier.fr</a><br>
(Pour les conventions de stage)<strong><br>
</strong><strong>Téléphone :</strong> 06 67 14 49 13</p>
<p><strong>Mail :<br>
</strong><a href="mailto:fds.cesure@umontpellier.fr">fds.cesure@umontpellier.fr</a> (Pour plus d'informations sur les stages)<br>
<a href="mailto:fds.emplois@umontpellier.fr">fds.emplois@umontpellier.fr</a> (Pour les offres de stages, d’emplois et apprentissage)</p>
<p><strong>Adresse :</strong><br>
université abdelmalek essaadi<br>
Faculté des Sciences<br>
BP. 2121 M'Hannech II<br>
93030 Tétouan Maroc<br>
</p>
</div>
	</div>
  </div>
</div>

     <!--End stage-image-->
	 
	 
	 <!--Start nav-stage-->
 <section class="container">
<div class=" breadcrumb ">
<p class="text-uppercase">Définition:Qu'est ce que un stage?</p>
 <div class="corpsArt">
<p>Les enseignements scolaires et universitaires peuvent comporter, respectivement, des périodes de formation en milieu professionnel ou des stages. Les périodes de formation en milieu professionnel sont obligatoires dans les conditions prévues à l’article L. 331-4 du présent code.</p>
</div>
<p>Les périodes de formation en milieu professionnel et les stages ne relevant ni du 2° de l’article L.
 4153-1 du code du travail</a>, ni de la formation professionnelle tout au long de la vie, définie à la sixième partie du même code, font l’objet d’une convention entre le stagiaire,
 l’organisme d’accueil et l’établissement d’enseignement, dont les mentions obligatoires sont déterminées par décret.</p>
<p>Les périodes de formation en milieu professionnel et les stages correspondent à des périodes temporaires de mise en situation en milieu professionnel au cours desquelles l’élève ou l’étudiant acquiert des compétences professionnelles et met en œuvre les acquis de sa formation en vue d’obtenir un diplôme ou une certification et de favoriser son insertion professionnelle.
 Le stagiaire se voit confier une ou des missions conformes au projet pédagogique défini par son établissement d’enseignement et approuvées par l’organisme d’accueil.</p>
<p>L’enseignant référent est tenu de s’assurer auprès du tuteur en entreprise, à plusieurs reprises durant le stage ou la période de formation en milieu professionnel,
 de son bon déroulement et de proposer à l’organisme d’accueil, le cas échéant, une redéfinition d’une ou des missions pouvant être accomplies.</p>
</div>
  
  
  
 <div class="breadcrumb" >
 <p class="text-uppercase">Pourquoi faire un stage?</p>
<p><em>«&nbsp;Le stage permet de se familiariser avec l’univers professionnel, d’y mettre en application ses connaissances et d’acquérir de nouvelles compétences.&nbsp;»</em><br>
(Loi pour l’égalité des chances du 31 mars 2006).<br>
Il permet à l’étudiant la mise en œuvre de connaissances théoriques dans un cadre professionnel et lui donne une expérience du monde de l’entreprise et de ses métiers.<br>
Le stage c’est l’occasion :</p>
<ul>
<li>d’observer les méthodes de travail des cadres, employés ou ouvriers ;</li>
<li>de comprendre l’application de méthodes de fabrication, de recherche, de commercialisation, etc. ;</li>
<li>de se familiariser avec tous les aspects de la vie professionnelle (technique, social, commercial, etc.)</li>
<li>d’appliquer des savoirs théoriques et de se confronter à la vie réelle de l’entreprise ;</li>
<li>de se perfectionner dans l’apprentissage de son métier ; etc.</li>
</ul>
<p>Votre stage doit vous permettre de mettre en pratique et d’approfondir les connaissances et compétences acquises au cours de votre formation.
 Il vous faut donc être attentif à définir – avant la signature de votre convention – une problématique de stage en lien avec les enseignements suivis, voire avec votre projet professionnel.<br>
<strong>Cette problématique doit être validée par le responsable de votre formation.</strong></p>
</div>
 

<div class="breadcrumb " >
<p class="text-uppercase">Accueil d'un étudiant en stage</p>
<p>Un stage c’est une occasion unique pour l’étudiant d’être à l’école de l’entreprise et d’appréhender de façon pratique les savoirs acquis au cours de sa formation.
 Il constitue une période d’observation privilégiée pour l’entreprise qui souhaite embaucher un nouveau collaborateur.</p>
<p>Chaque année, plus de 2000 stages sont pourvus par nos étudiants, tant en France qu’à l’étranger.
 Le nombre de stagiaires combiné à la diversité de leurs parcours pédagogiques constitue un véritable vivier de compétences pour l’Entreprise.</p>
<p>Le stage d’un étudiant s’inscrit dans un projet pédagogique.<br>
Il a donc essentiellement pour finalité de :<br>
– permettre la mise en pratique des connaissances de l’étudiant en milieu professionnel ;<br>
– faciliter le passage du monde de l’enseignement supérieur à celui de l’entreprise.<br>
ll donne lieu à un rapport de stage et une soutenance orale, indispensables pour l’obtention du diplôme. L’entreprise peut participer à l’évaluation de ce dernier.<br>
Tout stage doit donner lieu à la signature d’une convention de stage entre l’étudiant, l’établissement d’accueil&nbsp; et son établissement d’enseignement.<br>
En aucun cas un stage ne peut être considéré comme un emploi.</p>

</div>
</section>
     <!--End nav-stage-->
  <!--Start footer-->
            <a class="scrollup " href="#" title="Haut de page" >
				<i class="fa fa-arrow-alt-circle-up fa-4x" aria-hidden="true" style="margin-bottom: 15px;"></i>
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


	 
	 
	 
	 
	 
	 

	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	</body>
	</html>