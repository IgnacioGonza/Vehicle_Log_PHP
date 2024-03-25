<?php
	require ('config.php');
	

	$query = 'SELECT * FROM users' ;
	$statement = $db->prepare ($query);
	$statement->execute();
	$users = $statement->fetchAll();
	$statement -> closeCursor();
?>
<!DOCTYPE html>
<html>
<head>
<link href = "projectlab2Styles.css" rel = "stylesheet" type = "text/css" />

<title>Data Delete</title>

</head>
<body>
<main>

<h1>User List - Delete</h1>
<ul>
	<li><a href="../../index.php">Home</a></li>
	<li><a href="../../projectlab2.php">Records</a></li>
	<li><a href="../../projectlab3.php">Add</a></li>
	<li><a href="../../projectlab4.php">Edit</a></li>
	<li><a class="active" href="../delete_data_file.php">Delete</a><li>
	<li><a href="../reports.php">Reports</a></li>
	<li><a href="../../about.php">About</a></li>
</ul>
	<center>	 
      <table cellspacing=0 cellpadding=5 border=0> 
    	<tr> 
		<th> User Id </th>
		<th> First Name </th>
		<th> Last Name </th>
		<th> User Password </th>
		<th> Email </th>
		<th> User role </th>
		<th> </th>
	</tr>	
	<?php foreach($users as $user) : ?>
	<tr>
	        <td><?php echo $user['user_id']; ?></td>
		<td><?php echo $user['first_name']; ?></td>
		<td><?php echo $user['last_name']; ?></td>
		<td><?php echo $user['user_password']; ?></td>
		<td><?php echo $user['email']; ?></td>
		<td><?php echo $user['user_role']; ?></td>	
		<td>
		<form action = "confirmation_user.php" method="post" id="delete_user">
		<input type="hidden" name="user_id" value="<?php echo $user['user_id']; ?>">
		<input type="submit" value="Delete User">
		</form>
		</td>

	</tr>
	<?php endforeach; ?>
      </table>
	</center>
   
</main>
</body>
</html>
