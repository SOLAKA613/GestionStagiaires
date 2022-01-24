<html>

<body>
    <?php
    session_start();

if(!isset($_SESSION["NOM"])&&!isset($_SESSION["PENOM"])&&!isset($_SESSION['connecter']))
{	
header('location:http://localhost/PROJET_STAGE/PROJET/Accueil/Accueil.php');
}
$_SESSION["genre"]=$_POST["gender"];
$_SESSION["CNE"]=$_POST["CNE"];
$_SESSION["Prenom"]=$_POST["Prenom"];
$_SESSION["Nom"]=$_POST["Nom"];
$_SESSION["Age"]=$_POST["Age"];
$_SESSION["email"]=$_POST["email"];
$_SESSION["Adresse"]=$_POST["Adresse"];
$_SESSION["GSM"]=$_POST["GSM"];
$_SESSION["NATIONALITE"]=$_POST["NATIONALITE"];

    if (isset($_POST['Suivant1'])) {
        include("../CONNEXION_BASE_DONNEE/CONNEXION.php");
        try {
					 $email_existe =$bdd->query('SELECT COUNT(*) AS nbemail FROM etudiant WHERE EMAIL="'.$_POST['email'].'" ');
                     $phone_existe =$bdd->query('SELECT COUNT(*) AS nbphone FROM etudiant WHERE GSM="'.$_POST['GSM'].'" ');
					 $cne_existe =$bdd->query('SELECT COUNT(*) AS cne FROM etudiant WHERE CNE="'.$_POST['CNE'].'" ');
					 
					 $email = $email_existe->fetch();
					 $phone = $phone_existe->fetch();
					 $cne= $cne_existe->fetch();
					 
				
					
					 if ($email['nbemail'] != 0) {
                         $_SESSION['email_existe'] = true;
                        header('Location: ' . $_SERVER['HTTP_REFERER']);
                       }
					   
					if ($phone['nbphone'] != 0) {
                         $_SESSION['phone_existe'] = true;
                         header('Location: ' . $_SERVER['HTTP_REFERER']); 
						 }	 
						 
				    if ($cne['cne'] != 0) {
                         $_SESSION['cne_existe'] = true;
                         header('Location: ' . $_SERVER['HTTP_REFERER']); 
						 }	   
                                               
                    if (($email['nbemail'] == 0)&&($phone['nbphone'] == 0)&&($cne['cne'] == 0))						
                    {
				     header("Location: http://localhost/PROJET_STAGE/PROJET/ELEMENTS/Stage/Ajouter_stage.php");
                    }
		}
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
		                     }
	}			 
?>
</body>
</html>							 