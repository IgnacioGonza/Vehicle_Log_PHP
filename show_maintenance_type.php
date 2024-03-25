<?php
	require ('config.php');
	
//Running a query for getting the data from the specified table
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


    <title>Vehicle Log</title>

</head>
<body>
<main>
    <h1>Maintenance Type List</h1>
<ul>
	<li><a href="index.php">Home</a></li>
	<li><a class="active"href="projectlab2.php">Records</a></li>
	<li><a href="projectlab3.php">Add</a></li>
	<li><a href="projectlab4.php">Edit</a></li>
	<li><a href="reports.php">Reports</a></li>
	<li><a href="about.php">About</a></li>
</ul>
      <table>
    	<tr> 
		<th> Maintenance Type Id </th>
		<th> Maintenance Type </th>
	</tr>	
	<?php foreach($maintenanceTypes as $maintenance) : ?> <!-- A foreach statement for getting the data from the database and filling the table -->
	<tr>
	        <td><?php echo $maintenance['maintenance_type_id']; ?></td>
		<td><?php echo $maintenance['maintenance_type']; ?></td>

	</tr>
	<?php endforeach; ?>
      </table>
</main>
</body>
</html>	
