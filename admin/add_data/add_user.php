<?php


//Get User Data
$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$user_password = filter_input(INPUT_POST, 'user_password');
$email = filter_input(INPUT_POST, 'email');
$user_role = filter_input(INPUT_POST, 'user_role');

//Validate Input
if($first_name == null) {
	$error_message = "First Name must be entered. Go back and fill all required fields.";
	include ('error.php');
}else if($last_name == null) {
	$error_message = "Last Name must be entered. Go back and fill all required fields.";
	include ('error.php');
}else if($user_password == null) {
	$error_message = "User Password must be entered. Go back and fill all required fields.";
	include ('error.php');
}else if($email == null) {
	$error_message = "Email must be entered. Go back and fill all required fields.";
	include ('error.php');
}else if($user_role == null) {
	$error_message = "User Role must be entered. Go back and fill all required fields.";
	include ('error.php');
}else {
	require ('../config.php');
	
//Add the user to the database
$query= 'INSERT INTO users (first_name, last_name, user_password, email, user_role, date_created, date_modified) VALUES (:first_name, :last_name, :user_password, :email, :user_role, now(), now())';

$statement = $db->prepare($query);
$statement->bindValue(':first_name', $first_name);
$statement->bindValue(':last_name', $last_name);
$statement->bindValue(':user_password', $user_password);
$statement->bindValue(':email', $email);
$statement->bindValue(':user_role', $user_role);
$statement->execute();
$statement->closeCursor();

include('show_user.php');

}

?>
