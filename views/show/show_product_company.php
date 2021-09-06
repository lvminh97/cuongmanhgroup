<?php
function company($company = 1) {
    global $connect;
    $id = $company;
    $active1 = $active2 = $active3 = $active4 = '';
    if ($id == 1) {
        $company = 'Medicom';
    } else if ($id == 2) {
        $company = 'Cường Minh';
    } else if ($id == 3) {
        $company = 'Vạn Hoa';
    } else if ($id == 4) {
        $company = 'Minh Quang';
    } else {
        header('location: index.php');
    }

    $limit = 5;
    $get_infor = $connect->build_query([
        "table" => "post",
        "select" => "*",
        "join" => "`post_company` ON `post_company`.`id_teacher` = `post`.`id_post` JOIN `company` ON  `post_company`.`name_skill` = `company`.`name_skill`",
        "orderby" => "id_post",
        "limit" => $limit,
        "desc" => "on",
        "where" => "`company`.`name_skill` = '".$company."'"
    ])->select();
    while ($row = mysqli_fetch_array($get_infor)) {
        echo '<article class="post-wrap">
                <div class="media" style="padding-right: 10px;">
                    <div class="post-media pull-left" style="height: auto;">
                        <img src="'.$row['avatar'].'" class="media-object" />
                    </div>
                    <div class="media-body">
                        <div class="post-header">
                            <h2 class="post-title">
                                <a href="bai-viet-'.utf8tourl($row['name_post']).'-'.$row['id_post'].'.html">
                                    '.$row['name_post'].'
                                </a>
                            </h2>
                        </div>
                        <div class="post-body" style="height: 70px;">
                            <div class="post-excerpt">
                                '.$row['description_n'].'
                            </div>
                        </div>
                    </div>
                </div>
            </article>';
    }
}
?>