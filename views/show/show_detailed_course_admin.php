<?php
	if (isset($_GET['id'])) {
		$kiem_tra = 1;
        $id_course = $_GET['id'];
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
			$id_course = $row['id_course'];
	    }
	} else {
		$kiem_tra = 0;
    	$name_course = "";
		$description = "";
		$description_n = "";
		$price = "";
		$avatar = "";
    }
?>