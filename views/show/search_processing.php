<?php
$limit = 18;
$check = $connect->build_query([
    "select" => "count(*) as total",
    "table" => "post",
    "where" => "name_post like '%{$question}%'"
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

$get_infor = $connect->build_query([
    "table" => "post",
    "select" => "*",
    "orderby" => "id_post",
    "where" => "name_post like '%{$question}%'",
    "limit" => "{$start}, {$limit}",
    "desc" => "on"
])->select();
while ($row = mysqli_fetch_array($get_infor)) {
	echo "<div class='col-md-4'>
    <div class='blog-post blog-post-column m-b-20' style='border-radius: 6px'>
        <div class='post-image'>
            <div class='property-image' style='background: url({$row['avatar']}) center center / cover no-repeat;width: 100%; height: 175px;border-top-left-radius: 6px;border-top-right-radius: 6px;'>
            </div>
            <span class='label label-danger'>Get Ins</span>
        </div>
        <div class='p-20' style='padding: 1px 8px !important;height: 78px;'>
            <div class='post-title'>";
            if (strlen($row['name_post']) < 65) {
                echo "<h5><a href='/bai-viet-".utf8tourl($row['name_post'])."-{$row['id_post']}.html'>{$row['name_post']}</a></h5>";
            } else {
                echo "<h5><a href='/bai-viet-".utf8tourl($row['name_post'])."-{$row['id_post']}.html'>".$row['name_post']."</a></h5>";
            } 
            echo "</div>
        </div>
    </div>
</div>";
}
echo "
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
    </div>";
?>