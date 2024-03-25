<?php
	require ('../config.php');
	

	$query = 'SELECT * FROM vehicles' ;
	$statement = $db->prepare ($query);
	$statement->execute();
	$vehicles = $statement->fetchAll();
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
    <h1>Vehicles List</h1>
<ul>
	<li><a href="../index.php">Home</a></li>
	<li><a class="active"href="../../projectlab2.php">Records</a></li>
	<li><a href="../../projectlab3.php">Add</a></li>
	<li><a href="../../projectlab4.php">Edit</a></li>
	<li><a href="../delete_data_file.php">Delete</a><li>
	<li><a href="../reports.php">Reports</a></li>
	<li><a href="../../about.php">About</a></li>
</ul>
      <table>
    	<tr> 
		<th> Vehicle Id </th>
		<th> Vehicle Type</th>
		<th> Vehicle Model </th>
		<th> Vehicle Year </th>
		<th> Vehicle Year Purchased </th>
		<th> Vehicle Color </th>
		<th> Vehicle VIN </th>
		<th> Vehicle License Tag </th>
		<th> Vehicle License State </th>
		<th> Vehicle Purchase Price </th>
		<th> Vehicle Mileage </th>

	</tr>	
	<?php foreach($vehicles as $vehicle) : ?>
	<tr>
	        <td><?php echo $vehicle['vehicle_id']; ?></td>
	        <td><?php echo $vehicle['vehicle_type']; ?></td>
	        <td><?php echo $vehicle['vehicle_model']; ?></td>
	        <td><?php echo $vehicle['vehicle_year']; ?></td>
	        <td><?php echo $vehicle['vehicle_year_purchased']; ?></td>
	        <td><?php echo $vehicle['vehicle_color']; ?></td>
	        <td><?php echo $vehicle['vehicle_VIN']; ?></td>
	        <td><?php echo $vehicle['vehicle_license_tag']; ?></td>
	        <td><?php echo $vehicle['vehicle_license_state']; ?></td>
	        <td><?php echo $vehicle['vehicle_purchase_price']; ?></td>
	        <td><?php echo $vehicle['vehicle_purchase_mileage']; ?></td>
	</tr>
	<?php endforeach; ?>
      </table>
</main>
</body>
</html>	
