<?php
	
	require ('../config.php');


	$vehicle_id = filter_input(INPUT_POST, 'vehicle_id');
	
	$query = "SELECT * FROM vehicles WHERE vehicle_id = :vehicle_id";
	$statement = $db->prepare ($query);
	$statement->bindValue(':vehicle_id', $vehicle_id);
	$statement->execute();
	$vehicle = $statement->fetch();
	$statement -> closeCursor();
?>
<!DOCTYPE html>
<html>
<head>
<link href = "projectlab2Styles.css" rel = "stylesheet" type = "text/css" />


<title>Edit Vehicle</title>

</head>
<body>
<main>
<h1>Current Vehicle Information</h1>

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

<form action = "edit_vehicle.php" method="post" id="edit_vehicle">

<input type="hidden" name="vehicle_id" value="<?php echo $vehicle['vehicle_id']; ?>"

<tr>
<td align=right><label>Vehicle Type:</label></td>
<td><input type="text" name="vehicle_type" value="<?php echo $vehicle['vehicle_type']; ?>"</td>
</tr>

<tr>
<td align=right><label>Vehicle Model:</label></td>
<td><input type="text" name="vehicle_model" value="<?php echo $vehicle['vehicle_model']; ?>"</td>
</tr>

<tr>
<td align=right><label>Vehicle Year:</label></td>
<td><input type="text" name="vehicle_year" value="<?php echo $vehicle['vehicle_year']; ?>"</td>
</tr>

<tr>
<td align=right><label>Vehicle Year Purchased:</label></td>
<td><input type="text" name="vehicle_year_purchased" value="<?php echo $vehicle['vehicle_year_purchased']; ?>"</td>
</tr>

<tr>
<td align=right><label>Vehicle Color:</label></td>
<td><input type="text" name="vehicle_color" value="<?php echo $vehicle['vehicle_color']; ?>"</td>
</tr>

<tr>
<td align=right><label>Vehicle VIN:</label></td>
<td><input type="text" name="vehicle_VIN" value="<?php echo $vehicle['vehicle_VIN']; ?>"</td>
</tr>

<tr>
<td align=right><label>Vehicle License Tag:</label></td>
<td><input type="text" name="vehicle_license_tag" value="<?php echo $vehicle['vehicle_license_tag']; ?>"</td>
</tr>

<tr>
<td align=right><label>Vehicle License State :</label></td>
<td><input type="text" name="vehicle_license_state" value="<?php echo $vehicle['vehicle_license_state']; ?>"</td>
</tr>

<tr>
<td align=right><label>Vehicle Purchase Price:</label></td>
<td><input type="text" name="vehicle_purchase_price" value="<?php echo $vehicle['vehicle_purchase_price']; ?>"</td>
</tr>

<tr>
<td align=right><label>Vehicle Purchase Mileage:</label></td>
<td><input type="text" name="vehicle_purchase_mileage" value="<?php echo $vehicle['vehicle_purchase_mileage']; ?>"</td>
</tr>


<tr>
<td align=right><label>&nbsp;</label></td>
<td><input type="submit" value="Edit Vehicle"></td>
</tr>
</table>

</form>

</center>

</main>
</body>
</html>	
