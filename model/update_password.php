<?php
	include_once 'check_session.php';
    $old_password = $_POST['old-password'];
    $password = $_POST['password'];
    $re_password = $_POST['repassword'];
	$get_infor = $connect->build_query([
        "table" => "admin",
        "select" => "*",
        "where" => "`username` = '{$_SESSION['username']}'"
    ])->select();
    while ($row = mysqli_fetch_array($get_infor)) {
    	$db_password = $row['password'];
    }
    if (!(($password == $re_password) && password_verify($old_password, $db_password))) {
        header('location: ../admin/update-password.php');
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    $connect->build_query([
        "table" => "admin",
        "set" => "`password` = '{$password}'",
        "where" => "`username` = '{$_SESSION['username']}'"
    ])->update();
	header('location: ../admin/index.php');
?>