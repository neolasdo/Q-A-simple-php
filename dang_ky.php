<?php 
include 'config.php';

if (isset($_POST)) {
	$full_name = $_POST['full_name'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	// Kiểm tra sự tồn tại của tài khoản qua email
	$check_sql = "Select * From users where username = '$username' LIMIT 1";

	$check_res = mysqli_query($conn,$check_sql);

	// nếu tồn tại dữ liệu thoe email thì tiến hành cập nhạ dữ liệu cho khách hàng
	if ($check_res && mysqli_num_rows($check_res) > 0) {

		$sql_update = "Update users set full_name = '$full_name', password = '$password' where username = '$username'";
		$update_res = mysqli_query($conn,$sql_update);
		$_SESSION['cus_login'] = mysqli_fetch_assoc($check_res);
		header('location: index.php');
	}else{
		$sql = "Insert Into users(full_name,username,password, role_id) Values('$full_name','$username','$password', '2')";
		$res = mysqli_query($conn,$sql);

		if($res){
			$_SESSION['cus_login'] = [
				'id' => mysqli_insert_id($conn), // lấy id vửa insert
				'full_name' => $full_name,
				'username' => $username,
				'password' => $password
			];

			header('location: index.php');
		}
	}

	
}
 ?>