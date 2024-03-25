
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
	<li><a href="../../projectlab2.php">Records</a></li>
	<li><a class="active" href="../../projectlab3.php">Add</a></li>
	<li><a href="../../projectlab4.php">Edit</a></li>
	<li><a href="../delete_data_file.php">Delete</a><li>
	<li><a href="../reports.php">Reports</a></li>
	<li><a href="../../about.php">About</a></li>
</ul>
<p><h2>Data Entry for Users Table</h2></p>

<table cellspacing="0" cellpadding="5">

<form action = "add_user.php" method="post" id="add_user">

<tr>
<td><label>First Name:</labe></td>
<td><input type="text" name="first_name"></td>
</tr>

<tr>
<td><label>Last Name:</labe></td>
<td><input type="text" name="last_name"></td>
</tr>

<tr>
<td><label>User Password:</labe></td>
<td><input type="text" name="user_password"></td>
</tr>

<tr>
<td><label>Email:</labe></td>
<td><input type="text" name="email"></td>
</tr>

<tr>
<td><label>User Role:</labe></td>
<td><input type="text" name="user_role"></td>
</tr>

<tr>
<td><label>&nbsp;</label></td>
<td><input type="submit" value="Add User"></td>
</tr>


</form>

</table>
  
</main>
</body>
</html>
