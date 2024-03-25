<?php
	
	require ('../config.php');


	$maintenance_type_id = filter_input(INPUT_POST, 'maintenance_type_id');
	
	$query = "SELECT * FROM maintenance_type WHERE maintenance_type_id = :maintenance_type_id";
	$statement = $db->prepare ($query);
	$statement->bindValue(':maintenance_type_id', $maintenance_type_id);
	$statement->execute();
	$maintenanceType = $statement->fetch();
	$statement -> closeCursor();
?>
<!DOCTYPE html>
<html>
<head>
<link href = "projectlab2Styles.css" rel = "stylesheet" type = "text/css" />


<title>Edit Maintenance Type</title>

</head>
<body>
<main>
<h1>Current Maintenance Type Information</h1>

 <ul>
	<li><a href="../index.php">Home</a></li>
	<li><a href="projectlab2.php">Records</a></li>
	<li><a href="../projectlab3.php">Add</a></li>
	<li><a class="active" href="../projectlab4.php">Edit</a></li>
	<li><a href="../reports.php">Reports</a></li>
	<li><a href="../about.php">About</a></li>
</ul>    
<center>

<p>Enter the Information you want to change:<p>

<table cellspacing="0" cellpadding="5">

<form action = "edit_maintenance_type.php" method="post" id="edit_maintenance_type">

<input type="hidden" name="maintenance_type_id" value="<?php echo $maintenanceType['maintenance_type_id']; ?>"

<tr>
<td align=right><label>Maintenance Type :</label></td>
<td><input type="text" name="maintenance_type" value="<?php echo $maintenanceType['maintenance_type']; ?>"</td>
</tr>


<tr>
<td align=right><label>&nbsp;</label></td>
<td><input type="submit" value="Edit Maintenance Type"></td>
</tr>
</table>

</form>

</center>

</main>
</body>
</html>	
