<?php  
	include ('cbssession.php');
	if(!session_id())
	{
		session_start();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Car Booking System</title>
</head>
<body>
Admin Page<br>
<a href="logout.php">Logout</a>
</body>
</html>

