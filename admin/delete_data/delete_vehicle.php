<?php

$vehicle_id = filter_input(INPUT_POST, 'vehicle_id');

require ('../config.php');
	

$query = "DELETE FROM vehicles WHERE vehicle_id = :vehicle_id";
	$statement = $db->prepare($query);
	$statement->bindValue(':vehicle_id', $vehicle_id);
	$statement->execute();
	$statement->closeCursor();



include('show_vehicle.php');



?>
