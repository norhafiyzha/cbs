<?php

//connect db
include("dbconnect.php");

//retrieve data from register form
$fuid = $_POST['fuid']; //$ ni variable
$fpwd = $_POST['fpwd'];
$fname = $_POST['fname'];
$fpcontact = $_POST['fcontact'];
$fadd = $_POST['fadd'];

//INSERT(CREATE) new data
$sql="INSERT INTO tb_user(u_id,u_pwd,u_name,u_contact,u_address,u_type)
	  VALUES('$fuid','$fpwd','$fname','$fpcontact','$fadd','2')";

//Execute SQL
	  $result = mysqli_query($conn,$sql);

//var_dump($result);	  



//Close Db connection
	  mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Car Booking System</title>
	</head>
	<body>
		Registration successful. Please login to book
		<br><a href="login.php">Back to Login Page</a>
	</body>
</html>