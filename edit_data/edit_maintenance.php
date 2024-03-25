<?php


//Get Data
$maintenance_id = filter_input(INPUT_POST, 'maintenance_id');
$maintenance_type_id = filter_input(INPUT_POST, 'maintenance_type_id');
$vehicle_id = filter_input(INPUT_POST, 'vehicle_id');
$maintenance_vendor = filter_input(INPUT_POST, 'maintenance_vendor');
$maintenance_description = filter_input(INPUT_POST, 'maintenance_description');
$maintenance_vendor_address = filter_input(INPUT_POST, 'maintenance_vendor_address');
$maintenance_cost = filter_input(INPUT_POST, 'maintenance_cost');
$maintenance_mileage = filter_input(INPUT_POST, 'maintenance_mileage');
$maintenance_date = filter_input(INPUT_POST, 'maintenance_date');



//Validate Input


if($maintenance_type_id == null) {
	$error_message = "Maintenance Type ID must be entered. Go back and fill all required fields.";
	include ('error.php');
	
}else if($vehicle_id == null) {
	$error_message = "Vehicle ID must be entered. Go back and fill all required fields.";
	include ('error.php');

}else if($maintenance_vendor == null) {
	$error_message = "Maintenance Vendor  must be entered. Go back and fill all required fields.";
	include ('error.php');
}else if($maintenance_description == null) {
	$error_message = "Maintenance Description must be entered. Go back and fill all required fields.";
	include ('error.php');
}else if($maintenance_vendor_address == null) {
	$error_message = "Maintenance Vendor Address must be entered. Go back and fill all required fields.";
	include ('error.php');
}else if($maintenance_cost == null) {
	$error_message = "Maintenance Cost must be entered. Go back and fill all required fields.";
	include ('error.php');
}else if($maintenance_mileage == null) {
	$error_message = "Maintenance Mileage must be entered. Go back and fill all required fields.";
	include ('error.php');
}else if($maintenance_date == null) {
	$error_message = "Maintenance Date must be entered. Go back and fill all required fields.";
	include ('error.php');
}else {
	require ('../config.php');
	
//Edit the data on the database
$query = "UPDATE maintenance SET
		`maintenance_type_id` = :maintenance_type_id,
		`vehicle_id` = :vehicle_id,
		`maintenance_vendor` = :maintenance_vendor,
		`maintenance_description` = :maintenance_description,
		`maintenance_vendor_address` = :maintenance_vendor_address,
		`maintenance_cost` = :maintenance_cost,
		`maintenance_mileage` = :maintenance_mileage,
		`maintenance_date` = :maintenance_date,
		`maintenance_date_modified` = now()
	WHERE maintenance_id = :maintenance_id";
	$statement = $db->prepare($query);
	$statement->bindValue(':maintenance_type_id', $maintenance_type_id);
	$statement->bindValue(':vehicle_id', $vehicle_id);
	$statement->bindValue(':maintenance_vendor', $maintenance_vendor);
	$statement->bindValue(':maintenance_description', $maintenance_description);
	$statement->bindValue(':maintenance_vendor_address', $maintenance_vendor_address);
	$statement->bindValue(':maintenance_cost', $maintenance_cost);
	$statement->bindValue(':maintenance_mileage', $maintenance_mileage);
	$statement->bindValue(':maintenance_date', $maintenance_date);
	$statement->bindValue(':maintenance_id', $maintenance_id);
	$statement->execute();
	$statement->closeCursor();



include('show_maintenance.php');

}

?>
