<?php 
include 'config.php';
include 'header.php';

if (!isset($_SESSION['cus_login'])) {
	header('location:dang_nhap.php');
}
$user = $_SESSION['cus_login'];
$id = $user['id'];
$get_sql = "Select questions.content as qc, answers.content as ac From questions left join answers on questions.id = answers.question_id where questions.user_id = '$id'";
	
$questions = mysqli_query($conn,$get_sql);

?>

<div class="container text-right">
	<a href="logout.php">Logout</a>
</div>

<div class="container pt-50">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3>Question List</h3>
					<a href="createQuestion.php" type="button" class="btn btn-info">Create</a>
				</div>
				<div class="panel-body">
					<?php while($row = $questions->fetch_array()):?>
						<h3>Question: <?php echo($row['qc'])?></h3>
						<h3>Answer: <?php echo($row['ac'])?></h3>
					<?php endwhile;?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
   include 'footer.php';
?>