<?php 
session_start();

if (isset($_SESSION['cus_login'])) {
	unset($_SESSION['cus_login']);
}

header('location:index.php');
?>