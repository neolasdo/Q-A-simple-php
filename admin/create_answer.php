<?php 
include '../config.php';

if (isset($_POST)) {
	$content = $_POST['content'];
	$question_id = $_POST['question_id'];
	$user_id = $_SESSION['admin']['id'];
	$sql = "Insert Into answers(content ,user_id, question_id) Values ('$content','$user_id', '$question_id')";
	
	$query = mysqli_query($conn,$sql);
	if ($query) {
		header('location: index.php');
	}
} else{

}

 ?>



