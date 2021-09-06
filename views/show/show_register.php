<?php
    $get_infor = $connect->build_query([
        "table" => "register",
        "select" => "*"
    ])->select();
    while ($row = mysqli_fetch_array($get_infor)) {
    	echo "<tr>
                <td>
                    <h5 class='m-0'>{$row['name']}</h5>
                </td>
                <td>{$row['phone_number']}</td>
                <td>{$row['email']}</td>
                <td>{$row['course']}</td>
                <td>{$row['message']}</td>
                <td>
                    <a href='../model/delete_register.php?id={$row['id_register_course']}' class='btn btn-danger btn-sm waves-effect waves-light'>Xóa <i class='fa fa-remove'></i></a>
                </td>
                
            </tr>";
    }
?>