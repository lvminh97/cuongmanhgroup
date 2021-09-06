<?php 
include_once '../model/check_session.php';
function get_kind_add() {
	$variable = ['Hoạt động y tế', 'Hoạt động tập đoàn'];
	echo "<div class='col-xs-6'>";
	foreach ($variable as $key => $value) {
		echo "<div class='checkbox checkbox-primary m-b-15'>
		        <input id='checkbox-".$key."' type='checkbox' name='list-company[]' value='".$value."'>
		        <label for='checkbox-".$key."'>
		            ".$value."
		        </label>
		    </div>";
	}
	echo "</div>";
}
function get_kind_update($value) {
	$variable = ['Hoạt động y tế', 'Hoạt động tập đoàn'];
	$kind = [];
	$kind[] = $value;
	echo "<div class='col-xs-6'>";
	foreach ($variable as $value) {
		if (in_array($value, $kind)) {
			echo "<div class='checkbox checkbox-primary m-b-15'>
		        <input id='checkbox-{$value}' type='checkbox' name='list-company[]' value='$value' checked>
		        <label for='checkbox-{$value}'>
		            {$value}
		        </label>
		    </div>";
		} else {
			echo "<div class='checkbox checkbox-primary m-b-15'>
		        <input id='checkbox-{$value}' type='checkbox' name='list-company[]' value='$value'>
		        <label for='checkbox-{$value}'>
		            {$value}
		        </label>
		    </div>";
		}
	}
	echo "</div>";
}
?>