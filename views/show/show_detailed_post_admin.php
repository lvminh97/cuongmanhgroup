<?php
	if (isset($_GET['id'])) {
		$kiem_tra = 1;
        $id_post = $_GET['id'];
	    $get_infor = $connect->build_query([
	        "table" => "post",
	        "select" => "*",
	        "where" => "id_post = '{$id_post}'"
	    ])->select();
	    while ($row = mysqli_fetch_array($get_infor)) {
	    	$name_post = $row['name_post'];
			$description = $row['description'];
			$description = str_replace('"views/assets/img/','"../views/assets/img/',$description);
			$description_n = $row['description_n'];
			$avatar = $row['avatar'];
			$id_post = $row['id_post'];
			$price = $row['price'];
	    }
	    $kiem_tra = 1;
	} else {
		$kiem_tra = 0;
    	$name_post = "";
    	$description_n = "";
		$description = "";
		$avatar = "";
		$price = "Liên hệ với chúng tôi";
    }
?>