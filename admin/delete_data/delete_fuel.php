<?php


//Get Fuel Id
$fuel_id = filter_input(INPUT_POST, 'fuel_id');

require ('../config.php');
	
//Delete the fuel from the database
$query = "DELETE FROM fuel WHERE fuel_id = :fuel_id";
	$statement = $db->prepare($query);
	$statement->bindValue(':fuel_id', $fuel_id);
	$statement->execute();
	$statement->closeCursor();



include('show_fuel.php');



?>
