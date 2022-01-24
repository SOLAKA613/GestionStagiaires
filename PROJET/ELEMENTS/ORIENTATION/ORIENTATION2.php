<?php
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
<title>Bootstrap Course 03 Include it</title>
<link rel="stylesheet" href='../../../css/bootstrap.css' />
<link rel="stylesheet" href="../../../css/font-awesome.min.css" />
<link rel='stylesheet' href='../../../css/media.css' />
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel='stylesheet' href='../../../css/style_stage.css' />
<link rel='stylesheet' href='../../../css/style_projet/style_dropdown.css' />
<link rel='stylesheet' href='../../../css/style_orientation.css' />
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
	<li><a href="http://localhost/PROJET_STAGE/PROJET/Accueil/AccueilEtudiant.php" >ACCUEIL</a></li> 
	<li><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Conseil_&_infos/CONSEIL_&_INFOS2.php" >CONSEIL & INFOS</a></li> 
    <li><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/ORIENTATION/ORIENTATION2.php" style=" color:#ffffff; background-color: #ca5c34;margin-left: 1px;">ORIENTATION</a></li>
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
		<!--Start header  -->
<div class="header container-fluid  " style="background-image:url('../../../image/Image de stage/orientation_stage.jpg');background-size:cover;background-position:center center;">
                            <div class="bg-primary-a-7 row" style="margin:6em -10px 0 -10px;">
                                <div class="container">
                                        
                                            <div class="col-sm-10">
                                           <h1 class="text-light ul-bold">Aide à l’orientation<br><small class=""></small></h1><br></div>
                                </div>
                            </div>
</div>
    
    <!--End header -->
	
	<!--Start page-body-->
        <section class="page-body container">
	<div class=" page-header  ">

            <h1 class="ul-bold  " >
                                    <i class="fa fa-user-edit"></i>Méthodologie de la rédaction du rapport de stage </h1>
    </div>
	<div class="col-xs-11">
	<p>L’étudiant(e) établit un rapport de stage en respectant la méthodologie suivante:</p>
  <h3 class="card-title ul-bold" > a. Au niveau du contenu</h3>
			<p class="card-text" >Le travail doit comprendre les parties suivantes :</p>
			<span style="text-decoration:underline;"><i class="fa fa-asterisk fa-xs"></i> Introduction </span>
			<ul class="text-justify">
			<li>L’étudiant(E) explicite le contexte exacte de son stage, les motivations du choix de
			l’institution qui l’a accueilli(e), ses attentes et ses objectifs d’apprentissage.</li>
			<li> Une brève présentation de la problématique sociale à laquelle s’intéresse l’organisme
			d’accueil (exp. Enfants abandonnés, personnes âgées en rupture de liens familiaux,
			l’accompagnement social dans les quartiers dits « en crise »…etc. Cette situation sera
			analysée dans les différentes parties du rapport de stage.</li></ul>
			<p>L’introduction permet de présenter le sujet du stage et la démarche employée pour analyser et
			résoudre les problèmes posés, elle annonce en général le plan du rapport.</p>
    </div>
	
	<div class="col-xs-11">
	<span style="text-decoration:underline;"><i class="fa fa-asterisk fa-xs"></i> Le cadre organisationnel</span>
	<p class="text-justify">L’étudiant(E) décrit le cadre organisationnel de l’institution qui l’accueille.</br>
	Il/elle établit des liens pertinents entre la situation choisie dans l’introduction et les objectifs
	et les moyens de l’organisation.
    </p>
	</div>
	
	<div class="col-xs-11">
	 <span style="text-decoration:underline;"><i class="fa fa-asterisk fa-xs"></i> Les interventions de l’étudiant(E) stagiaire</span>
	<p class="text-justify">Cette partie doit contenir une description détaillée des activités de stage aux quelles
	l’étudiant(E) a participé ainsi que les responsabilités qui lui ont été dévolues dans
	l'accomplissement de ses fonctions durant la période de stage.</p>
	<p class="text-justify"> Il s'agit de présenter, en commentant, les différentes responsabilités, tâches, méthodes et
	techniques qu’il a expérimentées. Il est à noter qu'une simple énumération des activités de
	stage n'est pas suffisante.</p>
	<p class="text-justify">Il s’agit donc de décrire, donner des exemples, se poser des questions, argumenter celles-ci et
	établir des liens entre ces questions.</p>
	</div>
	
	<div class="col-xs-11">
	  <span style="text-decoration:underline;"><i class="fa fa-asterisk fa-xs"></i> La population rencontrée</span>
		<p class="text-justify">Dans cette partie, l’étudiant présente les caractéristiques de la population rencontrée et
		explicite les relations professionnelles qu’il a pu nouer avec les personnes rencontrées.</p>
	</div>
	
	<div class="col-xs-11">
	  <span style="text-decoration:underline;"><i class="fa fa-asterisk fa-xs"></i> L’autoévaluation</span>
      <p class="text-justify">Cette partie doit faire ressortir les points forts et les points faibles de la période de stage du
       point de vue de l'apprentissage et de l'encadrement.<br/> 
	   L’étudiant procède à une autoévaluation de ses apprentissages en termes de savoirs, de savoir-faire, de savoir être, en s’appuyant sur
	   ses objectifs d’apprentissage de départ. L’étudiant(E) doit démontrez en quoi les diverses
	   activités auxquelles il/elle a participé et les responsabilités qu'on lui a confiées constituent un
	   apprentissage valable et pertinent de formation professionnelle pour son futur métier de
	   travailleur social. Qu'a-t-il/elle appris et en quoi cela est-il une initiation à la profession?</p>
	   <p class="text-justify">Il s'agit de recueillir ici l’appréciation personnelle de l’étudiant(E) et ses commentaires
       concernant la période de stage qu’il/elle a réalisée, en lien notamment, avec les critères
       d’évaluation des compétences professionnelles.</p>
	   </div>
	   
	<div class="col-xs-11">   
	   <span style="text-decoration:underline;"><i class="fa fa-asterisk fa-xs"></i> Conclusion</span>
       <p class="text-justify">Celle-ci portera sur un état des questions posées et des réponses qui y sont éventuellement
       apportées tout au long du rapport. Il s’agit d’une synthèse mettant en évidence les liens entre
       les différentes dimensions de l’expérience de stage.</br>
       La conclusion doit être suffisamment développée et mise en regard de l'introduction.</p>	
       <p class="text-justify">
     <i class="fa fa-check"></i> Quelques conseils pratiques au niveau du contenu.
       Le rapport de stage doit situer le travail réalisé, d'en appréhender clairement les objectifs
       opérationnels et la démarche utilisée et d'évaluer l’apport personnel de l'étudiant(E).</p>
       <p class="text-justify">C'est pourquoi il doit nécessairement contenir les informations suivantes :</p>
	   <p class="text-justify">- présentation de l'organisme accueillant et du cadre du stage (attention à la reproduction
		intégrale des documents de l’organisme)<br/>
		- présentation du sujet du stage (la problématique ou la situation sociale)<br/>
		- travail effectivement réalisé en spécifiant l’apport personnel de l'étudiant(E)<br/>
		- bilan personnel du stage (éviter les lieux communs : "ce stage m'a beaucoup apporté...") </p>
	     <h3 class="card-title ul-bold" > b. Au niveau de la forme </h3>
		 <p class="text-justify">
		 L’étudiant établit un rapport descriptif de son expérience de stage de 15 à 20 pages.</br>
			Outre les parties décrites ci-dessus, le rapport doit contenir les éléments suivants :</br>
			- Une page de couverture (voir modèle).</br>
			- Une page de garde reprenant les éléments principaux de la page de couverture.</br>
			- Une table des matières, détaillée, avec rappel de la pagination.</br>
			- Éventuellement, des annexes numérotées (fiches et notes techniques). On peut souvent ne
			pas mettre d'annexes du tout. On doit toujours se poser la question de la nécessité de leur
			présence.</p> 
			<p class="text-justify">
			Le rapport doit être présenté proprement et dactylographié à 1½ interligne.
            Le texte doit se lire facilement, être clair et bien formulé.</p>
			<p class="text-justify">
			<i class="fa fa-check"></i> Quelques conseils pratiques au niveau de la forme.</br>
			La présentation, la ponctuation, et l’orthographe seront soignées :</br>
			- Mettre en valeur les titres et sous-titres de chapitres, paragraphes (utilisation de caractères
			gras ou soulignés mais pas les deux à la fois).</br>
			- Ne pas utiliser trop de polices de caractères différentes (de préférence Times, taille 12) et
			utilisez une justification en pleine page.<br/>
			- Les abréviations doivent être explicitées à la fin du rapport.
			Attention aux fautes d'orthographe : relisez ou faites relire votre travail.</p>
		 

		</section>
	<!--End page-body-->

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
</body>	
</html>	