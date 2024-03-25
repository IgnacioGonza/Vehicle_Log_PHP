<?php


//Get Data
$vehicle_type = filter_input(INPUT_POST, 'vehicle_type');
$vehicle_model = filter_input(INPUT_POST, 'vehicle_model');
$vehicle_year = filter_input(INPUT_POST, 'vehicle_year');
$vehicle_year_purchased = filter_input(INPUT_POST, 'vehicle_year_purchased');
$vehicle_color = filter_input(INPUT_POST, 'vehicle_color');
$vehicle_VIN = filter_input(INPUT_POST, 'vehicle_VIN');
$vehicle_license_tag = filter_input(INPUT_POST, 'vehicle_license_tag');
$vehicle_license_state = filter_input(INPUT_POST, 'vehicle_license_state');
$vehicle_purchase_price = filter_input(INPUT_POST, 'vehicle_purchase_price');
$vehicle_purchase_mileage = filter_input(INPUT_POST, 'vehicle_purchase_mileage');

//Validate Input
if($vehicle_type == null) {
	$error_message = "Vehicle Type must be entered. Go back and fill all required fields.";
	include ('error.php');
	
}else if($vehicle_model == null) {
	$error_message = "Vehicle Model must be entered. Go back and fill all required fields.";
	include ('error.php');
	
}else if($vehicle_year == null) {
	$error_message = "Vehicle Year must be entered. Go back and fill all required fields.";
	include ('error.php');

}else if($vehicle_year_purchased == null) {
	$error_message = "Vehicle Year Purchased must be entered. Go back and fill all required fields.";
	include ('error.php');
	
}else if($vehicle_color == null) {
	$error_message = "Vehicle Color must be entered. Go back and fill all required fields.";
	include ('error.php');

}else if($vehicle_VIN == null) {
	$error_message = "Vehicle VIN must be entered. Go back and fill all required fields.";
	include ('error.php');

}else if($vehicle_license_tag == null) {
	$error_message = "Vehicle License Tag must be entered. Go back and fill all required fields.";
	include ('error.php');

}else if($vehicle_license_state == null) {
	$error_message = "Vehicle License State must be entered. Go back and fill all required fields.";
	include ('error.php');

}else if($vehicle_purchase_price == null) {
	$error_message = "Vehicle Purchase Price must be entered. Go back and fill all required fields.";
	include ('error.php');

}else if($vehicle_purchase_mileage == null) {
	$error_message = "Vehicle Purchase Mileage must be entered. Go back and fill all required fields.";
	include ('error.php');	
}else {
	require ('../config.php');
	
//Add the Vehicle to the database
$query= 'INSERT INTO vehicles (vehicle_type, vehicle_model, vehicle_year, vehicle_year_purchased, vehicle_color, vehicle_VIN, vehicle_license_tag, vehicle_license_state, vehicle_purchase_price, vehicle_purchase_mileage) VALUES (:vehicle_type, :vehicle_model, :vehicle_year, :vehicle_year_purchased, :vehicle_color, :vehicle_VIN, :vehicle_license_tag, :vehicle_license_state, :vehicle_purchase_price, :vehicle_purchase_mileage)';
$statement = $db->prepare($query);
$statement->bindValue(':vehicle_type', $vehicle_type);
$statement->bindValue(':vehicle_model', $vehicle_model);
$statement->bindValue(':vehicle_year', $vehicle_year);
$statement->bindValue(':vehicle_year_purchased', $vehicle_year_purchased);
$statement->bindValue(':vehicle_color', $vehicle_color);
$statement->bindValue(':vehicle_VIN', $vehicle_VIN);
$statement->bindValue(':vehicle_license_tag', $vehicle_license_tag);
$statement->bindValue(':vehicle_license_state', $vehicle_license_state);
$statement->bindValue(':vehicle_purchase_price', $vehicle_purchase_price);
$statement->bindValue(':vehicle_purchase_mileage', $vehicle_purchase_mileage);
$statement->execute();
$statement->closeCursor();

include('show_vehicle.php');

}

?>
