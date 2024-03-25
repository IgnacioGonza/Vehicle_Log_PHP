<?php


//Get User Data
$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$user_password = filter_input(INPUT_POST, 'user_password');
$email = filter_input(INPUT_POST, 'email');
$user_role = filter_input(INPUT_POST, 'user_role');
$user_info = filter_input(INPUT_POST, 'user_info');

//Validate Input
if($first_name == null || $last_name == null || $user_password == null || $email == null || $user_role == null) {
	$error_message = "Invalid user data. Check all fields and try agin.";
	include ('error.php');
}
else {
	require ('../config.php');
	
//Edit the user on the database
$query = "UPDATE users SET
		`first_name` = :first_name,
		`last_name` = :last_name,
		`user_password` = :user_password,
		`email` = :email,
		`user_role` = :user_role,
		`date_modified` = now()
	WHERE user_id = :user_info OR first_name = :user_info OR last_name = :user_info OR email = :user_info";
	$statement = $db->prepare($query);
	$statement->bindValue(':first_name', $first_name);
	$statement->bindValue(':last_name', $last_name);
	$statement->bindValue(':user_password', $user_password);
	$statement->bindValue(':email', $email);
	$statement->bindValue(':user_role', $user_role);
	$statement->bindValue(':user_info', $user_info);
	$statement->execute();
	$statement->closeCursor();



include('projectlab2.php');

}

?>
