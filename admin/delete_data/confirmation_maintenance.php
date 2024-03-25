<?php
	

	$maintenance_id = filter_input(INPUT_POST, 'maintenance_id');

?>
<!DOCTYPE html>
<html>
<head>
<link href = "projectlab2Styles.css" rel = "stylesheet" type = "text/css" />


<title>Confirmation page</title>

</head>
<body>
<main>
<h1>Confirmation</h1>
    
<center>

<p>Are you sure you want to delete this record?<p>


<form action = "delete_maintenance.php" method="post" id="delete_maintenance">

<input type="hidden" name="maintenance_id" value="<?php echo $maintenance_id['maintenance_id']; ?>"

<label>&nbsp;</label>
<input type="submit" value="Delete maintenance">


</form>

</center>

<p><b><a href = "delete_maintenance_form.php" title="Return">RETURN</a></b></p>

</main>
</body>
</html>	
