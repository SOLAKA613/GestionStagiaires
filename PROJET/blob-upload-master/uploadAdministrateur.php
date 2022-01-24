

<?php
session_start();
include_once 'dbconfig.php';
$_SESSION['btn-upload']=$_POST["btn-upload"];
$requte=('SELECT COUNT(*) AS NCNE FROM `etudiant` WHERE CNE ='.$_POST["CNE"]);
	    $CN=mysqli_query($connection,$requte);
		$CNE=mysqli_fetch_array($CN);
if($CNE['NCNE']==1)
{	
if(isset($_POST['btn-upload']) && isset($_POST['CNE']) &&isset($_FILES['file']) && $_FILES['file']['error'] == 0)
{    
	$filename = $_FILES['file']['name'];
    $tmpname = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	$path="upload/".$filename;

	if($ext=="pdf"||$ext=="PDF"||$ext=="doc"||$ext=="DOC"||$ext=="docx"||$ext=="DOCX"
		||$ext=="XLS"||$ext=="xls"||$ext=="XLSX"||$ext=="xlsx"||$ext=="xlsm"||$ext=="XLSM")
	{
		move_uploaded_file($tmpname,$path);
		$requte=('SELECT `ID_GROUPE` FROM `groupe` WHERE CNE ='.$_POST["CNE"]);
	    $ID_GR=mysqli_query($connection,$requte);
		$ID_GROUPE=mysqli_fetch_array($ID_GR);
		
		$requte1=('SELECT `ID_STAGE` FROM `stage` WHERE ID_GROUPE ='.$ID_GROUPE["ID_GROUPE"]);
	    $ID_ST=mysqli_query($connection,$requte1);
		$ID_STA=mysqli_fetch_array($ID_ST);
		
		
	 $sql="UPDATE rapport SET RAPPORT='$filename',TYPE='$file_type',SIZE='$file_size' where rapport.ID_STAGE=".$ID_STA['ID_STAGE'];
		$i=mysqli_query($connection,$sql);
	   $req=('SELECT SUJET FROM `stage` WHERE ID_STAGE=65432261');
	    $ST=mysqli_query($connection,$req);
		$SUJE=mysqli_fetch_array($ST);
		$SUJET=$SUJE["SUJET"];
		$DATE=date ("y-m-d");
		$inform=("INSERT INTO `information_rapport`(`SUJET`, `RAPPORT`, `DATE_DEPOT`, `SIZE`, `TYPE`) VALUES ('$SUJET','$filename','$DATE',
		'$file_size','$file_type')");
	    $ID_ST=mysqli_query($connection,$inform);
		if ($i==1)
		{
			?>
		
		<script>
		alert('Téléchargé avec succès');
		window.location.href='indexAdministrateur.php';
        </script>
		<?php
		mysqli_close($connection);
		}
	else
		{
        
        $_SESSION['FAIL']=true;
		?>
		<script>
		alert('Erreur lors du téléchargement du fichier');
        window.location.href='indexAdministrateur.php';
        </script>

		<?php 
		mysqli_close($connection);
		}		

	
}
else
{  mysqli_close($connection);
    $_SESSION['FAIL']=true;
	?>
	    <script>
		alert('Erreur le format de fichier peut ne pas être pris en charge, veuillez vérifier et réessayer');
        window.location.href='indexAdministrateur.php';
        </script>
<?php
	
}
}
else
{    
$_SESSION['FAIL']=true;
?>
    <script>
		alert('Erreur lors du téléchargement du fichier');
        window.location.href='indexAdministrateur.php';
    </script>
<?php
}
}
else
{

 ?>
    <script>
		alert('Le numéro de cne que vous avez entré est invalide');
        window.location.href='indexAdministrateur.php';
    </script>
<?php
}
?>	
   

