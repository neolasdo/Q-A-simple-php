<?php 
include 'config.php';
include 'header.php';

?>

<div class="container pt-50">
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<form action="login.php" method="POST" name="login">
			<div class="form-group">
				<label>User</label>
				<input type="text" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label>PassWord</label>
				<input type="password" class="form-control" name="password">
			</div>
			<div class="form-group text-center">
				<button type="submit" class="btn btn-success">Submit</button>
			</div>	
			<div class="text-center">
				<a href="register.php">Register</a>
			</div>
		</form>
	</div>
</div>
 
</div>

<?php 
   include 'footer.php';
?>