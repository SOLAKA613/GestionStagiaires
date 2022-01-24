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
<title>Offres et demandes de stages</title>
<link rel="stylesheet" href='../../../css/bootstrap.css' />
<link rel="stylesheet" href="../../../css/font-awesome.min.css" />
<link rel='stylesheet' href='../../../css/media.css' />
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!--Start jd ajax-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>		
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>				
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!--end js ajax-->		
<link rel='stylesheet' href='../../../css/style_stage.css' />
<link rel='stylesheet' href='../../../css/s-stage.css' />				
<link rel='stylesheet' href='../../../css/index.css' />
<link rel='stylesheet' href='../../../css/style_projet/style_dropdown.css' />
<title>Table Encadrant</title>
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
	<li><a href="http://localhost/PROJET_STAGE/PROJET/Accueil/AcceuilEncadrant.php" style="color:#ffffff; background-color: #ca5c34;">ACCUEIL</a></li> 
	<li><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Conseil_&_infos/CONSEIL_&_INFOS1.php" style="margin-left: 1px;">CONSEIL & INFOS</a></li> 
    <li><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/ORIENTATION/ORIENTATION1.php">ORIENTATION</a></li>
      </li>	
	</ul>
	<ul class="nav navbar-nav navbar-right">
	<li class="nav navbar-nav">
	
	<li class="ac"><a><i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
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
	<nav class="navbar navbar-default container-fluid menu-pages" role="navigation">
			<div class="container-fluid">
					<div class=" col-xs-3">
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
<li class="active stage" style="margin-left: 52x;"><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Encadrant-table-insert-update-delete/index.php"  ><i class="fa fa-user-graduate fa-2x"></i> Stagiaires</a>
</li>

<li class="active" style="margin-left:1px;"><a href="http://localhost/PROJET_STAGE/PROJET/blob-upload-master/indexEncadrant.php" title=""><i class="fa fa-book fa-2x"></i> Rapports</a></li>

<li class="active" style="margin-top: 0px;">
                    <a href="#" ><i class="fas fa-key " style='font-size: 29px;'></i><span style="font-size:13px;"> MOT DE PASSE</span> <i class="fa fa-sort-desc" aria-hidden="true"></i></a>
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
	
	<!--Start our table-->
		<div class="container box">
			<h1 align="center">Voir monsieur la liste des étudiants inscrire en stage de cette année</h1>
			<br />
			<div class="table-responsive">
				<br />
				
				<table id="user_data" class="table table-bordered table-striped">
					<thead>
						<tr>
							
							<th width="10%">CNE</th>
							<th width="15%">CYCLE</th>
							<th width="15%">NOM</th>
							<th width="15%">PRENOM</th>
							<th width="15%">FILIERE</th>
							<th width="15%">SUJET</th>
							<th width="12%">Plus d'infos</th>
							<th width="10%">Modifier</th>
							<th width="10%">Supprimer</th>
						</tr>
					</thead>
				</table>
				
			</div>
		</div>
		
		 
	</body>
</html>


<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modifier les informations d'étudiant</h4>
				</div>
				<div class="modal-body">
					<label>CNE</label>
					<input type="text" name="CNE" id="CNE" class="form-control" />
					<div name="CNEA" id="CNEA"></div>
					<br />
					<label>CYCLE</label>
					<input type="text" name="CYCLE" id="CYCLE" class="form-control" />
					<div name="CYCLEA" id="CYCLEA"></div>
					<br />
					<label>NOM</label>
					<input type="text" name="NOM" id="NOM" class="form-control" />
					<div name="NOMA" id="NOMA"></div>
					</br>
					<label>PRENOM</label>
					<input type="text" name="PRENOM" id="PRENOM" class="form-control" />
					<div name="PRENOMA" id="PRENOMA"></div>
					</br>
					<label>FILIERE</label>
					<input type="text" name="FILIERE" id="FILIERE" class="form-control" />
					<div name="FILIEREA" id="FILIEREA"></div>
					</br>
					<label>SUJET</label>
					<input type="text" name="SUJET" id="SUJET" class="form-control" />
					<div name="SUJETA" id="SUJETA"></div>
					</br>
					<label>PLUS D'INFORMATIONS</label>
					<input type="text" name="PLUS_INFORMATIONS" id="PLUS_INFORMATIONS" class="form-control" />
					<div name="PLUS_INFORMATIONSA" id="PLUS_INFORMATIONSA"></div>
					</br>
					<label>TYPE DE STAGE</label>
					<input type="text" name="TYPE" id="TYPE" class="form-control" />
					<div name="TYPEA" id="TYPEA"></div>
					</br>
					
					<label>EMAIL</label>
					<input type="email" name="EMAIL" id="EMAIL" class="form-control" />
					<div name="EMAILA" id="EMAILA"></div>
					</br>
					<label>AGE</label>
					<input type="number" name="AGE" id="AGE" class="form-control" />
					<div name="AGEA" id="AGEA"></div>
					</br>
					<label>ADRESSE</label>
					<input type="text" name="ADRESSE" id="ADRESSE" class="form-control" />
					<div name="ADRESSEA" id="ADRESSEA"></div>
					</br>
					<label>GSM</label>
					<input type="GSM" name="GSM" id="GSM" class="form-control" />
					<div name="GSMA" id="GSMA"></div>
					</br>
					<label>NATIONALITE</label>
					<input type="text" name="NATIONALITE" id="NATIONALITE" class="form-control" />
					<div name="NATIONALITEA" id="NATIONALITEA"></div>
					</br>
					<label>DATE DEBUT</label>
					<input type="date" name="DATE_DEBUT" id="DATE_DEBUT" class="form-control" />
					<div name="DATE_DEBUTA" id="DATE_DEBUTA"></div>
					</br>
					<label>DATE FIN</label>
					<input type="date" name="DATE_FIN" id="DATE_FIN" class="form-control" />
					<div name="DATE_FINA" id="DATE_FINA"></div>
					</br>
					<label>DATE SOUTENANCE</label>
					<input type="date" name="DATE_SOUTENANCE" id="DATE_SOUTENANCE" class="form-control" />
					<div name="DATE_SOUTENANCEA" id="DATE_SOUTENANCEA"></div>
					</br>
					<label>ENCADRANT PROFESSIONNEL</label>
					<input type="text" name="JURY_STAGE" id="JURY_STAGE" class="form-control" />
					<div name="JURY_STAGEA" id="JURY_STAGEA"></div>
					</br>
				
					<label>ENCADRANT</label>
					<input type="text" name="ENCADRANT" id="ENCADRANT" class="form-control" />
					<div name="ENCADRANTA" id="ENCADRANTA"></div>
					</br>
					<label>RAPPORT</label>
					<input type="text" name="NOM_RAPPORT" id="NOM_RAPPORT" class="form-control" />
					<div name="NOM_RAPPORTA" id="NOM_RAPPORTA"></div>
					</br>
					<label>DATE DEPOT</label>
					<input type="date" name="DATE_DEPOT" id="DATE_DEPOT" class="form-control" />
					<div name="DATE_DEPOTA" id="DATE_DEPOTA"></div>
					</br>
					<label>NOM_ORGANISME</label>
					<input type="text" name="NOM_ORG" id="NOM_ORG" class="form-control" />
					<div name="NOM_ORGA" id="NOM_ORGA"></div>
					</br>
					<label>ADRESSE_ORGANISME</label>
					<input type="text" name="ADRESSE_ORG" id="ADRESSE_ORG" class="form-control" />
					<div name="ADRESSE_ORGA" id="ADRESSE_ORGA"></div>
					</br>
					
				</div>
				<div class="modal-footer">
				    <input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Ajouter" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
	
	
	var dataTable = $('#user_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"fetch.php",
			type:"POST"
		},
		// "columnDefs":[
			// {
				// "targets":[0, 3, 4],
				// "orderable":false,
			// },
		// ],

	});

	$(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		var CNE = $('#CNE').val();
		var CYCLE = $('#CYCLE').val();
		var NOM = $('#NOM').val();
		var PRENOM = $('#PRENOM').val();
		var FILIERE = $('#FILIERE').val();
		var SUJET = $('#SUJET').val();
		
	
		
		if(CNE != '' && CYCLE != ''&& NOM != ''&& PRENOM != ''&& FILIERE != ''&& SUJET != '')
		{
			$.ajax({
				url:"insert.php",
				method:'POST',
				data:{user_id:user_id},
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					alert(data);
					$('#user_form')[0].reset();
					$('#userModal').modal('hide');
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			alert("Both Fields are Required");
		}
	});
	
	$(document).on('click', '.voir', function(){
		var user_id = $(this).attr("id");
		$.ajax({
			url:"fetch_single.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{ 
			
				$('#userModal').modal('show');
				document.getElementById("CNE").style="display:none";
				document.getElementById("CNEA").style="display:block";
				document.getElementById("CYCLE").style="display:none";
				document.getElementById("CYCLEA").style="display:block";
				document.getElementById("NOM").style="display:none";
				document.getElementById("NOMA").style="display:block";
				document.getElementById("PRENOM").style="display:none";
				document.getElementById("PRENOMA").style="display:block";
				document.getElementById("FILIERE").style="display:none";
				document.getElementById("FILIEREA").style="display:block";
				document.getElementById("SUJET").style="display:none";
				document.getElementById("SUJETA").style="display:block";
				document.getElementById("PLUS_INFORMATIONS").style="display:none";
				document.getElementById("PLUS_INFORMATIONSA").style="display:block";
				document.getElementById("TYPE").style="display:none";
				document.getElementById("TYPEA").style="display:block";
				document.getElementById("EMAIL").style="display:none";
				document.getElementById("EMAILA").style="display:block";
				document.getElementById("AGE").style="display:none";
				document.getElementById("AGEA").style="display:block";
				document.getElementById("ADRESSE").style="display:none";
				document.getElementById("ADRESSEA").style="display:block";
				document.getElementById("GSM").style="display:none";
				document.getElementById("GSMA").style="display:block";
				document.getElementById("NATIONALITE").style="display:none";
				document.getElementById("NATIONALITEA").style="display:block";
				document.getElementById("DATE_DEBUT").style="display:none";
				document.getElementById("DATE_DEBUTA").style="display:block";
				document.getElementById("DATE_SOUTENANCE").style="display:none";
				document.getElementById("DATE_SOUTENANCEA").style="display:block";
				document.getElementById("DATE_FIN").style="display:none";
				document.getElementById("DATE_FINA").style="display:block";
				document.getElementById("JURY_STAGE").style="display:none";
				document.getElementById("JURY_STAGEA").style="display:block";
				document.getElementById("ENCADRANT").style="display:none";
				document.getElementById("ENCADRANTA").style="display:block";
				document.getElementById("NOM_RAPPORT").style="display:none";
				document.getElementById("NOM_RAPPORTA").style="display:block";
				document.getElementById("DATE_DEPOT").style="display:none";
				document.getElementById("DATE_DEPOTA").style="display:block";
				document.getElementById("NOM_ORG").style="display:none";
				document.getElementById("NOM_ORGA").style="display:block";
				document.getElementById("ADRESSE_ORG").style="display:none";
				document.getElementById("ADRESSE_ORGA").style="display:block";
				document.getElementById("action").style="display:none";
                $('#CNEA').html(data.CNE);
				$('#CYCLEA').html(data.CYCLE);
				$('#NOMA').html(data.NOM);
				$('#PRENOMA').html(data.PRENOM);
				$('#FILIEREA').html(data.FILIERE);
				$('#SUJETA').html(data.SUJET);
				$('#PLUS_INFORMATIONSA').html(data.PLUS_INFORMATIONS);
				$('#TYPEA').html(data.TYPE);
				$('#EMAILA').html(data.EMAIL);
				$('#AGEA').html(data.AGE);
				$('#ADRESSEA').html(data.ADRESSE);
				$('#GSMA').html(data.GSM);
				$('#NATIONALITEA').html(data.NATIONALITE);
				$('#DATE_DEBUTA').html(data.DATE_DEBUT);
				$('#DATE_SOUTENANCEA').html(data.DATE_SOUTENANCE);
				$('#DATE_FINA').html(data.DATE_FIN);
				$('#JURY_STAGEA').html(data.JURY_STAGE);
				$('#ENCADRANTA').html(data.ENCADRANT);
				$('#NOM_RAPPORTA').html(data.RAPPORT);
				$('#DATE_DEPOTA').html(data.DATE_DEPOT);
				$('#NOM_ORGA').html(data.NOM_ORG);
				$('#ADRESSE_ORGA').html(data.ADRESSE_ORG);
				
				$('.modal-title').text("Voir les informations d'étudiant");
				$('#user_id').val(user_id);
				
				
			}
		})
	});
	
	$(document).on('click', '.update', function(){
		var user_id = $(this).attr("id");
		$.ajax({
			url:"fetch_single.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				document.getElementById("CNE").style="display:none";
				document.getElementById("CNEA").style="display:block";
				document.getElementById("CYCLE").style="display:block";
				document.getElementById("CYCLEA").style="display:none";
				document.getElementById("NOM").style="display:block";
				document.getElementById("NOMA").style="display:none";
				document.getElementById("PRENOM").style="display:block";
				document.getElementById("PRENOMA").style="display:none";
				document.getElementById("FILIERE").style="display:block";
				document.getElementById("FILIEREA").style="display:none";
				document.getElementById("SUJET").style="display:block";
				document.getElementById("SUJETA").style="display:none";
				document.getElementById("PLUS_INFORMATIONS").style="display:block";
				document.getElementById("PLUS_INFORMATIONSA").style="display:none";
				document.getElementById("TYPE").style="display:block";
				document.getElementById("TYPEA").style="display:none";
				document.getElementById("EMAIL").style="display:block";
				document.getElementById("EMAILA").style="display:none";
				document.getElementById("AGE").style="display:block";
				document.getElementById("AGEA").style="display:none";
				document.getElementById("ADRESSE").style="display:block";
				document.getElementById("ADRESSEA").style="display:none";
				document.getElementById("GSM").style="display:block";
				document.getElementById("GSMA").style="display:none";
				document.getElementById("NATIONALITE").style="display:block";
				document.getElementById("NATIONALITEA").style="display:none";
				document.getElementById("DATE_DEBUT").style="display:block";
				document.getElementById("DATE_DEBUTA").style="display:none";
				document.getElementById("DATE_SOUTENANCE").style="display:block";
				document.getElementById("DATE_SOUTENANCEA").style="display:none";
				document.getElementById("DATE_FIN").style="display:block";
				document.getElementById("DATE_FINA").style="display:none";
				document.getElementById("JURY_STAGE").style="display:block";
				document.getElementById("JURY_STAGEA").style="display:none";
				document.getElementById("ENCADRANT").style="display:block";
				document.getElementById("ENCADRANTA").style="display:none";
				document.getElementById("NOM_RAPPORT").style="display:block";
				document.getElementById("NOM_RAPPORTA").style="display:none";
				document.getElementById("DATE_DEPOT").style="display:block";
				document.getElementById("DATE_DEPOTA").style="display:none";
				document.getElementById("NOM_ORG").style="display:block";
				document.getElementById("NOM_ORGA").style="display:none";
				document.getElementById("ADRESSE_ORG").style="display:block";
				document.getElementById("ADRESSE_ORGA").style="display:none";
				document.getElementById("action").style="display: inline-block;margin-top: auto;";
				$('#CNE').val(data.CNE);
				$('#CNEA').html(data.CNE);
				$('#CYCLE').val(data.CYCLE);
				$('#NOM').val(data.NOM);
				$('#PRENOM').val(data.PRENOM);
				$('#FILIERE').val(data.FILIERE);
				$('#SUJET').val(data.SUJET);
				$('#PLUS_INFORMATIONS').val(data.PLUS_INFORMATIONS);
				$('#TYPE').val(data.TYPE);
				$('#EMAIL').val(data.EMAIL);
				$('#AGE').val(data.AGE);
				$('#ADRESSE').val(data.ADRESSE);
				$('#GSM').val(data.GSM);
				$('#NATIONALITE').val(data.NATIONALITE);
				$('#DATE_DEBUT').val(data.DATE_DEBUT);
				$('#DATE_SOUTENANCE').val(data.DATE_SOUTENANCE);
				$('#DATE_FIN').val(data.DATE_FIN);
				$('#JURY_STAGE').val(data.JURY_STAGE);
				$('#ENCADRANT').val(data.ENCADRANT);
				$('#NOM_RAPPORT').val(data.RAPPORT);
				$('#DATE_DEPOT').val(data.DATE_DEPOT);
				$('#NOM_ORG').val(data.NOM_ORG);
				$('#ADRESSE_ORG').val(data.ADRESSE_ORG);
				$('.modal-title').text("Modifier les informations d'étudiant");
				$('#user_id').val(user_id);
				$('#action').val("Modifier");
				$('#operation').val("Edit");
			}
		})
	});
	
	$(document).on('click', '.delete', function(){
		var user_id = $(this).attr("id");
		if(confirm("Est ce que monsieur veux supprimer ce étudiant?"))
		{
			$.ajax({
				url:"delete.php",
				method:"POST",
				data:{user_id:user_id},
				success:function(data)
				{
					alert(data);
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			return false;	
		}
	});
	
	
});
</script>
<!--End our table-->

            <a class="scrollup " href="#" title="Haut de page" >
				<i class="fa fa-arrow-alt-circle-up fa-4x" aria-hidden="true" style="margin-top:20px;margin-bottom:-20px;"></i>
			</a>
<footer class=" container-fluid footbot text-center breadcrumb " >
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