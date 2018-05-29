<?php
include 'config.php';
include 'header.php';


?>


<div class="container pt-50">
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-success">
			<div class="panel-heading">
				Create question
			</div>
			<div class="panel-body">
				<form action="create_question.php" method="POST" name="login">
					<div class="form-group">
						<label>Question</label>
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