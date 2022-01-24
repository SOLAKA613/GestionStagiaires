<html>

<body>
    <?php
    session_start();
    if (isset($_POST['InsertB'])) {
        include("../CONNEXION_BASE_DONNEE/CONNEXION.php");
        try {
            if (
              isset($_POST['CNE']) &&   isset($_POST['gender']) && isset($_POST['Prenom']) && isset($_POST['Nom']) && isset($_POST['email']) && isset($_POST['password'])
                && isset($_POST['password_confirm']) && isset($_POST['GSM']) && $_POST['Prenom'] != '' && $_POST['Nom'] != '' && $_POST['email'] != '' 
				&& $_POST['password'] != ''
                && $_POST['password_confirm'] != '' && $_POST['GSM'] != '')
             {
                if ($_POST['password_confirm'] == $_POST['password']) 
				{ 
					 $email_existe =$bdd->query('SELECT COUNT(*) AS nbemail FROM etudiant_inscrit WHERE EMAIL="'.$_POST['email'].'" ');
                     $phone_existe =$bdd->query('SELECT COUNT(*) AS nbphone FROM etudiant_inscrit WHERE GSM="'.$_POST['GSM'].'" ');
                     $CNE_existe =$bdd->query('SELECT COUNT(*) AS nbCNE FROM etudiant_inscrit WHERE CNE="'.$_POST['CNE'].'" ');
					 
					 
					 $email = $email_existe->fetch();
					 $phone = $phone_existe->fetch();
					 $CNE = $CNE_existe->fetch();
                    
					if (($email['nbemail'] != 0)&&($phone['nbphone'] != 0))
                    {
					$_SESSION['email_existe'] = true;
                    $_SESSION['phone_existe'] = true;
                    header('Location: ' . $_SERVER['HTTP_REFERER']);					
					}
					
					 if ($email['nbemail'] != 0) {
                         $_SESSION['email_existe'] = true;
                        header('Location: ' . $_SERVER['HTTP_REFERER']);
                       }
					   
					if ($phone['nbphone'] != 0) {
                         $_SESSION['phone_existe'] = true;
                         header('Location: ' . $_SERVER['HTTP_REFERER']); 
						 }
                    if ($CNE['nbCNE'] != 0) {
                         $_SESSION['CNE_existe'] = true;
                         header('Location: ' . $_SERVER['HTTP_REFERER']); 
						 }						 
				
                    
                    if (($email['nbemail'] == 0)&&($phone['nbphone'] == 0))						
                    {
				    $reponse = $bdd->exec('INSERT INTO etudiant_inscrit VALUES("' . $_POST['CNE'] . '","' . $_POST['gender'] . '","' . $_POST['Prenom'] . '", "' . $_POST['Nom'] . '",
					"' . $_POST['email'] . '","' . $_POST['username'] . '","' . $_POST['password'] . '","' . $_POST['GSM'] . '")');
                    echo '<script>alert("Votre inscription est réussit,merci.");
					      window.location.href="http://localhost/PROJET_STAGE/PROJET/Accueil/AccueilEtudiant.php";</script> <br/>';
                    }
				}   
				else {
                    echo "les deux mot de passe ne sont pas compatible";
                }
            } else {
                echo "L'un ou plusieurs champs ne sont pas remplie ";
            }
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
            echo 'Les variables du formulaire ne sont pas déclarées';
        }
    }
    ?>
</body>

</html>