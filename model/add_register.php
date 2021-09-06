<?php 
	include_once '../controller/database.php';
	$name = mysqli_real_escape_string($connect->connect(),$_POST['name']);
	$email = mysqli_real_escape_string($connect->connect(),$_POST['email']);
	$phone_number = mysqli_real_escape_string($connect->connect(),$_POST['phone-number']);
	if (@$_POST['product']) {
		$list_course = mysqli_real_escape_string($connect->connect(),$_POST['product']);
	} else {
		$list_course = '';
	}
	if (@$_POST['message']) {
		$message = mysqli_real_escape_string($connect->connect(),$_POST['message']);
	} else {
		$message = "";
	}
	// cập nhật thông tin đăng ký học thử
	$connect->build_query([
		"table" => "register",
		"ten_cot" => "`name`, `email`, `phone_number`, `course`,`message`",
		"gia_tri_cot" => "'$name','$email','$phone_number','$list_course','$message'"
	])->insert();
	header('location: ../thanks.php');
?>