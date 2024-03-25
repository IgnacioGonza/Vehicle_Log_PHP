<?php
	
	require ('../config.php');


	$maintenance_id = filter_input(INPUT_POST, 'maintenance_id');
	
	$query = "SELECT * FROM maintenance WHERE maintenance_id = :maintenance_id";
	$statement = $db->prepare ($query);
	$statement->bindValue(':maintenance_id', $maintenance_id);
	$statement->execute();
	$maintenance = $statement->fetch();
	$statement -> closeCursor();
?>
<!DOCTYPE html>
<html>
<head>
<link href = "projectlab2Styles.css" rel = "stylesheet" type = "text/css" />


<title>Edit Maintenance</title>

</head>
<body>
<main>
<h1>Current Maintenance Information</h1>

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

<form action = "edit_maintenance.php" method="post" id="edit_maintenance">

<input type="hidden" name="maintenance_id" value="<?php echo $maintenance['maintenance_id']; ?>"

<tr>
<td align=right><label>Maintenance Type Id :</label></td>
<td><input type="text" name="maintenance_type_id" value="<?php echo $maintenance['maintenance_type_id']; ?>"</td>
</tr>

<tr>
<td align=right><label>Vehicle Id:</label></td>
<td><input type="text" name="vehicle_id" value="<?php echo $maintenance['vehicle_id']; ?>"</td>
</tr>

<tr>
<td align=right><label>Maintenance Vendor:</label></td>
<td><input type="text" name="maintenance_vendor" value="<?php echo $maintenance['maintenance_vendor']; ?>"</td>
</tr>

<tr>
<td align=right><label>Maintenance Description:</label></td>
<td><input type="text" name="maintenance_description" value="<?php echo $maintenance['maintenance_description']; ?>"</td>
</tr>

<tr>
<td align=right><label>Maintenance Vendor Address:</label></td>
<td><input type="text" name="maintenance_vendor_address" value="<?php echo $maintenance['maintenance_vendor_address']; ?>"</td>
</tr>

<tr>
<td align=right><label>Maintenance Cost:</label></td>
<td><input type="text" name="maintenance_cost" value="<?php echo $maintenance['maintenance_cost']; ?>"</td>
</tr>

<tr>
<td align=right><label>Maintenance Mileage:</label></td>
<td><input type="text" name="maintenance_mileage" value="<?php echo $maintenance['maintenance_mileage']; ?>"</td>
</tr>

<tr>
<td align=right><label>Maintenance Date:</label></td>
<td><input type="text" name="maintenance_date" value="<?php echo $maintenance['maintenance_date']; ?>"</td>
</tr>

<tr>
<td align=right><label>&nbsp;</label></td>
<td><input type="submit" value="Edit Maintenance"></td>
</tr>
</table>

</form>

</center>

</main>
</body>
</html>	
