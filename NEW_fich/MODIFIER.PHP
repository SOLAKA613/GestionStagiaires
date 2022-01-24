
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8" />
<!-- IE Compatibility INTERNET EXPLORER Meta -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--First Compatibility Mobile Meta -->
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Bootstrap Course 03 Include it</title>
<link rel="stylesheet" href='../css/bootstrap.css' />
<link rel="stylesheet" href="../css/font-awesome.min.css" />
<link rel='stylesheet' href='../css/media.css' />
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel='stylesheet' href='../CSS1/style_stage.css' />
<link rel='stylesheet' href='../CSS1/s-stage.css' />


<!--[if lt IE 9]>
	<script src="../js/html5shiv.min.js"></script>
	<script src="../js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/plugins.js"></script>

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
	<li><a href="file:///D:/Compressed/bootstrap-3.2.0/dist/PROJET/STAGE_PFE.html" style="color:#ffffff; background-color: #ca5c34;">ACCUIEL</a></li> 
	<li><a href="#">CONSEIL & INFOS</a></li> 
    <li><a href="#">ORIENTATION</a></li>
      </li>	
	</ul>
	<ul class="nav navbar-nav navbar-right">
	<li class="nav navbar-nav">
	<li class="dropdown">
	<a class="btn btn-secondary "  id="dropdownMenuButton" style="height: 52px;margin-right: 1px; border-radius: 0px;" data-toggle="dropdown"  ><i class="fa fa-sign-out-alt"></i>
	Se connecter</a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="    height: 100px;">
	<div class="deconnecte actif breadcrumb">
		<div class="logge" style="display: block;">
			<form method="post" action="https://www.cmonsite.fr/identification.php">
			<div class="form-group">
            <label for="exampleDropdownFormPassword1">Votre pseudo :</label>
            <input type="email" class="form-control" id="exampleDropdownFormemail" placeholder="pseudo">
            </div>
			<div class="form-group">
            <label for="exampleDropdownFormPassword1">Mot de passe :</label>
            <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="••••••••••••">
            </div>
			<div>
			<a   href="https://www.cmonsite.fr/motdepasse.php" class="accesperdus_link">Accès perdus ?  </a>
			<button type="button" class="btn btn-success">Se connecter</button>
			</div>
			</form>
		</div>
	</div>
   </div>
	</li>
	<li><a href="file:///D:/Compressed/bootstrap-3.2.0/dist/PROJET/Inscrire.html"><i class="fa fa-user-plus" aria-hidden="true"></i> S'inscrire</a></li>
           </li>	
	      </ul>  
		 </div>
		</div><!-- /.container-fluid-->
	</nav>
    	<!--End our navbar-->
		<!--Start our header-->	
<section class="header">
	<header class="container-fluid navbar menu-pages">
			<div class="container-fluid">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<a class="logo navbar-btn pull-left navbar-left" href="/site/" title="Accueil">
							  <img src="../image/Faculté de science/fs_log.png" alt="Accueil">
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
<li class="active"><a href="/site/" ><i class="fa fa-user-graduate fa-2x"></i> Stagiaires</a>
</li>
<li class="active stage"><a href="file:///D:/Compressed/bootstrap-3.2.0/dist/PROJET/Ajouter-groupe.html" ><i class="fa fa-file-alt fa-2x"></i> Stage </a>
</li>
<li class="active"><a href="#" ><i class="fa fa-book-reader fa-2x"></i> Etudiants</a>
</li>
<li class="active"><a href="#" ><i class="fa fa-chalkboard-teacher fa-2x"></i> Encadrants</a>
</li>
<li class="active"><a href="#" ><i class="fa fa-building fa-2x"></i> Entreprise</a>
</li>
<li class="active"><a href="#" title=""><i class="fa fa-book fa-2x"></i> Rapports</a></li>
                                  </ul>							
                            </nav>
						</div>
					</div>
			</div>
	</header>	
</section>				
	<!--End our header-->	
<!--start section stage-->
<section class="breadcrumb item " style="height:1023px;">
<div class="panel panel-default">
      <!--End panel-heading-->
  <div class="panel-heading">
    <div class="col-md-8">
       <ol class="breadcrumb use-roboto"><li><a href="https://www.stagiaires.ma/"><i class="fa fa-home"></i> <span class="sr-only">Page d'accueil</span></a></li><li class="active">Stagiaires</li></ol>                
    </div>
     <div class="col-md-12">
<div class="skills-progress">
  <div class="progress">
     <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="30" aria-valuemin="0"  aria-valuemax="100" style="width:30%">
				    30%
	 </div>
   </div>
</div>
       </div>
  </div>
     <!--End heading--> 
	<!--start panel-body--> 
  <div class="panel-body" style="height:900px;">
   <div class="row">
                <div class="col-md-12">
                    <div class="wrapper wrapper-content">
                                                <div id="step1" class="ibox register-candidat">			   													
<form class="tr" action="http://localhost/part%20etudiant/mathimatique/MODIFIER.PHP" method="post">
<h2>Afficher votre informations :</h2>										
	 <div class="ibox-content" >
	        <div class="form-group" >
			
			
            <label class="col-sm-3 col-sm-offset-1 control-label" style="margin-top:26px;margin-left:270px;">CNE<span class="text-danger">*</span></label>
            <div class="col-sm-6" style="margin-top:-35px;width:350px;margin-left:380px;">
                <input type="text" name="CNE" value="" id="Sujet de stage" placeholder="votre cne" class="form-control" required></br>
				
            </div></div></div>

    
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
	  $base =  mysqli_connect("localhost","root","abdel","proget_pfe");
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
  <button type="submit" class="btn btn-primary " name="valide" style="margin-top:-179px;width:100px;margin-left:717.5px;">valider</button>
	<button type="reset" class="btn btn-danger " name="valide" style="margin-top:-136.6px;width:100px;margin-left:819px;">Anuller</button>

</table>
	 
    

</form>
</br>
</br>
<hr>
<hr>

					<form class="mk" name="form1" action="http://localhost/part%20etudiant/mathimatique/MODIFIER.PHP" method="post">
					<h2>Modifier Votre Informations :</h2>
					 <div class="ibox-content" >
	        <div class="form-group" >
			
			
            <label class="col-sm-3 col-sm-offset-1 control-label" style="margin-top:26px;margin-left:270px;">CNE<span class="text-danger">*</span></label>
            <div class="col-sm-6" style="margin-top:-35px;width:350px;margin-left:380px;">
                <input type="text" name="CNE" value="" id="Sujet de stage" placeholder="votre cne" class="form-control" required></br>
            </div>
			
			
			
			<label class="col-sm-3 col-sm-offset-1 control-label" style="margin-top:27px;margin-left:270px;">AGE<span class="text-danger">*</span></label>
            <div class="col-sm-6" style="margin-top:-35px;width:350px;margin-left:380px;">
                <input type="text" name="AGE" value="" id="Sujet de stage" placeholder="votre age" class="form-control" required></br>
            </div>
			
		
			
			<label class="col-sm-3 col-sm-offset-1 control-label" style="margin-top:34px;margin-left:270px;">GSM <span class="text-danger">*</span></label>
            <div class="col-sm-6" style="margin-top:-35px;width:350px;margin-left:380px;">
                <input type="text" name="GSM" value="" id="Sujet de stage" placeholder="votre gsm" class="form-control"></br>
            </div>
			
			
			
			<label class="col-sm-3 col-sm-offset-1 control-label" style="margin-top:44px;margin-left:270px;">EMAIL <span class="text-danger">*</span></label>
            <div class="col-sm-6" style="margin-top:-35px;width:350px;margin-left:380px;">
                <input type="text" name="EMAIL" value="" id="Sujet de stage" placeholder="votre email" class="form-control"></br>
            </div>
			
			
			<label class="col-sm-3 col-sm-offset-1 control-label" style="margin-top:46px;margin-left:270px;">ADRESSE <span class="text-danger">*</span></label>
            <div class="col-sm-6" style="margin-top:-39px;width:350px;margin-left:380px;">
                <input type="text" name="ADRESSE" value="" id="Sujet de stage" placeholder="votre adresse" class="form-control"></br>
            </div>
			 
					 
 </div>
 
		  </div> 	
		  
		   <div class="panel-footer "style="margin-top:460px;height:60px;width:1000px;">
  <div class="ibox-footer text-left" >
  
   <div class="ibox-footer text-right" >
  <button type="submit" name="valide" style=" margin-top: 10px;display:block;text-align: right; margin-left: 870px;" class="btn btn-primary ">
  <i class="fa fa-check"></i>  valider </button>
    </div>
  </div>
  </div>
   
  
  
	
 
                    </form>



  
<?php
	
if(isset($_POST["CNE"]) && isset($_POST["AGE"]  )){
		 
		      
			 
			 if($_POST["GSM"]!="")
			 { 
			 mysqli_query($base,"UPDATE `etudiant` SET `GSM`='".$_POST["GSM"]."'where CNE='".$_POST["CNE"]."' AND AGE=".$_POST["AGE"]);
			 }
			 
			  if($_POST["EMAIL"]!="")
			 { 
			 mysqli_query($base,"UPDATE `etudiant` SET `EMAIL`='".$_POST["EMAIL"]."' where CNE='".$_POST["CNE"]."' AND AGE=".$_POST["AGE"]);
			 }
			 
			
			 
			 if($_POST["ADRESSE"]!="")
			 { 
			 mysqli_query($base,"UPDATE `etudiant` SET `ADRESSE`='".$_POST["ADRESSE"]."' where CNE='".$_POST["CNE"]."' AND AGE=".$_POST["AGE"]);
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