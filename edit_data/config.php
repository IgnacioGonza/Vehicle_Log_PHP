<?php 
//Accessing the database
	$dsn = 'mysql:host=localhost;dbname=vehicle_log';
	$username = 'cpt283';
	$password = 'webapps';

	try {
		$db = new PDO($dsn, $username, $password);
		
	
	} catch (PDOException $e) {
		$error_message = $e -> getMessage();
		include ('database_error.php');
		exit();	
	}
?>
