<?php 
	include_once '../controller/database.php';
	$list_post = $_POST['list-post'];
	$connect->build_query([
		"table" => "post_top"
	])->delete();
	foreach ($list_post as $value) {
		$connect->build_query([
			"table" => "post_top",
			"ten_cot" => "`id_post`",
			"gia_tri_cot" => "'{$value}'"
		])->insert();
	}
	header('location: ../admin/dashboard-top.php');
?>