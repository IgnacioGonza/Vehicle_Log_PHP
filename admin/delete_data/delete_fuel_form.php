<?php
	require ('config.php');
	

	$query = 'SELECT * FROM fuel' ;
	$statement = $db->prepare ($query);
	$statement->execute();
	$fuels = $statement->fetchAll();
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

<h1>Fuel - Delete</h1>
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
		<th> Fuel Id </th>
		<th> Vehicle Id </th>
		<th> Fuel Source </th>
		<th> Fuel Gallons </th>
		<th> Fuel Cost </th>
		<th> Fuel Mileage </th>
		<th> Fuel Date </th>
		<th> Fuel Date Modified </th>
		<th> </th>
	</tr>	
	<?php foreach($fuels as $fuel) : ?>
	<tr>

	        <td><?php echo $fuel['fuel_id']; ?></td>
		<td><?php echo $fuel['vehicle_id']; ?></td>
		<td><?php echo $fuel['fuel_source']; ?></td>
		<td><?php echo $fuel['fuel_gallons']; ?></td>
		<td><?php echo $fuel['fuel_cost']; ?></td>
		<td><?php echo $fuel['fuel_mileage']; ?></td>
		<td><?php echo $fuel['fuel_date']; ?></td>
		<td><?php echo $fuel['fuel_date_modified']; ?></td>
	
		<td>
		<form action = "confirmation_fuel.php" method="post" id="delete_fuel">
		<input type="hidden" name="fuel_id" value="<?php echo $fuel['fuel_id']; ?>">
		<input type="submit" value="Delete Fuel">
		</form>
		</td>

	</tr>
	<?php endforeach; ?>
      </table>
	</center>
 
</main>
</body>
