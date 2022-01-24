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
<title>Bootstrap Course 03 Include it</title>
<link rel="stylesheet" href='../../../css/bootstrap.css' />
<link rel="stylesheet" href="../../../css/font-awesome.min.css" />
<link rel='stylesheet' href='../../../css/media.css' />
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel='stylesheet' href='../../../css/style_stage.css' />
<link rel='stylesheet' href='../../../css/s-stage.css' />
<link rel='stylesheet' href='../../../css/Ajouter_groupe.css' />
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
	
	<li ><a><i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
	<?php echo  $_SESSION['NOM'] . " " . $_SESSION['PRENOM'] ; ?> </a>
	</li>
           </li>	
	      </ul>   
		 </div>
		</div><!-- /.container-fluid-->
	</nav>
    	<!--End our navbar-->
		<!--Start our header-->	
<section class="header">
	<header class="container-fluid navbar menu-pages constant">
			<div class="container-fluid">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<a class="logo navbar-btn pull-left navbar-left" href="/site/" title="Accueil">
							  <img src="../../../image/Faculté de science/fs_log.png" alt="Accueil">
							</a>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
						  <span class="sr-only">Toggle navigation</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>
			            <div class="navbar-collapse collapse" id="navbar-collapse">
							<nav role="navigation">
								<ul class="menu nav navbar-nav">
<li class="active stage" style="margin-left: 52px;"><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Administrateur-table-insert-update-delete/Choisir_filiere.php" ><i class="fa fa-user-graduate fa-2x"></i><span class="text"> Stagiaires </span></a>
</li>

<li class="active"><a href="http://localhost/PROJET_STAGE/PROJET/blob-upload-master/indexAdministrateur.php" ><i class="fa fa-book fa-2x"></i><span class="text"> Rapports </span></a>

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
                            </nav>
						</div>
					</div>
			</div>
	</header>	
</section>				
	<!--End our header-->	
<!--start section stage-->
<section class="breadcrumb item ">
<div class="panel panel-default">
      <!--End panel-heading-->
  <div class="panel-heading" style="height: 65px;">
    <div class="col-md-8">
       <ol class="breadcrumb use-roboto" style="background-color:#FFF;width:1055px"><li><a href="http://localhost/PROJET_STAGE/PROJET/Accueil/AccueilAdministrateur.php"><i class="fa fa-home"></i> <span class="sr-only">Page d'accueil</span></a></li><li class="active">Stagiaires</li></ol>                
    </div>
     <div class="col-md-12">

       </div>
  </div>
     <!--End heading--> 
	<!--start panel-body--> 
  <div class="panel-body" style="height: 438px;">
   <div class="row">
                <div class="col-md-12">
                    <div class="wrapper wrapper-content">
                                                <div id="step1" class="ibox register-candidat">
    <form action="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Administrateur-table-insert-update-delete/index.php" id="form" class="form-horizontal" role="form" method="post" accept-charset="utf-8" novalidate="novalidate">
    <div class="ibox-title border-primary">
        <h2>Choisir cycle et filiere</h2>
    </div><hr>
       <div class="ibox-content">
	    
		
		<div class="form-group">
            <label class="col-sm-3 col-sm-offset-1 control-label">Cycle <span class="text-danger">*</span></label>
            <div class="col-sm-7">
                                <div class="radio radio-info radio-inline">
                    <input id="javascript" value="LICENCE" name="cycle" type="radio" checked="checked" onClick="changementType()">
                    <label for="Licence"> Licence </label>
                                </div>
                                <div class="radio radio-info radio-inline">
                    <input id="javascript" value="MASTER" name="cycle" type="radio" onClick="changementType()">
                    <label for="Master"> Master </label>
                                </div>
            </div>
        </div>
		
        <div class="form-group" >
            <label class="col-sm-3 col-sm-offset-1 control-label">Filiere<span class="text-danger">*</span>:</label>
            <div class="col-sm-4" id ="hebdomadaire" style="display:block">
                <select  class="form-control" name="fil" id="hebdomadaire_liste">
                         <?php
						 while($d= $Licence->fetch())
						 {	 
						 echo'<option value="' . $d['FILIERE'] . '">' . $d['FILIERE'] . '</option>';
					     }
						 ?>
               </select>
            </div>
			<div class="col-sm-4" id="mensuel" style="display:none"> 
				 <select name="fil_" class="form-control" > 
						<?php
						while($M= $Master->fetch())
						{	
						echo '<option value="' . $M['FILIERE'] . '">' . $M['FILIERE'] . '</option>';
						}
                        ?>						
				 </select>
			  
		    </div> 
        </div>
	
	<div class="form-group">
            <div class="col-sm-11 col-sm-offset-1">
                <p class="text-danger">(*) Champ obligatoire</p>
            </div>
        </div>
        </div>  
   
	                         </div>
                </div>
            </div>
    </div>
  </div>
    <!--End panel-body-->
	<!--Start panel-footer-->
  <div class="panel-footer ">

   <div class="ibox-footer text-right" >
  <button type="submit" class="btn btn-success">Afficher <i class="fa fa-check" aria-hidden="true"></i></button>
    </div>
  </div>
 </form>
    <!--End panel-footer-->
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
<!--End footer-->
		<script type="text/javascript">
         function changementType()
    {
       

       if(form.javascript[0].checked ==true)
          {
            document.getElementById("hebdomadaire").style="display:block";
			document.getElementById("mensuel").style="display:none"; 
          }
	   else
		 { document.getElementById("mensuel").style="display:block"; 
		 document.getElementById("hebdomadaire").style="display:none";} 
	   

        return;
    }
        
       </script>
		
</body>
</html>
	