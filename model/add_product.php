<?php 
	include_once 'check_session.php';
	include 'edit_title.php';
	$name_post = $_POST['name-post'];
    $name_post = mysqli_escape_string($connect->connect(), $name_post);
    $price = $_POST['price'];
    $price = mysqli_escape_string($connect->connect(), $price);
    $description = $_POST['description'];
    $description = str_replace('"../views/assets/img/','"views/assets/img/',$description);
    $description = mysqli_escape_string($connect->connect(), $description);
    $description_n = $_POST['description-n'];
    $description_n = mysqli_escape_string($connect->connect(), $description_n);
    $date = date('m/d/Y');
    $list_company = $_POST['list-company'];
    $list_kinds_company = $_POST['list-kinds-company'];

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

	// cập nhật thông tin khóa học
	$connect->build_query([
		"table" => "post",
		"ten_cot" => "`name_post`, `avatar`, `date`, `description`,`description_n`,`category`,`price`",
		"gia_tri_cot" => "'{$name_post}','{$link_avt}','{$date}','{$description}','{$description_n}','2','$price'"
	])->insert();

    // lấy id sản phẩm
    $get_id_post = $connect->build_query([
        "table" => "post",
        "select" => "`id_post`",
        "where" => "`name_post` = '$name_post' AND `category` = '2' AND `date` = '{$date}' AND `description_n`='{$description_n}'"
    ])->select();
    while ($row = mysqli_fetch_array($get_id_post)) {
        $id_post = $row['id_post'];
    }
    // insert skill của giảng viên
    foreach ($list_company as $value) {
        $connect->build_query([
            "table" => "post_company",
            "ten_cot" => "`id_teacher`,`name_skill`,`name_kinds`",
            "gia_tri_cot" => "'{$id_post}','{$value}','{$list_kinds_company[0]}'"
        ])->insert();
    }
	header('location: ../admin/dashboard-product.php');
?>