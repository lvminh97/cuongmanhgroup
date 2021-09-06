<?php 
include_once '../model/check_session.php';
function get_so_luong($cot) {
	$connect = new connection();
	$get_so_luong = $connect->build_query([
		"table" => "skill",
		"select" => "count(*) as so_luong"
	])->select();
	while ($row = mysqli_fetch_array($get_so_luong)) {
            $so_luong = $row['so_luong'];
	}
	// tính số lượng 2 cột
	$sl_cot_1 = floor($so_luong/2);
	$sl_cot_2 = $so_luong - $sl_cot_1;
	// Nếu = 1 thì là cột 1
	// Nếu = 2 thì là cột 2
	if ($cot == 1) {
		return $cot_1 = "0, $sl_cot_1";
	} else {
		return $cot_2 = "$sl_cot_1, $sl_cot_2";
	}
}
function get_skill($limit) {
	$connect = new connection();
	$get_skill = $connect->build_query([
		"table" => "skill",
		"select" => "name_skill,id_skill",
		"orderby" => "id_skill",
		"limit" => "$limit"
	])->select();
	echo "<div class='col-xs-6'>";
	while ($row = mysqli_fetch_array($get_skill)) {
		echo "<div class='checkbox checkbox-primary m-b-15'>
		        <input id='checkbox-{$row['name_skill']}' type='checkbox' name='list-skill[]' value='{$row['name_skill']}'>
		        <label for='checkbox-{$row['name_skill']}'>
		            {$row['name_skill']}
		        </label>
		    </div>";
	}
	echo "</div>";
}
function get_skill_teacher($limit,$id) {
	$connect = new connection();
	$array = [];
	$array2 = [];
	$get_all_skill = $connect->build_query([
		"table" => "skill",
		"select" => "name_skill",
		"orderby" => "id_skill",
		"limit" => "$limit"
	])->select();
	while ($row = mysqli_fetch_array($get_all_skill)) {
		$skill = $row['name_skill'];
		$array[] = $skill;
	}
	$get_skill_teacher = $connect->build_query([
		"table" => "skill_teacher",
		"select" => "name_skill",
		"where" => "id_teacher = $id"
	])->select();
	while ($row = mysqli_fetch_array($get_skill_teacher)) {
		$skill = $row['name_skill'];
		$array2[] = $skill;
	}
	echo "<div class='col-xs-6'>";
	foreach ($array as $value) {
		if (in_array($value,$array2)) {
			echo "<div class='checkbox checkbox-primary m-b-15'>
		        <input id='checkbox-{$value}' type='checkbox' name='list-skill[]' value='$value' checked>
		        <label for='checkbox-{$value}'>
		            {$value}
		        </label>
		    </div>";
		} else {
			echo "<div class='checkbox checkbox-primary m-b-15'>
		        <input id='checkbox-{$value}' type='checkbox' name='list-skill[]' value='$value'>
		        <label for='checkbox-{$value}'>
		            {$value}
		        </label>
		    </div>";
		}
	}
	echo "</div>";
}
?>