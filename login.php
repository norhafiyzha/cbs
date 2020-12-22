<?php include 'headerlogin.php';?>

<body>
  

<div class="container">
  <h2>Login to book :)</h2>
  <form method= "POST" action="loginprocess.php">
    <div class="form-group">
      <label for="email">IC:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter IC" name="fuid" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="fpwd">
    </div>
    <div class="form-group form-check">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-warning">Clear</button>
  </form>
</div>



</body>
<?php include 'footer.php';?>

