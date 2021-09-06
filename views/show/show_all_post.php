<?php
$limit = 8;
$check = $connect->build_query([
    "select" => "count(*) as total",
    "table" => "post",
    "where" => "`category` = 0"
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
    "limit" => "{$start}, {$limit}",
    "desc" => "on",
    "where" => "`category` = 0"
])->select();
echo '<div class="row">';
while ($row = mysqli_fetch_array($get_infor)) {
    echo '
        <div class="content col-sm-12 col-md-6" style="margin-bottom: 50px;">
            <article class="post-wrap" data-animation="fadeInUp" data-animation-delay="100">
                <div class="post-media" style="background: url('.$row['avatar'].') center center / cover;height: 272px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);"></div>
                <div class="post-header">
                    <h2 class="post-title"><a href="bai-viet-'.utf8tourl($row['name_post']).'-'.$row['id_post'].'.html">'.$row['name_post'].'</a></h2>
                    <div class="post-meta">
                        <span class="post-date">
                            Đăng ngày '.$row['date'].'
                        </span>
                    </div>
                </div>
                <div class="post-body">
                    <div class="post-excerpt">
                        <p>'.$row['description_n'].'</p>
                    </div>
                </div>
                <div class="post-footer">
                    <span class="post-readmore">
                        <a href="bai-viet-'.utf8tourl($row['name_post']).'-'.$row['id_post'].'.html" class="btn btn-theme btn-theme-transparent">Đọc tiếp</a>
                    </span>
                </div>
            </article>
        </div>';
}
echo "</div>";
echo "
    <div class='pagination-wrapper'>
        <ul class='pagination'>";
        // nếu stt_page > 1 và total_page > 1 mới hiển thị nút «
        if ($stt_page > 1 && $total_page > 1){
            echo '<li><a href="?page='.($stt_page-1).'">«</a></li>';
        }
        // Lặp khoảng giữa
        for ($i = 1; $i <= $total_page; $i++){
            // Nếu là trang hiện tại thì hiển thị class="page-item active"
            // ngược lại hiển thị  class="page-item"
            if ($i == $stt_page){
                echo "<li class='active'><a style='background-color: #dd133c;' href='#'>".$i."</a></li> ";
            }
            else {
                echo "<li><a href='?page=".$i."'>".$i."</a></li> ";
            }
        }
        // nếu stt_page < $total_page và total_page > 1 mới hiển thị nút »
        if ($stt_page < $total_page ){
            echo '<li><a href="?page='.($stt_page+1).'">«</a></li>';
        }
               // <button type='button' class='btn btn-inverse waves-effect waves-light'>3</button>
               // <button type='button' class='btn btn-default waves-effect'>4</button>
        echo "
        </ul>
    </div>";
?>