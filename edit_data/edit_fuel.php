<?php


//Get Data
$fuel_id = filter_input(INPUT_POST, 'fuel_id');
$vehicle_id = filter_input(INPUT_POST, 'vehicle_id');
$fuel_source = filter_input(INPUT_POST, 'fuel_source');
$fuel_gallons = filter_input(INPUT_POST, 'fuel_gallons');
$fuel_cost = filter_input(INPUT_POST, 'fuel_cost');
$fuel_mileage = filter_input(INPUT_POST, 'fuel_mileage');
$fuel_date = filter_input(INPUT_POST, 'fuel_date');


//Validate Input
if($vehicle_id == null) {
	$error_message = "Vehicle ID must be entered.";
	include ('error.php');
	
}else if($fuel_source == null) {
	$error_message = "Fuel Source must be entered. Go back and fill all required fields.";
	include ('error.php');
}else if($fuel_gallons == null) {
	$error_message = "Fuel Gallons must be entered. Go back and fill all required fields.";
	include ('error.php');
}else if($fuel_cost == null) {
	$error_message = "Fuel Cost must be entered. Go back and fill all required fields.";
	include ('error.php');
}else if($fuel_mileage == null) {
	$error_message = "Fuel Mileage must be entered. Go back and fill all required fields.";
	include ('error.php');
}else if($fuel_date == null) {
	$error_message = "Fuel Date must be entered. Go back and fill all required fields.";
	include ('error.php');
} else {

	require ('../config.php');
//Edit the data on the database
$query = "UPDATE fuel SET
		`vehicle_id` = :vehicle_id,
		`fuel_source` = :fuel_source,
		`fuel_gallons` = :fuel_gallons,
		`fuel_cost` = :fuel_cost,
		`fuel_mileage` = :fuel_mileage,
		`fuel_date` = :fuel_date,
		`fuel_date_modified` = now()
	WHERE fuel_id = :fuel_id";
	$statement = $db->prepare($query);
	$statement->bindValue(':vehicle_id', $vehicle_id);
	$statement->bindValue(':fuel_source', $fuel_source);
	$statement->bindValue(':fuel_gallons', $fuel_gallons);
	$statement->bindValue(':fuel_cost', $fuel_cost);
	$statement->bindValue(':fuel_mileage', $fuel_mileage);
	$statement->bindValue(':fuel_date', $fuel_date);;
	$statement->bindValue(':fuel_id', $fuel_id);
	$statement->execute();
	$statement->closeCursor();



include('show_fuel.php');

}

?>
