<?php
$get_infor = $connect->build_query([
    "table" => "post",
    "select" => "*",
    "join" => "`post_company` ON `post_company`.`id_teacher` = `post`.`id_post` JOIN `company` ON  `post_company`.`name_skill` = `company`.`name_skill`",
    "orderby" => "id_post",
    "desc" => "on",
    "where" => "`post_company`.`name_kinds` = '".$kind_name."'"
])->select();
echo '<div class="row">';
while ($row = mysqli_fetch_array($get_infor)) {
    echo '
        <div class="content col-sm-12 col-md-6" style="margin-bottom: 50px;">
            <article class="post-wrap" data-animation="fadeInUp" data-animation-delay="100">
                <div class="post-media" style="background: url('.$row['avatar'].') center center / cover;height: 272px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);"></div>
                <div class="post-header">
                    <h2 class="post-title"><a href="san-pham-'.utf8tourl($row['name_post']).'-'.$row['id_post'].$id.'.html">'.$row['name_post'].'</a></h2>
                    <div class="post-meta">
                        <span class="post-date">
                            Giá: '.$row['price'].'
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
                        <a href="san-pham-'.utf8tourl($row['name_post']).'-'.$row['id_post'].$id.'.html" class="btn btn-theme btn-theme-transparent">Đọc tiếp</a>
                    </span>
                </div>
            </article>
        </div>';
}
echo "</div>";