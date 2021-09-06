<?php 
$show_course = $connect->build_query([
	"table" => "course",
	"select" => "`id_course`,`name_course`, `avatar`,`description_small`, `price`",
	"orderby" => "id_course",
	"desc" => "on"
])->select();

while ($row = mysqli_fetch_array($show_course)) {
	echo "<div class='col-md-4'>
	        <div class='blog-post blog-post-column m-b-20' style='height: 473px;'>
	            <div class='post-image'>
	            	<div class='img-responsive' style='width: 605px;height: 250px;background: url({$row['avatar']}) no-repeat center center;background-size: cover;'>
	                </div>
	                <span class='label label-danger'>GetIns</span>
	            </div>
	            <div class='p-20'>
	                <div class='post-title'>
	                    <h3><a href='javascript:void(0);'>{$row['name_course']}</a></h3>
	                </div>
	                <div class='m-b-20 m-t-20'>
	                    {$row['description_small']}
	                </div>
	                <div class='text-right'>
	                    <a href='/course.php?id={$row['id_course']}' class='btn btn-success btn-sm waves-effect waves-light'>Xem chi tiết <i class='mdi mdi-arrow-right m-l-5'></i></a>
	                    <a href='/admin/add-course.php?id={$row['id_course']}' class='btn btn-purple btn-sm waves-effect waves-light'>Chỉnh sửa <i class='fa fa-wrench'></i></a>
	                    <a href='/model/delete_course.php?id={$row['id_course']}' class='btn btn-danger btn-sm waves-effect waves-light'>Xóa <i class='fa fa-remove'></i></a>
	                </div>
	            </div>
	        </div>
	    </div>";
}
?>