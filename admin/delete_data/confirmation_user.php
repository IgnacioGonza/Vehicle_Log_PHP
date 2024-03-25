<?php
	

	$user_id = filter_input(INPUT_POST, 'user_id');

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


<form action = "delete_user.php" method="post" id="delete_user">

<input type="hidden" name="user_id" value="<?php echo $user_id['user_id']; ?>"

<label>&nbsp;</label>
<input type="submit" value="Delete user">


</form>

</center>

<p><b><a href = "delete_user_form.php" title="Return">RETURN</a></b></p>

</main>
</body>
</html>	
