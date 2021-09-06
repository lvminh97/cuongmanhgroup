<?php 
	include_once 'check_session.php';
	$name = $_POST['name'];
	$name_user = $_POST['name-user'];
	$pass_user = $_POST['pass-user'];
	$pass_user = password_hash($pass_user, PASSWORD_DEFAULT);
	// cập nhật thông tin khóa học
	$connect->build_query([
		"table" => "admin",
		"ten_cot" => "`name`,`username`,`password`,`service`",
		"gia_tri_cot" => "'$name','$name_user','$pass_user','2'"
	])->insert();
	header('location: ../admin/dashboard-user.php');
?>