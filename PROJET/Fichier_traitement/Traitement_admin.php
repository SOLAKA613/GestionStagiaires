<?php
session_start();
$base =  mysqli_connect("localhost","root","","stage_pfe");
 
 
   
      if(isset($_POST['Valider']) )
   {
	
		$sql= mysqli_query($base,"SELECT ID FROM `information_encadrant` WHERE USERNAME ='".$_POST["username"]."' and PASSWORD='".$_POST["password"]."' limit 1 ");
	   $rows=mysqli_num_rows($sql);
	   if($rows==1)
		 
	   {
			$test=mysqli_fetch_assoc($sql);
			session_start();
			$_SESSION["user"] = $test["ID"]; 
			header("location:http://localhost/PROJET_STAGE/PROJET/Accueil/live-table-insert-update-delete/index.php");
	   
		}
		
	  else
	   {
		 $_SESSION["ID"]= true;
          header('Location: http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Connecter/connecter.php');
		
	   }
   }  
   $_SESSION["Valider"]=$_POST["Valider"];
?>