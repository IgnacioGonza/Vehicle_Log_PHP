<?php
	

	$fuel_id = filter_input(INPUT_POST, 'fuel_id');

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


<form action = "delete_fuel.php" method="post" id="delete_fuel">

<input type="hidden" name="fuel_id" value="<?php echo $fuel_id['fuel_id']; ?>"

<label>&nbsp;</label>
<input type="submit" value="Delete fuel">


</form>

</center>

<p><b><a href = "delete_fuel_form.php" title="Return">RETURN</a></b></p>

</main>
</body>
</html>	
