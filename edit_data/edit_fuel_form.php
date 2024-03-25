<?php
	
	require ('../config.php');
//Accessing the data on the database by using a query

	$fuel_id = filter_input(INPUT_POST, 'fuel_id');
	
	$query = "SELECT * FROM fuel WHERE fuel_id = :fuel_id";
	$statement = $db->prepare ($query);
	$statement->bindValue(':fuel_id', $fuel_id);
	$statement->execute();
	$fuel = $statement->fetch();
	$statement -> closeCursor();
?>
<!DOCTYPE html>
<html>
<head>
<link href = "projectlab2Styles.css" rel = "stylesheet" type = "text/css" />


<title>Edit Fuel</title>

</head>
<body>
<main>
<h1>Current Fuel Information</h1>

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

<form action = "edit_fuel.php" method="post" id="edit_fuel">

<input type="hidden" name="fuel_id" value="<?php echo $fuel['fuel_id']; ?>"

<tr>
<td align=right><label>Vehicle Id :</label></td>
<td><input type="text" name="vehicle_id" value="<?php echo $fuel['vehicle_id']; ?>"</td>
</tr>

<tr>
<td align=right><label>Fuel Source :</label></td>
<td><input type="text" name="fuel_source" value="<?php echo $fuel['fuel_source']; ?>"</td>
</tr>

<tr>
<td align=right><label>Fuel Gallons :</label></td>
<td><input type="text" name="fuel_gallons" value="<?php echo $fuel['fuel_gallons']; ?>"</td>
</tr>

<tr>
<td align=right><label>Fuel Cost :</label></td>
<td><input type="text" name="fuel_cost" value="<?php echo $fuel['fuel_cost']; ?>"</td>
</tr>

<tr>
<td align=right><label>Fuel Mileage :</label></td>
<td><input type="text" name="fuel_mileage" value="<?php echo $fuel['fuel_mileage']; ?>"</td>
</tr>

<tr>
<td align=right><label>Fuel Date :</label></td>
<td><input type="text" name="fuel_date" value="<?php echo $fuel['fuel_date']; ?>"</td>
</tr>

<tr>
<td align=right><label>&nbsp;</label></td>
<td><input type="submit" value="Edit Fuel"></td>
</tr>
</table>

</form>

</center>

</main>
</body>
</html>	
