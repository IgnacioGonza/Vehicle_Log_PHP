<?php
	
	require ('../config.php');


	$user_id = filter_input(INPUT_POST, 'user_id');
	
	$query = "SELECT * FROM users WHERE user_id = :user_id";
	$statement = $db->prepare ($query);
	$statement->bindValue(':user_id', $user_id);
	$statement->execute();
	$user = $statement->fetch();
	$statement -> closeCursor();
?>
<!DOCTYPE html>
<html>
<head>
<link href = "projectlab2Styles.css" rel = "stylesheet" type = "text/css" />


<title>Edit User</title>

</head>
<body>
<main>
<h1>Current User Information</h1>

 <ul>
	<li><a href="../index.php">Home</a></li>
	<li><a href="../../projectlab2.php">Records</a></li>
	<li><a href="../../projectlab3.php">Add</a></li>
	<li><a class="active" href="../../projectlab4.php">Edit</a></li>
	<li><a href="../delete_data_file.php">Delete</a><li>
	<li><a href="../reports.php">Reports</a></li>
	<li><a href="../../about.php">About</a></li>
</ul>    
<center>

<p>Enter the Information you want to change:<p>

<table cellspacing="0" cellpadding="5">

<form action = "edit_user.php" method="post" id="edit_user">

<input type="hidden" name="user_id" value="<?php echo $user_id['first_id']; ?>"

<tr>
<td align=right><label>First Name:</label></td>
<td><input type="text" name="first_name" value="<?php echo $user['first_name']; ?>"</td>
</tr>

<tr>
<td align=right><label>Last Name:</label></td>
<td><input type="text" name="last_name" value="<?php echo $user['last_name']; ?>"></td>
</tr>

<tr>
<td align=right><label>User Password:</label></td>
<td><input type="text" name="user_password" value="<?php echo $user['user_password']; ?>"></td>
</tr>

<tr>
<td align=right><label>Email:</label></td>
<td><input type="text" name="email" value="<?php echo $user['email']; ?>"></td>
</tr>

<tr>
<td align=right><label>User Role:</label>
<td><input type="text" name="user_role" value="<?php echo $user['user_role']; ?>"></td>
</tr>

<tr>
<td align=right><label>&nbsp;</label></td>
<td><input type="submit" value="Edit User"></td>
</tr>
</table>

</form>

</center>

</main>
</body>
</html>	
