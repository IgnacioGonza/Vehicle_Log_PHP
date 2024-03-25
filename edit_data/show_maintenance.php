<?php
	require ('../config.php');
	

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


    <title>Vehicle Log</title>

</head>
<body>
<main>
    <h1>Maintenance List</h1>
<ul>
	<li><a href="../index.php">Home</a></li>
	<li><a class="active"href="projectlab2.php">Records</a></li>
	<li><a href="../projectlab3.php">Add</a></li>
	<li><a href="../projectlab4.php">Edit</a></li>
	<li><a href="../reports.php">Reports</a></li>
	<li><a href="../about.php">About</a></li>
</ul>
      <table>
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
	</tr>
	<?php endforeach; ?>
      </table>
</main>
</body>
</html>	
