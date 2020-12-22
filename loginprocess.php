<?php
//Start session
session_start();

//connect db
include("dbconnect.php");

//retrieve data from form
$fuid = $_POST['fuid']; //$ ni variable
$fpwd = $_POST['fpwd'];

//get user based on login credentials
$sql="SELECT * FROM tb_user
	  WHERE u_id='$fuid' AND u_pwd ='$fpwd'";

//Execute SQL
	  $result = mysqli_query($conn,$sql);
	  $row = mysqli_fetch_array($result);

var_dump($result);	  
//Check existence of data
	  $count=mysqli_num_rows($result);

//check login
	  if($count == 1)	//user found
	  {
	  		//set session
	  		$_SESSION['u_id']=session_id();//the one with _ is from database
	  		$_SESSION['uic']=$fuid;

	  		if($row['u_type']=='1') 	//admin
	  		{
	  			header('Location: admin.php');
	  		}
	  		else 						//customer
	  		{
	  			header('Location: customer.php');
	  		}
	  }
	  else 				//user not found
	  {
	  		echo'User not found';
	  		//header('Location: login.php');
	  }

//Close Db connection
	  mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Car Booking System</title>
	</head>
	<body>
	<br><a href="login.php">Back to Login Page</a>
	</body>
</html>