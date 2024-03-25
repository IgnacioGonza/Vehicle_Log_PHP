<?php
	require ('config.php');
	

	$query = 'SELECT * FROM maintenance' ;
	$statement = $db->prepare ($query);
	$statement->execute();
	$maintenances = $statement->fetchAll();
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

<h1>Maintenance - Delete</h1>
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
		<th> Maintenance Id </th>
		<th> Maintenance Type Id </th>
		<th> Vehicle Id </th>
		<th> Maintenance Vendor </th>
		<th> Maintenance Description </th>
		<th> Maintenance Vendor address </th>
		<th> Maintenance Cost </th>
		<th> Maintenance Mileage </th>
		<th> Maintenance Date </th>
		<th> Maintenance Date Modified </th>
		<th> </th>		
	</tr>	
	<?php foreach($maintenances as $maintenance) : ?>
	<tr>
	        <td><?php echo $maintenance['maintenance_id']; ?></td>
		<td><?php echo $maintenance['maintenance_type_id']; ?></td>
		<td><?php echo $maintenance['vehicle_id']; ?></td>
		<td><?php echo $maintenance['maintenance_vendor']; ?></td>
		<td><?php echo $maintenance['maintenance_description']; ?></td>
		<td><?php echo $maintenance['maintenance_vendor_address']; ?></td>
		<td><?php echo $maintenance['maintenance_cost']; ?></td>
		<td><?php echo $maintenance['maintenance_mileage']; ?></td>
		<td><?php echo $maintenance['maintenance_date']; ?></td>
		<td><?php echo $maintenance['maintenance_date_modified']; ?></td>	
		<td>
		<form action = "confirmation_maintenance.php" method="post" id="delete_maintenance">
		<input type="hidden" name="maintenance_id" value="<?php echo $maintenance['maintenance_id']; ?>">
		<input type="submit" value="Delete Maintenance">
		</form>
		</td>

	</tr>
	<?php endforeach; ?>
      </table>
	</center>
 
</main>
</body>
</html>
