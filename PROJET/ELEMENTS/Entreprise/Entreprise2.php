<?php
session_start();
if(!isset($_SESSION["NOM"])&&!isset($_SESSION["PENOM"])&&!isset($_SESSION['connecter']))
{	
header('location:http://localhost/PROJET_STAGE/PROJET/Accueil/Accueil.php');
}
include("../../CONNEXION_BASE_DONNEE/CONNEXION.php");
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
<link rel="stylesheet" href='../../../css/bootstrap.css' />
<link rel="stylesheet" href="../../../css/font-awesome.min.css" />
<link rel='stylesheet' href='../../../css/media.css' />
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel='stylesheet' href='../../../css/style_stage.css' />
<link rel='stylesheet' href='../../../css/style_projet/style_dropdown.css' />
<link rel='stylesheet' href='../../../css/style_projet/style_Entreprise.css' />
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
			            <div class="navbar-collapse collapse" id="navbar-collapse" >
							<ul class="nav navbar-nav">

<li class="active "><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Stage/Ajouter-groupe.php" ><i class="fa fa-file-alt fa-2x"></i> Stage </a>
</li>
<li class="active " ><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/ETUDIANT/Etudiant.PHP"  ><i class="fa fa-book-reader fa-2x"></i> Etudiants</a>
</li>

  <li class="active">
                    <a href="" ><i class="fa fa-chalkboard-teacher " style='font-size: 2em;'></i><span style="font-size:14px;margin-left: 1px;"> Encadrants</span> <i class="fa fa-sort-desc" aria-hidden="true"></i></a>
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

<li class="active stage" style="margin-left: 1px;margin-right: 1px;"><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Entreprise/Entreprise2.php" ><i class="fa fa-building fa-2x"></i> Entreprise</a>
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
<li class="active"><a href="http://localhost/PROJET_STAGE/PROJET/Accueil/Accueil.php" title=""><i class="fa fa-power-off fa-2x"></i><span class="text"> Deconnecté </span></a>
                                  </ul>							
                                						
						</div>
					</div>
			</nav>	
</section>		
	<!--End our header-->
	


<!--start section Entreprise-->
<section class="item ">
 <div class="panel panel-default">
 <!--start panel-body--> 
  <div class="panel-body">

  
  
  
	
	<div class="ibox m-t-sm">
       
        <div class="ibox-content home-offers">
           
                              
				
				
		<div class="row">	
				  <div class="col-sm-6 col-md-3 col-lg-5" style="margin-left: 67px;">
					<div class="thumbnail">
					  <a href="https://www.stagiaires.ma/entreprises/7455-centrale-automobile-cherifienne--casablanca" title="Centrale Automobile Chérifienne">
                                    <img src="https://www.stagiaires.ma/assets/img/companies/3279b82fd4b33378eeaf69992dca9aab.jpg" class="img-responsive" alt="Centrale Automobile Chérifienne">
                      </a>
					  <div class="caption">
						 <a href="https://www.stagiaires.ma/entreprises/7455-centrale-automobile-cherifienne--casablanca" class="small text-muted btn-link">
                                    Casablanca                                </a>
                                <a href="https://www.stagiaires.ma/entreprises/7455-centrale-automobile-cherifienne--casablanca" class="product-name title-ellipsis">
                                    Centrale Automobile Chérifienne                                </a>
                                <div class="font-size-10 m-t-xs text-ellipsis">
                                    La&nbsp;Centrale Automobile Chérifienne (CAC)&nbsp;est l'importateur exclusif au Maroc des marques&nbsp;Volkswagen,tité les rendant uniques sur leu
                                </div>
                            <div class="text-right m-t-sm">
                                    
                        <a href="http://www.skoda.ma/menu/cac" class="btn btn-xs btn-social-icon btn-info">
                            <i class="fa fa-globe-europe fa-lg"></i>
                        </a>
                    
                        <a href="https://www.facebook.com/MarocSkoda/" class="btn btn-xs btn-social-icon btn-facebook">
                            <i class="fab fa-facebook-square fa-2x"></i>
                        </a>
                            </div>								
					  </div>
					</div>
				  </div>
				
				
				<!--////-->    
				
				
				
			  <div class="col-sm-6 col-md-3 col-lg-5">
				<div class="thumbnail">
				   <a href="https://www.stagiaires.ma/entreprises/3504-kia-maroc--casablanca" title="Kia Maroc">
                                <img src="https://www.stagiaires.ma/assets/img/companies/ecf9d6be9ff8573530e3b978bb90c572.jpg" class="img-responsive">
                   </a>
				  <div class="caption">
					 <a href="https://www.stagiaires.ma/entreprises/3504-kia-maroc--casablanca" class="small text-muted btn-link">
                                Casablanca                            </a>
                            <a href="https://www.stagiaires.ma/entreprises/3504-kia-maroc--casablanca" class="product-name title-ellipsis">
                                Kia Maroc                            </a>
                            <div class="font-size-10 m-t-xs text-ellipsis">
                                La philosophie de la direction d’une entreprise définit sa raison d’être tout en établissant les fondamentaux qui régissent l’état d’esprit et le comportement des employés.                           </div>
                            <div class="text-right m-t-sm">
                                
                    <a href="http://www.kia.com/ma/experience/about-kia/philosophy.html" class="btn btn-xs btn-social-icon btn-info">
                        <i class="fa fa-globe-europe fa-lg"></i>
                    </a>
                
                    <a href="https://www.facebook.com/kiamorocco/" class="btn btn-xs btn-social-icon btn-facebook">
                        <i class="fab fa-facebook-square fa-2x"></i>
                    </a>
                            </div>
				  </div>
				</div>
			  </div>
			  
		</div>
                                 
                <!--////-->
				
	     <div class="row">
			  <div class="col-sm-6 col-md-3 col-lg-5" style="margin-left: 67px;">
				<div class="thumbnail">
				  <a href="https://www.stagiaires.ma/entreprises/6989-ym-africa--casablanca" title="YM Africa">
                                    <img src="https://www.stagiaires.ma/assets/img/companies/57cfed255443a8324da23ff00e8b57a9.jpg" class="img-responsive" alt="YM Africa">
                  </a>
				  <div class="caption">
					<a href="https://www.stagiaires.ma/entreprises/6989-ym-africa--casablanca" class="small text-muted btn-link">
                                    Casablanca                                </a>
                                <a href="https://www.stagiaires.ma/entreprises/6989-ym-africa--casablanca" class="product-name title-ellipsis">
                                    YM Africa                                </a>
                                <div class="font-size-10 m-t-xs text-ellipsis">
                                YM Africa est un acteur incontournable dans le développement de l’employabilité des jeunes au Maroc.
                                YMA group accompagne les jeunes depuis le choix de leur formation (orientation) jusqu’à leur intégration du marché professionnel                                </div>
					        <div class="text-right m-t-sm Africa">
					  <a href="http://ym-africa.com/" class="btn btn-xs btn-social-icon btn-info">
                            <i class="fa fa-globe-europe fa-lg"></i>
                      </a>
                    
                      <a href="https://www.facebook.com/Youth.media.africa/" class="btn btn-xs btn-social-icon btn-facebook">
                            <i class="fab fa-facebook-square fa-2x"></i>
                      </a>
					        </div>
				  </div>
				</div>
			  </div>
			
				
				
			    <!--////-->

                 
					  <div class="col-sm-6 col-md-3 col-lg-5">
						<div class="thumbnail">
						  <a href="https://www.stagiaires.ma/entreprises/5884-axa-assistance-maroc--casablanca" title="AXA Assistance Maroc">
                                    <img src="https://www.stagiaires.ma/assets/img/companies/ba934d84c12c00f5880d8de87c03666e.jpg" class="img-responsive" alt="AXA Assistance Maroc">
                          </a>
						<div class="caption">
							<a href="https://www.stagiaires.ma/entreprises/5884-axa-assistance-maroc--casablanca" class="product-name title-ellipsis">
                                    AXA Assistance Maroc                                </a>
                                <div class="font-size-10 m-t-xs text-ellipsis">
                                    Axa Assistance Maroc apporte aide et secours dans les situations d’urgence et du confort au quotidien. Plus de 50 ans d’expertise Axa Assistance est une filiale à 100 % du Groupe AXA ainsi qu'un des leaders mondiaux de l’assistanc</div>
							    <div class="text-right m-t-sm">
							 <a href="https://www.axa-assistance.ma/fr/" class="btn btn-xs btn-social-icon btn-info AXA">
                            <i class="fa fa-globe-europe fa-lg"></i>
                             </a>
							    </div>
						  </div>
						</div>
					  </div>
		</div>
					
					
                <!--////-->

		<div class="row">
				  <div class="col-sm-6 col-md-3 col-lg-5" style="margin-left: 67px;">
					<div class="thumbnail">
					  <a href="https://www.stagiaires.ma/entreprises/4504-ems-chronopost--casablanca" title="EMS Chronopost">
                                    <img src="https://www.stagiaires.ma/assets/img/companies/3eeca2f1eeed8821d0db6802269bf8f2.jpg" class="img-responsive" alt="EMS Chronopost">
                      </a>
					  <div class="caption">
						<a href="https://www.stagiaires.ma/entreprises/4504-ems-chronopost--casablanca" class="small text-muted btn-link">
                                    Casablanca                                </a>
                                <a href="https://www.stagiaires.ma/entreprises/4504-ems-chronopost--casablanca" class="product-name title-ellipsis">
                                    EMS Chronopost                                </a>
                                <div class="font-size-10 m-t-xs text-ellipsis">
                                    Filiale du groupe Poste Maroc et de Geopost SA, Chronopost International Maroc a su, depuis sa création, 
									joindre les bases du métier postal à la dynamique d’un acteur privé et s'est lancé sur le marché marocain avec une offre comp</div>
						            <div class="text-right m-t-sm">
								<a href="http://www.chronopost.ma/" class="btn btn-xs btn-social-icon btn-info">
                                <i class="fa fa-globe-europe fa-lg"></i>
                                </a>
					                </div>
					   </div>
					</div>
				  </div>
				
				
				
				<!--////-->
				
				
				  <div class="col-sm-6 col-md-3 col-lg-5">
					<div class="thumbnail">
					        <a href="https://www.stagiaires.ma/entreprises/9703-volvo-maroc--casablanca" title="VOLVO Maroc">
                                <img src="https://www.stagiaires.ma/assets/img/companies/864096f33a88ad1e930853b1d6e9fd6d.jpg" class="img-responsive">
                            </a>
					  <div class="caption">
						 <a href="https://www.stagiaires.ma/entreprises/9703-volvo-maroc--casablanca" class="small text-muted btn-link">
                                Casablanca                            </a>
                            <a href="https://www.stagiaires.ma/entreprises/9703-volvo-maroc--casablanca" class="product-name title-ellipsis">
                                VOLVO Maroc                            </a>
                            <div class="font-size-10 m-t-xs text-ellipsis">
                                VOLVO Maroc, filiale du groupe&nbsp;Volvo&nbsp;– N°1 mondial en terme de production de moteurs pour autocars et camions, est la filiale directe de&nbsp;AB Volvo&nbsp;et assure la commercialisation et le service après-vente des camions.</div>
                            <div class="text-right m-t-sm">
                                
                    <a href="https://www.stagiaires.ma/entreprises/9703-volvo-maroc--casablanca" class="btn btn-xs btn-social-icon btn-info">
                        <i class="fa fa-globe-europe fa-lg"></i>
                    </a>
                            </div>
					  </div>
					</div>
				  </div>
		</div>
				
				
				<!--////-->
				
            
        
    </div>
	</div>
  </div>
 </div>
</section> 
	<!--Start stage Entreprise-->
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
		      