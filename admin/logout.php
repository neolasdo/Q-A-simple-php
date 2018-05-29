<?php 
session_start();

if (isset($_SESSION['admin'])) {
	unset($_SESSION['admin']);

	header('location: login.php');
}

if (isset($_COOKIE['user_id'])) {
	setcookie("user_id", "", time() - 3600, "/");
}
?>