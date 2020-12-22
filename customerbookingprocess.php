<?php
  include('cbssession.php');
    if(!session_id())
  {
    session_start();
  }
  include('dbconnect.php');
  include('headercust.php');

//Retrieve data from form and session
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
$sql = "INSERT INTO tb_booking(b_vehicle,b_customer,b_bdate,b_rdate,b_b_totalprice,b_status)
		VALUES ('$fvec','$fuic','$fbdate','$frdate','$totalprice','1')";

mysqli_query($conn,$sql);
mysqli_close($conn);

?>

<div class="container">
	<h5>Thank you for your booking. Here's your booking details: </h5>
	<h5>Customer ID: <?php echo $fuic; ?>             <br>
		Vehicle Type: <?php echo $fvec; ?>            <br>
		Pickup Date: <?php echo $fbdate; ?>           <br>
		Return Date: <?php echo $frdate; ?>           <br>
		Duration: <?php echo $daynum; ?>              <br>
		Total Price: RM <?php echo $totalprice; ?>    <br>
		Booking Status: Received<br>


	</h5>
	<h5>Please check approval status after 1 hour </h5> <br><br>
</div>

<?php
	include 'footer.php';
?>
