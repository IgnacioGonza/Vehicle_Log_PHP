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
<p><h2>Data Entry for Maintenance Type Table</h2></p>

<table cellspacing="0" cellpadding="5">
<!-- A simple Form which uses the post method when submitted-->
<form action = "add_maintenance_type.php" method="post" id="add_maintenance">

<tr>
<td><label>Maintenance Type</labe></td>
<td><input type="text" name="maintenance_type"></td>
</tr>

<tr>
<td><label>&nbsp;</label></td>
<td><input type="submit" value="Add Maintenance Type"></td>
</tr>


</form>

</table>
  
</main>
</body>
</html>
