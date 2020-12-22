<?php include 'headermain.php';?>

<body>
 
<!-- Register Form --> 
<div class="container">
  <h2>Register</h2>
  <form method= "POST" action="registerprocess.php">

    <div class="form-group">
      <label for="IC">IC:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter IC" name="fuid" required>
    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="fpwd">
    </div>
    <div class="form-group form-check">
    </div>

    <div class="form-group">
      <label for="Uname">Name:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter your full name" name="fname" required>
    </div>

    <div class="form-group">
      <label for="Contact">Contact Number:</label>
      <input type="text" class="form-control" id="contact" placeholder="Enter your contact number" name="fcontact" required>
    </div>

    <div class="form-group">
      <label for="Address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter your address" name="fadd">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-warning">Clear</button>
  </form>
</div><br><br>


</body>
<?php include 'footer.php';?>


