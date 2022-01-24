
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
<link rel='stylesheet' href='../../../css/s-stage.css' />
<link rel='stylesheet' href='../../../css/Ajouter_groupe.css' />
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
<li class="active stage" style="margin-left:1px;margin-right:1px;"><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/ETUDIANT/Etudiant.PHP"  ><i class="fa fa-book-reader fa-2x"></i> Etudiants</a>
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
	
 
		 






<!--start section stage-->
<section class="breadcrumb item panetem" style="height: 867px;">
<div class="panel panel-default">
    <!--End panel-heading-->
  <div class="panel-heading" style="height: 58px;">
    <div class="col-md-8">
       <ol class="breadcrumb use-roboto" style="background-color:#FFF;width: 1058px;"><li><a href="https://www.stagiaires.ma/"><i class="fa fa-home"></i> <span class="sr-only">Page d'accueil</span></a></li><li class="active">Stagiaires</li></ol>                
    </div>
    
  </div>
     <!--End heading-->  
	<!--start panel-body--> 
  <div class="panel-body BOD" style="height: 720px;">
   <div class="row">
                <div class="col-md-12">
                    <div class="wrapper wrapper-content">
                                                <div id="step1" class="ibox register-candidat">
   
    <div class="ibox-title border-primary">
       <h2>Afficher votre informations</h2>
    </div><hr>
    <div class="ibox-content">
	   <form class="tr" action="" method="post">
										
	 
	        <div class="form-group" >
			
			
            <label class="col-sm-3 col-sm-offset-1 control-label" style="margin-top:26px;margin-left:300px;">CNE<span class="text-danger">*</span></label>
            <div class="col-sm-6" style="margin-top:-35px;width:350px;margin-left:440px;">
                <input type="text" name="CNE" value="" id="Sujet de stage" placeholder="votre cne" class="form-control" style="margin-left: -90px;" required></br>
				
            </div></div>

    
	<table class="table" border=1>
  <thead>
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">CYCLE</th>
      <th scope="col">NOM</th>
      <th scope="col">PRENOM</th>
	  <th scope="col">FILIERE</th>
	  <th scope="col">GSM</th>
	  <th scope="col">EMAIL</th>
	  <th scope="col">AGE</th>
	  <th scope="col">ADRESSE</th>
	  <th scope="col">NATIONALITE</th>
    </tr>
  </thead>
	<tbody>
    <tr>   
      <?php
	  $base =  mysqli_connect("localhost","root","","stage_pfe");
if(isset($_POST["CNE"])){

 $res= mysqli_query($base,"select * from etudiant  where CNE='".$_POST["CNE"]."'");

	  while($row=mysqli_fetch_array($res)){
     echo '<td>'. $row["CNE"] .'</td>';
       echo '<td>'.  $row["CYCLE"] .'</td>';
       echo '<td>'. $row["NOM"] .'</td>';
	   echo '<td>'.$row["PRENOM"] .'</td>';
	   echo '<td>'. $row["FILIERE"] .'</td>';
	  echo '<td>'.$row["GSM"].'</td>';
	  echo '<td>'.$row["EMAIL"] .'</td>';
	  echo '<td>'.$row["AGE"] .'</td>';
	 echo '<td>'.$row["ADRESSE"] .'</td>';
	 echo '<td>'.$row["NATIONALITE"] .'</td>';
	  }
}
	  ?>
    </tr>
	
  </tbody>
  <button type="submit" class="btn btn-primary " name="valide1" style="margin-top:-97.5px;width:100px;margin-left:775.5px;">valider</button>
	<button type="reset" class="btn btn-danger " name="valide2" style="margin-top:-137px;width:100px;margin-left:877px;">Anuller</button>

</table>
	 
    

</form>

					<form class="mk" name="form1" action="" method="post">
					<div class="ibox-title border-primary">
                    <h2>Modifier Votre Informations</h2><hr>
                    </div>
					
					 
<div class="form-group" >
			
			
            <label class="col-sm-3 col-sm-offset-1 control-label" style="margin-top:26px;margin-left:300px;">CNE<span class="text-danger">*</span></label>
            <div class="col-sm-6" style="margin-top:-35px;width:350px;margin-left:440px;">
                <input type="text" name="CNE" value="" id="Sujet de stage" placeholder="votre cne" class="form-control" required></br>
            </div>
								
			
			<label class="col-sm-3 col-sm-offset-1 control-label" style="margin-top:4px;margin-left:300px;">GSM </label>
            <div class="col-sm-6" style="margin-top:-35px;width:350px;margin-left:440px;">
                <input type="text" name="GSM" value="" id="Sujet de stage" placeholder="votre gsm" class="form-control"></br>
            </div>
			
			
			
			<label class="col-sm-3 col-sm-offset-1 control-label" style="margin-top:3px;margin-left:300px;">EMAIL </label>
            <div class="col-sm-6" style="margin-top:-35px;width:350px;margin-left:440px;">
                <input type="text" name="EMAIL" value="" id="Sujet de stage" placeholder="votre email" class="form-control"></br>
            </div>
			
			
			<label class="col-sm-3 col-sm-offset-1 control-label" style="margin-top:4px;margin-left:300px;">ADRESSE </label>
            <div class="col-sm-6" style="margin-top:-39px;width:350px;margin-left:440px;">
                <input type="text" name="ADRESSE" value="" id="Sujet de stage" placeholder="votre adresse" class="form-control"></br>
            </div>
			
						 
 </div>
            
		   
		
        <div class="form-group">
            <div class="col-sm-11 col-sm-offset-1">
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
  <button type="submit" class="btn btn-primary " name="valide" style="margin-top: 41px;">valider <i class="fa fa-arrow-right"></i></button>
	</div>
  
  </div>
                                      </form>
  
 <!--End panel-footer-->



					
<?php
	
if(isset($_POST["CNE"]) && isset($_POST["valide"]) && !isset($_POST["valide1"] )){
		 
		      
			 
			 if($_POST["GSM"]!="")
			 { 
			 mysqli_query($base,"UPDATE `etudiant` SET `GSM`='".$_POST["GSM"]."'where CNE='".$_POST["CNE"]."'");
			 }
			 
			  if($_POST["EMAIL"]!="")
			 { 
			 mysqli_query($base,"UPDATE `etudiant` SET `EMAIL`='".$_POST["EMAIL"]."' where CNE='".$_POST["CNE"]."' ");
			 }
			 
			
			 
			 if($_POST["ADRESSE"]!="")
			 { 
			 mysqli_query($base,"UPDATE `etudiant` SET `ADRESSE`='".$_POST["ADRESSE"]."' where CNE='".$_POST["CNE"]."' ");
			 }
			 
			 
			 
			
}


?>
       
		
			</div>			
			</div>	
			</div>	
			</div>	
			</div>
			</div>
			
		
		
  </section>
<!--End section stage-->

 <!--Start footer-->

<footer class=" container-fluid footbot text-center breadcrumb ">
		<div class="container">
			<div class="row copyright">
				<p>
					Tous Droits Réservés FS Tetouan Copyright  © 2019. Courriel: <a class="" href="mailto:fs.tetouan.contact@gmail.com">fs.tetouan.contact@gmail.com</a><br>
					Faculté des Sciences, BP. 2121 M'Hannech II , 93030 Tétouan Maroc
				</p>
			</div>
			<a class="scrollup" href="#" title="Haut de page">
				<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
			</a>
		</div>
</footer>
</body>
</html>