<?php 
include 'config.php';

if (isset($_POST)) {
	$content = $_POST['content'];
	$user_id = $_SESSION['cus_login']['id'];
	$sql = "Insert Into questions(content,user_id) Values('$content','$user_id')";
	$query = mysqli_query($conn,$sql);
	if ($query) {
		header('location: index.php');
	}
} else{
	
}

 ?>



