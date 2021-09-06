<?php
$get_infor = $connect->build_query([
    "table" => "post",
    "select" => "id_post, name_post",
    "where" => "`category` = 0",
    "orderby" => "id_post",
    "desc" => "on"
])->select();
$get_course_top = $connect->build_query([
    "table" => "post_top",
    "select" => "id_post"
])->select();
$mang = [];
while ($row = mysqli_fetch_array($get_course_top)) {
	$mang[] = $row['id_post'];
}
while ($row = mysqli_fetch_array($get_infor)) {
	echo "<div class='checkbox checkbox-primary m-b-15'>";
		if (in_array($row['id_post'], $mang)) {
			echo "<input id='checkbox-{$row['id_post']}' type='checkbox' name='list-post[]' value='{$row['id_post']}' checked>";
		} else {
			echo "<input id='checkbox-{$row['id_post']}' type='checkbox' name='list-post[]' value='{$row['id_post']}'>";
		}
    echo "<label for='checkbox-{$row['id_post']}'>
                {$row['name_post']}
            </label>
        </div>";
}
?>