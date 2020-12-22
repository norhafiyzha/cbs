<?php
  include('cbssession.php');
    if(!session_id())
  {
    session_start();
  }
  include('dbconnect.php');
  include('headercust.php');

//Retrieve data from form and session
$fbid   = $_POST['fbid'];
$fvec   = $_POST['fvec'];
$fbdate = $_POST['fbdate'];
$frdate = $_POST['frdate'];
$fuic   = $_SESSION['uic'];


//calculate the totalprice of the rental
$sqlp    = "SELECT v_price FROM tb_vehicle WHERE v_id='$fvec'";
$resultp = mysqli_query($conn,$sqlp);
$rowp    = mysqli_fetch_array($resultp);

$start   = date('Y-m-d H:i:s', strtotime($fbdate));
$end     = date('Y-m-d H:i:s', strtotime($frdate));
$daydiff = abs(strtotime($start)-strtotime($end));
$daynum  = $daydiff/(60*60*24);

$totalprice = $daynum*($rowp['v_price']);

//insert into table
$sql = " UPDATE tb_booking 
		 SET b_vehicle='$fvec', b_bdate='$fbdate', b_rdate='$frdate', b_b_totalprice='$totalprice', b_status='1'
		 WHERE b_id='$fbid'";


mysqli_query($conn,$sql);
mysqli_close($conn);

header('Location: custmanage.php ');
?>


<?php
	include 'footer.php';
?>
