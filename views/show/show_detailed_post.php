<?php
	if (isset($_GET['id'])) {
        $id_post = strip_tags($_GET['id']);
	    $get_infor = $connect->build_query([
	        "table" => "post",
	        "select" => "*",
	        "where" => "id_post = '{$id_post}'"
	    ])->select();
	    while ($row = mysqli_fetch_array($get_infor)) {
	    	$id_post = $row['id_post'];
	    	$name_post = $row['name_post'];
			$description = $row['description'];
			$description_n = $row['description_n'];
			$date = $row['date'];
			$avatar = $row['avatar'];
			$price = $row['price'];
	    }
	    $so_sanh_db = utf8tourl($name_post);
	    $tieu_de_khoa_hoc = $_GET['title'];
	    if ($tieu_de_khoa_hoc != $so_sanh_db) {
	        header('location: /index.php');
	    }
    } else {
        header('location: /index.php');
    }
?>