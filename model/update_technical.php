<?php
	include_once 'check_session.php';
	include 'edit_title.php';
	$name_post = $_POST['name-post'];
    $name_post = mysqli_escape_string($connect->connect(), $name_post);
    $description = $_POST['description'];
    $description = str_replace('"../views/assets/img/','"views/assets/img/',$description);
    $description = mysqli_escape_string($connect->connect(), $description);
    $description_n = $_POST['description-n'];
    $description_n = mysqli_escape_string($connect->connect(), $description_n);
	$id_post = $_POST['id_post'];
	$link_avt = $_POST['avatar'];
	// xử lý up ảnh
	if ($_FILES['avatar']['error'] == 0) {
		if ($_FILES['avatar']['type'] == 'image/jpeg' || $_FILES['avatar']['type'] == 'image/png' || $_FILES['avatar']['type'] == 'image/jpg') {
	        $file_name = date('YmdHis', time());
	        $source_file = $_FILES['avatar']['tmp_name'];

	        // edit file name
	        $filePath = $_FILES['avatar']['name'];
	        $pathinfo = pathinfo($source_file, PATHINFO_EXTENSION);

	        // path file on server
	        $dest_file = "../views/assets/img/post/".$file_name.'.png';
	        $link_cv1 = "views/assets/img/post/".$file_name.'.png';

	        // check if file name already exitsts
	        if (file_exists($dest_file)) {
	            print "The file name already exists!!";
	        } else {
	            move_uploaded_file($source_file, $dest_file) or die ("Error!!");
	            if($_FILES['avatar']['error'] == 0) {
	                $link_avt = $link_cv1;
	            }
	        }
	    } else {
	        $link_avt = "";
	    }
	}
	// cập nhật thông tin giảng viên
	$connect->build_query([
		"table" => "post",
		"set" => "`name_post` = '$name_post', `description` = '$description',`description_n` = '$description_n', `avatar` = '$link_avt'",
		"where" => "id_post = '$id_post'"
	])->update();

	header('location: ../admin/dashboard-technical.php');
?>