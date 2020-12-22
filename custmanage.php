<?php  
	include ('cbssession.php');
	if(!session_id())
	{
		session_start();
	}

include 'headercust.php';
include 'dbconnect.php';
$fuic   = $_SESSION['uic'];
$sql = "SELECT * FROM tb_booking 
		LEFT JOIN tb_vehicle ON tb_booking.b_vehicle = tb_vehicle.v_id
		LEFT JOIN tb_status ON tb_booking.b_status = tb_status.s_id
		WHERE b_customer = '$fuic'";
$result = mysqli_query($conn,$sql);
?>

<body>
	<div class="container">
	  	<h2>Hover Rows</h2>
		  <p>The .table-hover class enables a hover state on table rows:</p>            
		  <table class="table table-hover">
		    <thead>
		      <tr>
		        <th>Booking ID</th>
		        <th>Vehicle</th>
		        <th>Pickup Date</th>
		        <th>Return Date</th>
		        <th>Total Price</th>
		        <th>Status</th>
		        <th>Operation</th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php
		    	while($row=mysqli_fetch_array($result)) 
		    	{
		    		echo "<tr>";
		    		echo "<td>" .$row['b_id']."</td>";
		    		echo "<td>" .$row['v_type']."</td>";
		    		echo "<td>" .$row['b_bdate']."</td>";
		    		echo "<td>" .$row['b_rdate']."</td>";
		    		echo "<td>" .$row['b_b_totalprice']."</td>";
		    		echo "<td>" .$row['s_desc']."</td>";
		    		echo "<td>";
		    			echo "<a href= 'customermodify.php?id=".$row['b_id']."' class ='btn btn-warning'>Modify</a>&nbsp";
		    			echo "<a href= 'customercancel.php?id=".$row['b_id']."' class ='btn btn-danger'>Cancel</a>";
		    		echo "</td>";
		    		echo "</tr>";
		    	}
		    ?>
		    </tbody>
		  </table>
    </div>


</body>
<?php include 'footer.php';?>