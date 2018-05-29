<?php 
include '../config.php';
include 'header.php';
?>

<div class="container">
  <div class="col-md-4">
  	<form action="adminLogin.php" method="POST" role="form">
	  	<legend>Login form</legend>
	  
	  	<div class="form-group">
	  		<label for="">Username</label>
	  		<input type="text" class="form-control" name="username" placeholder="Input username">
	  	</div>
	  
	  	<div class="form-group">
	  		<label for="">Password</label>
	  		<input type="password" class="form-control" name="password" placeholder="Input password...">
	  	</div>
	  
	  
	  	<button type="submit" class="btn btn-primary">Login</button>
	  </form>
  </div>
</div>

<?php 
   include 'footer.php';
?>