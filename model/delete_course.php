<?php 
	include_once 'check_session.php';
	$id_course = $_GET['id'];
	$connect->build_query([
		"table" => "course",
		"where" => "id_course = '{$id_course}'"
	])->delete();
	header('location: ../admin/dashbroad-course.php');
?>