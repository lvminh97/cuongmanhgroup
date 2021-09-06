<?php
$get_infor = $connect->build_query([
    "table" => "post",
    "select" => "*",
    "where" => "`id_post` in (SELECT `id_post` FROM `post_top`)",
    "limit" => "3"
])->select();
while ($row = mysqli_fetch_array($get_infor)) {
    echo "<div class='col-md-4'>
            <article class='post-wrap' data-animation='fadeInUp' data-animation-delay='100'>
                <div class='post-media'>
                    <img src='".$row['avatar']."' height='240' style='width: 100% !important; height: 240px !important;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);border-radius: 10px;' alt='' />
                </div>
                <div class='post-header'>
                    <h2 class='post-title'><a href='bai-viet-".utf8tourl($row['name_post'])."-".$row['id_post'].".html'>".$row['name_post']."</a></h2>
                    <div class='post-meta'>
                        <span class='post-date'>
                            Đăng ngày ".$row['date']."
                    </div>
                </div>
                <div class='post-body'>
                    <div class='post-excerpt'>
                        <p>".$row['description_n']."</p>
                    </div>
                </div>
                <div class='post-footer'>
                    <span class='post-readmore'>
                        <a href='bai-viet-".utf8tourl($row['name_post'])."-".$row['id_post'].".html' class='btn btn-theme btn-theme-transparent'>Đọc tiếp</a>
                    </span>
                </div>
            </article>
        </div>";
}
?>