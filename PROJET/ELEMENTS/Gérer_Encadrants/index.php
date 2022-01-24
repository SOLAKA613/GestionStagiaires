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
<title>Offres et demandes de stages</title>
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
	<li><a href="http://localhost/PROJET_STAGE/PROJET/Accueil/AccueilAdministrateur.php" style="color:#ffffff; background-color: #ca5c34;">ACCUEIL</a></li> 
	<li><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Conseil_&_infos/CONSEIL_&_INFOS3.php" style="margin-left: 1px;">CONSEIL & INFOS</a></li> 
    <li><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/ORIENTATION/ORIENTATION3.php">ORIENTATION</a></li>
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
<li class="active stage" style="margin-left: 81px;"><a href="http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Administrateur-table-insert-update-delete/Choisir_filiere.php"><i class="fa fa-user-graduate fa-2x"></i> Stagiaires</a>
</li>

<li class="active"><a href="http://localhost/PROJET_STAGE/PROJET/blob-upload-master/indexAdministrateur.php" title=""><i class="fa fa-book fa-2x"></i> Rapports</a></li>

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
						</div>
					</div>
			</nav>	
</section>		
	<!--End our header-->
<html>
	
	<body>
		<div class="container box">
			<h1 align="center"><?php echo "Voir monsieur la liste des encadrants " ?> </h1>
			<br />
			<div class="table-responsive">
				<br />
				<div align="right">
					<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Ajouter</button>
				</div>
				<br /><br />
				<table id="user_data" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="10%">MATRICULE</th>
							<th width="10%">NOM</th>
							<th width="15%">PRENOM</th>
							<th width="15%">DEPARTEMENT</th>
							<th width="15%">FILIERE</th>
							<th width="15%">EMAIL</th>
							<th width="15%">GSM</th>
							<th width="12%">PASSWORD</th>
							<th width="12%">USERNAME</th>
							<th width="10%">Edit</th>
							<th width="10%">Delete</th>
						</tr>
					</thead>
				</table>
				
			</div>
		</div>
		
		<!--Start footer-->
            <a class="scrollup " href="#" title="Haut de page" >
				<i class="fa fa-arrow-alt-circle-up fa-4x" aria-hidden="true" style="margin-top: 25px;"></i>
			</a>
 
<footer class=" container-fluid footbot text-center breadcrumb ">
		<div class="container-fluid">
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

<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Ajouter un encadrant</h4>
				</div>
				<div class="modal-body">
					<label>MATRICULE</label>
					<input type="number" name="MATRICULE" id="MATRICULE" class="form-control" />
					<div name="MATRICULEA" id="MATRICULEA"></div>
					
					</br>
					<label>NOM</label>
					<input type="text" name="NOM" id="NOM" class="form-control" />
					
					</br>
					<label>PRENOM</label>
					<input type="text" name="PRENOM" id="PRENOM" class="form-control" />
					
					</br>
					<label>DEPARTEMENT</label>
					<input type="text" name="DEPARTEMENT" id="DEPARTEMENT" class="form-control" />
					
					<br />
					<label>FILIERE</label>
					<input type="text" name="FILIERE" id="FILIERE" class="form-control" />
					
					</br>
					<label>EMAIL</label>
					<input type="email" name="EMAIL" id="EMAIL" class="form-control" />
					
					</br>
					<label>GSM</label>
					<input type="GSM" name="GSM" id="GSM" class="form-control" />
					
					</br>
					<label>PASSWORD</label>
					<input type="PASSWORD" name="PASSWORD" id="PASSWORD" class="form-control" />
					
					</br>
					<label>USERNAME</label>
					<input type="text" name="USERNAME" id="USERNAME" class="form-control" />
				
					</br>
					
				</div>
				<div class="modal-footer">
				    <input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Ajouter" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
	console.log(fil);
	$('#add_button').click(function(){
		        document.getElementById("MATRICULE").style="display:block";
				
				document.getElementById("NOM").style="display:block";
				
				document.getElementById("PRENOM").style="display:block";
				
				document.getElementById("DEPARTEMENT").style="display:block";
				
				document.getElementById("FILIERE").style="display:block";
				
				document.getElementById("EMAIL").style="display:block";
				
				document.getElementById("GSM").style="display:block";
				
				document.getElementById("PASSWORD").style="display:block";
				
				document.getElementById("USERNAME").style="display:block";
				
				
			
				document.getElementById("action").style="display: inline-block;margin-top: auto;";
			
		$('#user_form')[0].reset();
		$('.modal-title').text("Add User");
		$('#action').val("Add").style="display: inline-block;margin-top: auto;";
		$('#operation').val("Add");
		
	});
	
	var dataTable = $('#user_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"fetch.php",
			type:"POST",
			error: function(e) {
				console.log(e);
			}
		},
	});

	$(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		var NOM = $('#NOM').val();
		var PRENOM = $('#PRENOM').val();
		var GSM = $('#GSM').val();
		var EMAIL = $('#EMAIL').val();
		var FILIERE = $('#FILIERE').val();
		
	
		
		if(GSM != '' && NOM != ''&& PRENOM != ''&& FILIERE != ''&& EMAIL != '')
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
			alert("Les deux champs sont obligatoires");
		}
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
				document.getElementById("MATRICULE").style="display:none";
				document.getElementById("MATRICULEA").style="display:block";
				document.getElementById("NOM").style="display:block";
				
				document.getElementById("PRENOM").style="display:block";
				
				document.getElementById("DEPARTEMENT").style="display:block";
				
				document.getElementById("FILIERE").style="display:block";
				
				document.getElementById("EMAIL").style="display:block";
				
				document.getElementById("GSM").style="display:block";
				
				document.getElementById("PASSWORD").style="display:block";
				
				document.getElementById("USERNAME").style="display:block";
				
				document.getElementById("action").style="display: inline-block;margin-top: auto;";
				
				$('#MATRICULEA').html(data.MATRICULE);
                $('#MATRICULE').val(data.MATRICULE);
				$('#NOM').val(data.NOM);
				
				$('#PRENOM').val(data.PRENOM);
				
				$('#DEPARTEMENT').val(data.DEPARTEMENT);
				
				$('#FILIERE').val(data.FILIERE);
				
				$('#EMAIL').val(data.EMAIL);
				
				$('#GSM').val(data.GSM);
				
				$('#PASSWORD').val(data.PASSWORD);
				
				$('#USERNAME').val(data.USERNAME);

				$('.modal-title').text("Edit User");
				$('#user_id').val(user_id);
				$('#action').val("Edit");
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