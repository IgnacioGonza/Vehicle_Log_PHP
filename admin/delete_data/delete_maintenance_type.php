<?php

$maintenance_type_id = filter_input(INPUT_POST, 'maintenance_type_id');

require ('../config.php');
	
$query = "DELETE FROM maintenance_type WHERE maintenance_type_id = :maintenance_type_id";
	$statement = $db->prepare($query);
	$statement->bindValue(':maintenance_type_id', $maintenance_type_id);
	$statement->execute();
	$statement->closeCursor();



include('show_maintenance_type.php');



?>
