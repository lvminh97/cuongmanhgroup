<?php 
$get_infor = $connect->build_query([
    "table" => "course",
    "select" => "id_course, name_course"
])->select();
while ($row = mysqli_fetch_array($get_infor)) {
	echo "<div class='checkbox checkbox-primary m-b-15'>
            <input id='checkbox-{$row['id_course']}' type='checkbox' name='list-course[]' value='{$row['name_course']}'>
            <label for='checkbox-{$row['id_course']}'>
                {$row['name_course']}
            </label>
        </div>";
}
?>