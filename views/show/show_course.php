<?php 
$get_infor = $connect->build_query([
    "table" => "course",
    "select" => "*",
    "where" => "`id_course` in (SELECT `id_course` FROM `course_top`)",
    "limit" => "0, 6"
])->select();
while ($row = mysqli_fetch_array($get_infor)) {
	echo "<div class='col-md-4'>
    <div class='blog-post blog-post-column m-b-20' style='border-radius: 6px'>
        <div class='post-image'>
            <img src='{$row['avatar']}' class='img-responsive' style='max-width: -webkit-fill-available;border-top-left-radius: 6px;border-top-right-radius: 6px;'>
            <span class='label label-danger'>Get Ins</span>
        </div>
        <div class='p-20' style='padding: 1px 8px !important;height: 78px;'>
            <div class='post-title text-center'>";
            if (strlen($row['name_course']) < 65) {
                echo "<h4><a href='/khoa-hoc-".utf8tourl($row['name_course'])."-{$row['id_course']}.html'>{$row['name_course']}</a></h4>";
            } else {
                echo "<h4><a href='/khoa-hoc-".utf8tourl($row['name_course'])."-{$row['id_course']}.html'>".$row['name_course']."</a></h4>";
            } 
            echo "</div>
        </div>
    </div>
</div>";
}
?>