<?php

function get_total_all_records()
{
	include('db.php');
	$statement = $connection->prepare("SELECT et.*,st.SUJET FROM etudiant as et,groupe as gr,stage as st WHERE et.CNE=gr.CNE AND gr.ID_GROUPE=st.ID_GROUPE");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}

?>