<?php


//Get Data
$maintenance_type = filter_input(INPUT_POST, 'maintenance_type');


//Validate Input
if($maintenance_type == null) {
	$error_message = "Maintenance Type must be entered.Please go back and eneter a Maintenance Type";
	include ('error.php');
} else {
	require ('../config.php');
	
//Add the data to the database
$query= 'INSERT INTO maintenance_type (maintenance_type) VALUES (:maintenance_type)';

$statement = $db->prepare($query);
$statement->bindValue(':maintenance_type', $maintenance_type);
$statement->execute();
$statement->closeCursor();

include('show_maintenance_type.php');

}

?>
