<?php


//Get User Id
$user_id = filter_input(INPUT_POST, 'user_id');

require ('../config.php');
	
//Delete the user from the database
$query = "DELETE FROM users WHERE user_id = :user_id";
	$statement = $db->prepare($query);
	$statement->bindValue(':user_id', $user_id);
	$statement->execute();
	$statement->closeCursor();



include('show_user.php');



?>
