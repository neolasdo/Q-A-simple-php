<?php
include '../config.php';
include 'header.php';

?>


<div class="container pt-50">
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-success">
			<div class="panel-heading">
				Create Answer
			</div>
			<div class="panel-body">
				<form action="create_answer.php" method="POST">
					<div class="form-group">
						<label>Answer</label>
						<textarea class="form-control" name="content"></textarea>
					</div>
				
					<div class="form-group text-center">
						<button type="submit" class="btn btn-success">Submit</button>
					</div>	
			
				</form>
			</div>
		</div>
	</div>
</div>
 
</div>