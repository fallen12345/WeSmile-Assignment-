
<?php
if(isset($_POST['username']))
{
	// include Database connection file 
	include("database.php");

	$username = mysqli_real_escape_string($con, $_POST['username']);

	$query = "SELECT username FROM registration WHERE username = '$username'";
	if(!$result = mysqli_query($con, $query))
	{
		exit(mysqli_error($con));
	}

	if(mysqli_num_rows($result) > 0)
	{
		// username is already exist 
		echo '<div style="color: red;"> <b>'.$username.'</b> is already in use! </div>';
	}
	else
	{
		// username is avaialable to use.
		echo '<div style="color: green;"> <b>'.$username.'</b> is available! </div>';
	}
}
?>