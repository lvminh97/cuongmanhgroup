<?php
include_once '../controller/database.php';
include_once '../model/edit_title.php';
$id = $_GET['id'];
$check_rows = $connect->build_query([
    "table" => "course",
    "select" => "*",
    "where" => "id_course = $id"
])->num_rows();
if ($check_rows == 0) {
	echo "Đang xây dựng";
} else {
	$get_information = $connect->build_query([
	    "table" => "course",
	    "select" => "*",
	    "where" => "id_course = $id"
	])->select();
	while ($row = mysqli_fetch_array($get_information)) {
        echo "<h1 style='font-size: 18px;'>{$row['name_course']}</h1>
			<img src='{$row['avatar']}' style='width: 100%;margin-bottom: 15px;'>
			<p>{$row['description_small']}...</p>
			<a href='/khoa-hoc-".utf8tourl($row['name_course'])."-{$row['id_course']}.html' class='btn btn-danger'>Xem thêm</a>
			";
	}
}
?>