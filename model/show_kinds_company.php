<?php 
include_once '../model/check_session.php';
function get_kinds_company_add() {
	$connect = new connection();
	$get_skill = $connect->build_query([
		"table" => "kinds_company",
		"select" => "*",
		"orderby" => "id_kinds_company"
	])->select();
	echo "<div class='col-xs-6'>";
	while ($row = mysqli_fetch_array($get_skill)) {
		echo "<div class='checkbox checkbox-primary m-b-15'>
		        <input id='checkbox-{$row['name_kinds']}' type='checkbox' name='list-kinds-company[]' value='{$row['name_kinds']}'>
		        <label for='checkbox-{$row['name_kinds']}'>
		            {$row['name_kinds']}
		        </label>
		    </div>";
	}
	echo "</div>";
}
function get_kinds_company_update($id) {
	$connect = new connection();
	$array = [];
	$array2 = [];
	$get_all_skill = $connect->build_query([
		"table" => "kinds_company",
		"select" => "*",
		"orderby" => "id_kinds_company"
	])->select();
	while ($row = mysqli_fetch_array($get_all_skill)) {
		$skill = $row['name_kinds'];
		$array[] = $skill;
	}
	$get_skill_teacher = $connect->build_query([
		"table" => "post_company",
		"select" => "name_kinds",
		"where" => "id_teacher = $id"
	])->select();
	while ($row = mysqli_fetch_array($get_skill_teacher)) {
		$skill = $row['name_kinds'];
		$array2[] = $skill;
	}
	echo "<div class='col-xs-6'>";
	foreach ($array as $value) {
		if (in_array($value,$array2)) {
			echo "<div class='checkbox checkbox-primary m-b-15'>
		        <input id='checkbox-{$value}' type='checkbox' name='list-kinds-company[]' value='$value' checked>
		        <label for='checkbox-{$value}'>
		            {$value}
		        </label>
		    </div>";
		} else {
			echo "<div class='checkbox checkbox-primary m-b-15'>
		        <input id='checkbox-{$value}' type='checkbox' name='list-kinds-company[]' value='$value'>
		        <label for='checkbox-{$value}'>
		            {$value}
		        </label>
		    </div>";
		}
	}
	echo "</div>";
}
?>