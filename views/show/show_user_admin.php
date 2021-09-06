<?php
    $get_infor = $connect->build_query([
        "table" => "admin",
        "select" => "*",
        "where" => "`service` <> '1'"
    ])->select();
    while ($row = mysqli_fetch_array($get_infor)) {
    	echo "<tr>
                <td>
                    <h5 class='m-0'>{$row['name']}</h5>
                </td>
                <td>{$row['username']}</td>
                <td>{$row['password']}</td>
                <td>
                    <a href='../model/delete_register.php?id={$row['id_admin']}&kinds=admin' class='btn btn-danger btn-sm waves-effect waves-light'>Xóa <i class='fa fa-remove'></i></a>
                </td>
            </tr>";
    }
?>