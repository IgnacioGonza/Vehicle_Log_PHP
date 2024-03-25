<?php 
	require ('config.php');
?>
<!--Index page with a navigation bar for accessing different section of the application, and also it includes information abou tthe application -->
<!DOCTYPE html>
<html>

<head>
<link href = "indexStyles.css" rel = "stylesheet" type = "text/css" />

</head>

<body>

<main>
<header><h1>Vehicle Log</h1></header>

<ul>
	<li><a class="active" href="index.php">Home</a></li>
	<li><a href="projectlab2.php">Records</a></li>
	<li><a href="projectlab3.php">Add</a></li>
	<li><a href="projectlab4.php">Edit</a></li>
	<li><a href="reports.php">Reports</a></li>
	<li><a href="about.php">About</a></li>
	<li><a href="admin/index.php">Admin</a></li>
</ul>

<h2>Welcome to the Vehicle Log application!</h2>

<p><h3>With this application you will be able to see and manage information about user,vehicles, maintenace, maintenace types and fuels.</h3></p>

<p><h3>Use the Navigation Bar at the top to access the different sections of the application.</h3></p>

<p><h3>TO BE ABLE TO MANAGE USER INFORMATION AND DELETE RECORDS YOU MUST LOG IN<h3><p>

</main>



</body>
</html>	
