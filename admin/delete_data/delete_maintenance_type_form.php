<?php
	require ('config.php');
	

	$query = 'SELECT * FROM maintenance_type' ;
	$statement = $db->prepare ($query);
	$statement->execute();
	$maintenanceTypes = $statement->fetchAll();
	$statement -> closeCursor();
?>
<!DOCTYPE html>
<html>
<head>
<link href = "projectlab2Styles.css" rel = "stylesheet" type = "text/css" />

<title>Data Deleting</title>

</head>
<body>
<main>

<h1>Maintenance Type - Delete</h1>
<ul>
	<li><a href="../index.php">Home</a></li>
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
		<th> Maintenance Type Id </th>
		<th> Maintenance Type </th>
		<th> </th>
	</tr>	
	<?php foreach($maintenanceTypes as $maintenanceType) : ?>
	<tr>

		<td><?php echo $maintenanceType['maintenance_type_id']; ?></td>
		<td><?php echo $maintenanceType['maintenance_type']; ?></td>
	
		<td>
		<form action = "confirmation_maintenance_type.php" method="post" id="delete_maintenance_type">
		<input type="hidden" name="maintenance_type_id" value="<?php echo $maintenanceType['maintenance_type_id']; ?>">
		<input type="submit" value="Delete Maintenance Type">
		</form>
		</td>

	</tr>
	<?php endforeach; ?>
      </table>
	</center>
 
</main>
</body>
</html>
