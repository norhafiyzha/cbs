<?php  
	include ('cbssession.php');
	if(!session_id())
	{
		session_start();
	}

include 'headercust.php';
include 'dbconnect.php';

if(isset($_GET['id']))
{
	$bid = $_GET['id'];
}
$sql1 = "DELETE FROM tb_booking WHERE b_id='$bid'";
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($result1);
mysqli_close($conn);

header('Location: custmanage.php');

//var_dump($sql);
?>