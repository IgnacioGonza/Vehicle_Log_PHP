<?php


//Get Data
$maintenance_type_id = filter_input(INPUT_POST, 'maintenance_type_id');
$maintenance_type = filter_input(INPUT_POST, 'maintenance_type');



//Validate Input
if($maintenance_type == null) {
	$error_message = "Maintenance Type must be entered.Please go back and eneter a Maintenance Type";
	include ('error.php');
}
else {
	require ('../config.php');
//Edit the data on the database
$query = "UPDATE maintenance_type SET
		`maintenance_type` = :maintenance_type
	WHERE maintenance_type_id = :maintenance_type_id";
	$statement = $db->prepare($query);
	$statement->bindValue(':maintenance_type', $maintenance_type);
	$statement->bindValue(':maintenance_type_id', $maintenance_type_id);
	$statement->execute();
	$statement->closeCursor();



include('show_maintenance_type.php');

}

?>
