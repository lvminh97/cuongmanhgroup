<?php
$limit = 18;
$check = $connect->build_query([
    "select" => "count(*) as total",
    "table" => "post",
    "where" => "`category` = 2"
])->select();
$stt = mysqli_fetch_array($check);
//TỔNG SỐ người dùng
$total = $stt['total'];
// BƯỚC 3: TÌM LIMIT VÀ STT_PAGE
$stt_page = '';
if(isset($_GET['page'])) {
    $stt_page = $_GET['page'];
    $stt_page = (int)$stt_page;
} else {
    $_GET['page'] = 1;
}
// TỔNG SỐ PAGE
$total_page = ceil($total / $limit);
// Giới hạn total trong khoảng 1 đến total_page
if ($stt_page > $total_page){
    $stt_page = $total_page;
}
elseif ($stt_page < 1){
    $stt_page = 1;
}
// Tìm Start
$start = ($stt_page - 1) * $limit;

$show_post = $connect->build_query([
	"table" => "post",
	"select" => "`id_post`,`name_post`, `avatar`,`description`",
	"orderby" => "id_post",
	"limit" => "{$start}, {$limit}",
	"desc" => "on",
    "where" => "`category` = 2"
])->select();

while ($row = mysqli_fetch_array($show_post)) {
	echo "<div class='col-md-4'>
	        <div class='blog-post blog-post-column m-b-20' style='height:485px;'>
	            <div class='post-image'>
	            	<div class='img-responsive' style='width: 605px;height: 340px;background: url(../{$row['avatar']}) no-repeat center center;background-size: cover;'>
	                </div>
	                <span class='label label-danger'>GetIns</span>
	            </div>
	            <div class='p-20'>
	                <div class='post-title'>
	                    <h3><a href='javascript:void(0);'>{$row['name_post']}</a></h3>
	                </div>
	                <div class='text-right'>
	                    <a href='../admin/add-product.php?id={$row['id_post']}' class='btn btn-purple btn-sm waves-effect waves-light'>Chỉnh sửa <i class='fa fa-wrench'></i></a>
	                    <a href='../model/delete_post.php?id={$row['id_post']}' class='btn btn-danger btn-sm waves-effect waves-light'>Xóa <i class='fa fa-remove'></i></a>
	                </div>
	            </div>
	        </div>
	    </div>";
}
echo "
    <div class='row'>
        <div class='col-md-8 margin-auto'>
            <div class='btn-group m-b-10'>";
        // nếu stt_page > 1 và total_page > 1 mới hiển thị nút «
        if ($stt_page > 1 && $total_page > 1){
            echo "<a href='?page=".($stt_page-1)."'>
                <button type='button' class='btn btn-default waves-effect'>
                    <i class='fa fa-angle-double-left'></i>
                </button>
            </a>";
        }
        // Lặp khoảng giữa
        for ($i = 1; $i <= $total_page; $i++){
            // Nếu là trang hiện tại thì hiển thị class="page-item active"
            // ngược lại hiển thị  class="page-item"
            if ($i == $stt_page){
                echo "<a>
                    <button type='button' class='btn btn-danger waves-effect waves-light'>
                        {$i}
                    </button>
                </a>";
            }
            else {
                echo "<a href='?page={$i}'>
                    <button type='button' class='btn btn-default waves-effect'>
                        {$i}
                    </button>
                </a>";
            }
        }
        // nếu stt_page < $total_page và total_page > 1 mới hiển thị nút »
        if ($stt_page < $total_page ){
            echo "<a href='?page=".($stt_page+1)."'>
                <button type='button' class='btn btn-default waves-effect'>
                    <i class='fa fa-angle-double-right'></i>
                </button>
            </a>";
        }
               // <button type='button' class='btn btn-inverse waves-effect waves-light'>3</button>
               // <button type='button' class='btn btn-default waves-effect'>4</button>
        echo "</div>
        </div>
    </div>";
?>