<?php
include('db.php');
include('function.php');

$query = '';
$output = array();
$query .= "SELECT * FROM information_encadrant  ";
if(isset($_POST["search"]["value"]))
{
	
	$query .= 'WHERE MATRICULE LIKE "%'.$_POST["search"]["value"].'%" ';
	
	
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY MATRICULE DESC ';
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
	
	$sub_array[] = $row["MATRICULE"];
	$sub_array[] = $row["NOM"];
	$sub_array[] = $row["PRENOM"];
	$sub_array[] = $row["DEPARTEMENT"];
	$sub_array[] = $row["FILIERE"];
	$sub_array[] = $row["EMAIL"];
	$sub_array[] = $row["GSM"];
	$sub_array[] = $row["PASSWORD"];
	$sub_array[] = $row["USERNAME"];
	$sub_array[] = '<button type="button" name="update" id="'.$row["MATRICULE"].'" class="btn btn-warning btn-xs update" style=" margin-left:2px">Modifier</button>';
	$sub_array[] = '<button type="button" name="delete" id="'.$row["MATRICULE"].'" class="btn btn-danger btn-xs delete" style="margin-left:13px">Supprimer</button>';
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
 