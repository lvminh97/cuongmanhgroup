<?php 
    if (!@$_GET['company']) {
        header('location: index.php');
    }
    $id = $_GET['company'];
    $active1 = $active2 = $active3 = $active4 = '';
    if ($id == 1) {
        $company = 'Medicom';
        $active1 = 'class="active"';
        // $sologan = "MEDICOM ĐẠI DIỆN CHO THƯƠNG HIỆU SIEMENS";
        $bg = "background: url(views/assets/img/banner/bg11.jpg) 100% 40% / cover;";
        $about = 'medicom.php';
        $imge_product = '<img src="views/assets/img/banner/17.jpg" style="width: 100%;border-radius: 10px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);">';
        if (@$_GET['kind']) {
            $kind = $_GET['kind'];
            if ($kind == 1) {
                $kind_name = 'Hệ thống tự động hóa xét nghiệm';
            } else if ($kind == 2) {
                $kind_name = 'Máy xét nghiệm sinh hóa';
            } else if ($kind == 3) {
                $kind_name = 'Máy xét nghiệm miễn dịch tự động';
            } else if ($kind == 4) {
                $kind_name = 'Máy xét nghiệm huyết học tự động';
            }
        }
    } else if ($id == 2) {
        $company = 'Cường Minh';
        $active2 = 'class="active"';
        // $sologan = "CƯỜNG MINH ĐẠI DIỆN CHO THƯƠNG HIỆU S.F.R.I, NEO , ĐỒNG THỜI PHÁT TRIỂN MINILAB VÀ LAB XÉT NGHIÊM TRUNG TÂM";
        $bg = "background: url(views/assets/img/banner/12.jpg) 50% 100% / cover;";
        $about = 'cuong-minh.php';
        $imge_product = '<img src="views/assets/img/banner/15.jpg" style="width: 100%;border-radius: 10px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);">';
        if (@$_GET['kind']) {
            $kind = $_GET['kind'];
            if ($kind == 1) {
                $kind_name = 'Máy Sinh Hóa';
            } else if ($kind == 2) {
                $kind_name = 'Máy Miễn dịch';
            } else if ($kind == 3) {
                $kind_name = 'Máy huyết học';
            } else if ($kind == 4) {
                $kind_name = 'Máy HBA1C Akray';
            } else if ($kind == 5) {
                $kind_name = 'Máy nước tiểu';
            } else if ($kind == 6) {
                $kind_name = 'Máy điện giải';
            } else if ($kind == 7) {
                $kind_name = 'Máy đông máu';
            } else if ($kind == 8) {
                $kind_name = 'Máy in barcode ống mẫu - I-Pres';
            } else if ($kind == 9) {
                $kind_name = 'Bàn ghế lấy máu';
            }
        }
    } else if ($id == 3) {
        $company = 'Vạn Hoa';
        $active3 = 'class="active"';
        // $sologan = "VẠN HOA ĐẠI DIỆN CHO HÃNG TOSOH, KOBAYASHI";
        $bg = "background: url(views/assets/img/banner/13.jpg) 100% 60% / cover;";
        $about = 'van-hoa.php';
        $imge_product = '<iframe height="480" src="https://www.youtube.com/embed/yhBr55P3I10" style="width: 100%;border-radius: 14px;" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        if (@$_GET['kind']) {
            $kind = $_GET['kind'];
            if ($kind == 1) {
                $kind_name = 'Máy HBA1C Tosoh';
            } else if ($kind == 3) {
                $kind_name = 'Máy bacode';
            } else if ($kind == 2) {
                $kind_name = 'Máy miễn dịch Tosoh';
            }
        }
    } else if ($id == 4) {
        $company = 'Minh Quang';
        $active4 = 'class="active"';
        // $sologan = "MINH QUANG ĐẠI DIỆN CHO THƯƠNG HIỆU AIRFREE";
        $bg = "background: url(views/assets/img/banner/14.jpg) 100% 60% / cover;";
        $about = 'minh-quang.php';
        $imge_product = '<img src="views/assets/img/banner/16.jpg" style="width: 100%;border-radius: 10px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);">';
        if (@$_GET['kind']) {
            $kind = $_GET['kind'];
            if ($kind == 1) {
                $kind_name = 'AirFree';
            } else if ($kind == 2) {
                $kind_name = 'Rocko';
            }
        }
    } else {
        header('location: index.php');
    }
?>