<?php 
	$message['is_ok'] = false;
	if(isset($_FILES))
	{
		if(!$_FILES['file']['error'])
		{
			if(preg_match("/image/", $_FILES['file']['type']))
			{
				$t=time();
				$name = md5(rand(0, 200).$t);
				$ext = explode('.', $_FILES['file']['name']);
				$filename = $name . '.' . $ext[1];
				$destination = '../views/assets/img/post/' . $filename;
				$location = $_FILES["file"]["tmp_name"];
				move_uploaded_file($location, $destination);
				$message['url'] = 'views/assets/img/post/' . $filename;
				$message['is_ok'] = true;
			}
			else
			{
				$message['error'] = 'Bạn chỉ được up file ảnh thui nha :<';
			}
		}
		else
		{
			$message['error'] = "Hình ảnh không được tải lên chính xác, lỗi (".$_FILES['file']['error'].")";
		}	
	}
	else
	{
		$message['error'] = "Không có tập tin nào được gửi đi";
	}
	echo json_encode($message);
?>