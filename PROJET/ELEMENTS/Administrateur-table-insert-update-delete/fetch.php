<?php
include('db.php');
include('function.php');

$query = '';
$output = array();
$query .= "SELECT et.*,st.* FROM etudiant as et,groupe as gr,stage as st ";
if(isset($_POST["search"]["value"]))
{
	// var_dump($_POST["fil"]);
	$query .= 'WHERE et.CNE=gr.CNE AND gr.ID_GROUPE=st.ID_GROUPE AND FILIERE="'.$_POST["fil"].'" AND CYCLE="'.$_POST["cycle"].'" AND et.CNE LIKE "%'.$_POST["search"]["value"].'%" ';
	// $query .= 'WHERE FILIERE="'.$_POST["fil"].'"';
	
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY CNE DESC ';
}
if($_POST["length"] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
	
	$sub_array = array();
	
	$sub_array[] = $row["CNE"];
	$sub_array[] = $row["CYCLE"];
	$sub_array[] = $row["NOM"];
	$sub_array[] = $row["PRENOM"];
	$sub_array[] = $row["FILIERE"];
	$sub_array[] = $row["SUJET"];
	$sub_array[] = '<button type="button" name="voir" id="'.$row["CNE"].'" class="btn btn-secondary btn-xs voir" style="color:#FFFF; background-color: #A5A2A2; width:53px; margin-left:30px" >Voir</button>';
	$sub_array[] = '<button type="button" name="update" id="'.$row["CNE"].'" class="btn btn-warning btn-xs update" style=" margin-left:16px">Modifier</button>';
	$sub_array[] = '<button type="button" name="delete" id="'.$row["CNE"].'" class="btn btn-danger btn-xs delete" style="margin-left:13px">Supprimer</button>';
	$data[] = $sub_array;
}
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);

?>
 