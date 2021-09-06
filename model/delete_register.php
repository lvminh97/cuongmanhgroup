<?php 
	include_once 'check_session.php';
	$id_register_course = $_GET['id'];
	$table = "register";
	if (isset($_GET['kinds'])) {
		$table = $_GET['kinds'];
	}
	$connect->build_query([
		"table" => "$table",
		"where" => "id_register_course = '{$id_register_course}'"
	])->delete();
	if (isset($_GET['kinds'])) {
		header('location: ../admin/dashboard-user.php');
		die();
	}
	header('location: ../admin/index.php');
?>