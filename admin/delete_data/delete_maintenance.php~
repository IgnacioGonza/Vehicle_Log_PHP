<?php



$maintenance_id = filter_input(INPUT_POST, 'maintenance_id');

require ('../config.php');
	

$query = "DELETE FROM maintenance WHERE maintenance_id = :maintenance_id";
	$statement = $db->prepare($query);
	$statement->bindValue(':maintenance_id', $maintenance_id);
	$statement->execute();
	$statement->closeCursor();



include('show_maintenance.php');



?>
