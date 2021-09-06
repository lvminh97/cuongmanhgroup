<?php 
	$get_skill_teacher = $connect->build_query([
		"table" => "skill_teacher",
		"select" => "name_skill",
		"where" => "id_teacher = $id_teacher"
	])->select();
	while ($row = mysqli_fetch_array($get_skill_teacher)) {
		echo "<button class='btn btn-custom btn-bordered waves-effect w-md waves-light m-b-10 m-l-10' data-animation='fadein'>
		<i class='fa fa-keyboard-o' style='margin-right: 4px;'></i> 
		{$row['name_skill']}
		</button>";
	}
?>