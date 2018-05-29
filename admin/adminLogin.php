<?php 
include '../config.php';

if (isset($_POST['username']) && $_POST['password']) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$check_sql = "Select * From users where username = '$username' AND password = '$password' AND role_id = 1 LIMIT 1";
	
	$check_res = mysqli_query($conn,$check_sql);
	if ($check_res && mysqli_num_rows($check_res) > 0) {
		$_SESSION['admin'] = mysqli_fetch_assoc($check_res);
		header('location: index.php');
	}else{
		echo "Thông tin đăng nhập không hợp lệ";
		header("location:javascript://history.go(-1)");
	}
} else{
		
	if (!isset($_SESSION['admin'])) {
		header('location:login.php');	
	}
}
 ?>



