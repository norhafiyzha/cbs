<?php  
	include ('cbssession.php');
	if(!session_id())
	{
		session_start();
	}

include 'headercust.php';
include 'dbconnect.php';?>

<body>
	<div class="container">
	  	<div class="row">
	      <div class="col-sm-6">

	      	<div class="row">
	      		<div class="col-sm-6"><img class="carimg" src="img/axia.png" alt="Perodua Axia"></div>
	      		<div class="col-sm-6">Perodua Axia<br>RM 150/day<br>Year 2017</div>
	      	</div>

	      	<div class="row">
	      		<div class="col-sm-6"><img class="carimg" src="img/x70.png" alt="Proton X 70"></div>
	      		<div class="col-sm-6">Proton X 70<br>RM 342/day<br>Year 2019</div>
	     	 </div>

	     	 <div class="row">
	      		<div class="col-sm-6"><img class="carimg" src="img/x50.png" alt="Proton X 50"></div>
	      		<div class="col-sm-6">Proton X 50<br>RM 350/day<br>Year 2020</div>
	     	 </div>

	     	 <div class="row">
	      		<div class="col-sm-6"><img class="carimg" src="img/vellfire.png" alt="Toyota Vellfire"></div>
	      		<div class="col-sm-6">Toyota Vellfire<br>RM 1412/day<br>Year 2016</div>
	     	 </div>

	     	 <div class="row">
	      		<div class="col-sm-6"></div>
	      		<div class="col-sm-6"></div>
	     	 </div>

	      </div>
	      <div class="col-sm-6">
	      	 <h3>New Booking</h3>
	      	 <form method= "POST" action="customerbookingprocess.php">

	      	 	<div class="form-group">
				  <label for="sel1">Select Car:</label>
				  <?php
				  	$sql = "SELECT * FROM tb_vehicle";
				  	$result = mysqli_query($conn,$sql);

				  	echo"<select name='fvec' class='form-control' id='sell'>";
				  	while ($row=mysqli_fetch_array($result)) {
				  		echo"<option value='".$row['v_id']."'> ".$row['v_type']." </option>";
				  	}
				  	echo"</select>";
				  ?>
		  		</div>

			    <div class="form-group">
			      <label for="bdate">Booking Date:</label>
			      <input type="date" class="form-control" id="pwd" placeholder="Enter password" name="fbdate">
			    </div>

			    <div class="form-group">
			      <label for="rdate">Return Date:</label>
			      <input type="date" class="form-control" id="pwd" placeholder="Enter password" name="frdate">
			    </div>
			
			    <button type="submit" class="btn btn-primary">Book</button>
			    <button type="reset" class="btn btn-warning">Reset</button>
			 </form>

	      </div>
	    </div>
    </div>


</body>
<?php include 'footer.php';?>