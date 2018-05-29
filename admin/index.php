<?php 
include '../config.php';
include 'header.php';


if (!isset($_SESSION['admin'])) {
	header('location:login.php');
}

$get_sql = "Select questions.id as id, questions.content as content, users.full_name as full_name From questions inner join users on questions.user_id = users.id";
	
$questions = mysqli_query($conn,$get_sql);

?>
<div class="container text-right">
	<a href="logout.php">Logout</a>
</div>
<div class="container  pt-50">
   <div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3>Question List</h3>
				</div>
				<div class="panel-body">
					<?php while($row = $questions->fetch_array()):?>
						<h3>Question: <?php echo($row['content'])?> <span class="pull-right">By: <?php echo($row['full_name'])?></span></h3>
						<form action="create_answer.php" method="POST">
							<div class="form-group">
								<label>Answer</label>
								<textarea class="form-control" name="content"></textarea>
							</div>
							<div class="form-group">
								<input type="hidden" class="form-control" value="<?php echo($row['id'])?>" name="question_id"></input>
							</div>
						
							<div class="form-group text-center">
								<button type="submit" class="btn btn-success">Submit</button>
							</div>	
					
						</form>
					<?php endwhile;?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
   include 'footer.php';
?>