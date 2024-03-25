<!DOCTYPE html>
<html>
<head>
<link href = "projectlab2Styles.css" rel = "stylesheet" type = "text/css" />

    <title>Data Entry</title>

</head>
<body>
<main>
<h1>Data Entry</h1>
<ul>
	<li><a href="../index.php">Home</a></li>
	<li><a href="../projectlab2.php">Records</a></li>
	<li><a class="active" href="../projectlab3.php">Add</a></li>
	<li><a href="../projectlab4.php">Edit</a></li>
	<li><a href="../reports.php">Reports</a></li>
	<li><a href="../about.php">About</a></li>
</ul>
<p><h2>Data Entry for Vehicle Table</h2></p>

<table cellspacing="0" cellpadding="5">
<!-- A simple Form which uses the post method when submitted-->
<form action = "add_vehicle.php" method="post" id="add_vehicle">

<tr>
<td><label>Type</labe></td>
<td><input type="text" name="vehicle_type"></td>
</tr>

<tr>
<td><label>Model</labe></td>
<td><input type="text" name="vehicle_model"></td>
</tr>

<tr>
<td><label>Year</labe></td>
<td><input type="text" name="vehicle_year"></td>
</tr>

<tr>
<td><label>Year Purchased</labe></td>
<td><input type="text" name="vehicle_year_purchased"></td>
</tr>

<tr>
<td><label>Color</labe></td>
<td><input type="text" name="vehicle_color"></td>
</tr>

<tr>
<td><label>VIN</labe></td>
<td><input type="text" name="vehicle_VIN"></td>
</tr>

<tr>
<td><label>License Tag</labe></td>
<td><input type="text" name="vehicle_license_tag"></td>
</tr>

<tr>
<td><label>State</labe></td>
<td><input type="text" name="vehicle_license_state"></td>
</tr>

<tr>
<td><label>Purchase Price</labe></td>
<td><input type="text" name="vehicle_purchase_price"></td>
</tr>

<tr>
<td><label>Purchase Mileage</labe></td>
<td><input type="text" name="vehicle_purchase_mileage"></td>
</tr>

<tr>
<td><label>&nbsp;</label></td>
<td><input type="submit" value="Add Vehicle"></td>
</tr>


</form>

</table>
  
</main>
</body>
</html>
