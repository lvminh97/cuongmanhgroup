<?php
function kinds_company($id) {
	$connect = new connection();
	$get_skill = $connect->build_query([
		"table" => "kinds_company",
		"select" => "*",
		"where" => "`id_skill` = $id"
	])->select();
	$i = 0;
	while ($row = mysqli_fetch_array($get_skill)) {
		$i++;
		echo '<li><a href="products-company.php?company='.$id.'&kind='.$i.'">'.$row['name_kinds'].'</a></li>';
	}
}
?>