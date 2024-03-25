<?php
	
	require ('../config.php');
	$user_info = filter_input(INPUT_POST, 'user_info');
	$query = "SELECT * FROM users WHERE user_id = :user_info OR first_name = :user_info OR last_name = :user_info OR email = :user_info ";
	$statement = $db->prepare ($query);
	$statement->bindValue(':user_info', $user_info);
	$statement->execute();
	$users = $statement->fetchAll();
	$statement -> closeCursor();
?>
<!DOCTYPE html>
<html>
<head>
<link href = "projectlab2_styles.css" rel = "stylesheet" type = "text/css" />


    <title>Vehicle Log</title>

</head>
<body>
<main>
<h1>User Information</h1> 
      <table>
    	<tr> 
		<th> User Id </th>
		<th> First Name </th>
		<th> Last Name </th>
		<th> User Password </th>
		<th> Email </th>
		<th> User role </th>
		<th> Date Created </th>
		<th> Date Last Login </th>
		<th> Date Modified </th>
	</tr>	
	<?php foreach($users as $user) : ?>
	<tr>
	        <td><?php echo $user['user_id']; ?></td>
		<td><?php echo $user['first_name']; ?></td>
		<td><?php echo $user['last_name']; ?></td>
		<td><?php echo $user['user_password']; ?></td>
		<td><?php echo $user['email']; ?></td>
		<td><?php echo $user['user_role']; ?></td>
		<td><?php echo $user['date_created']; ?></td>
		<td><?php echo $user['date_lastlogin']; ?></td>
		<td><?php echo $user['date_modified']; ?></td>
	</tr>
	<?php endforeach; ?>
      </table>
<p><h2>These records are going to be edited.</h2></p>
<p>Enter the Information you want to change:<p>
<form action = "edit_user.php" method="post" id="edit_user">

<input type="hidden" name="user_info" value="<?php echo $user_info; ?>" ><b

<label>First Name:</labe>
<input type="text" name="first_name"><br>

<label>Last Name:</labe>
<input type="text" name="last_name"><br>

<label>User Password:</labe>
<input type="text" name="user_password"><br>

<label>Email:</labe>
<input type="text" name="email"><br>

<label>User Role:</labe>
<input type="text" name="user_role"><br>

<label>&nbsp;</label>
<input type="submit" value="Edit User"><br>
</form>

<p><b><a href = "../index.php" title="Return to main page">RETURN to main page</a></b></p>
</main>
</body>
</html>	
