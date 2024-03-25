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
<p><h2>Data Entry for Maintenance Table</h2></p>

<table cellspacing="0" cellpadding="5">
<!-- A simple Form which uses the post method when submitted-->
<form action = "add_maintenance.php" method="post" id="add_maintenance">

<tr>
<td><label>Maintenance Type Id</labe></td>
<td><input type="text" name="maintenance_type_id"></td>
</tr>

<tr>
<td><label>Vehicle Id</labe></td>
<td><input type="text" name="vehicle_id"></td>
</tr>

<tr>
<td><label>Maintenance Vendor</labe></td>
<td><input type="text" name="maintenance_vendor"></td>
</tr>

<tr>
<td><label>Maintenance Description</labe></td>
<td><input type="text" name="maintenance_description"></td>
</tr>

<tr>
<td><label>Maintenance Vendor Address</labe></td>
<td><input type="text" name="maintenance_vendor_address"></td>
</tr>

<tr>
<td><label>Maintenance Cost</labe></td>
<td><input type="text" name="maintenance_cost"></td>
</tr>

<tr>
<td><label>Maintenance Mileage</labe></td>
<td><input type="text" name="maintenance_mileage"></td>
</tr>

<tr>
<td><label>Maintenance Date</labe></td>
<td><input type="text" name="maintenance_date"></td>
</tr>

<tr>
<td><label>&nbsp;</label></td>
<td><input type="submit" value="Add Maintenance"></td>
</tr>


</form>

</table>

</main>
</body>
</html>
