<?php
	if ($_GET['id']) {
        $id_course = strip_tags($_GET["id"]);
	    $get_infor = $connect->build_query([
	        "table" => "course",
	        "select" => "*",
	        "where" => "id_course = '{$id_course}'"
	    ])->select();
	    while ($row = mysqli_fetch_array($get_infor)) {
	    	$name_course = $row['name_course'];
			$description = $row['description'];
			$description_n = $row['description_small'];
			$price = $row['price'];
			$avatar = $row['avatar'];
	    }
	    $so_sanh_db = utf8tourl($name_course);
	    $tieu_de_khoa_hoc = $_GET["title"];
	    $so_sanh = utf8tourl($tieu_de_khoa_hoc);
	    if ($so_sanh != $so_sanh_db) {
	        header('location: /index.php');
	    }
    } else {
        header('location: /index.php');
    }
?>