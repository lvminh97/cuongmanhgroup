<?php
    function company($id) {
        $active1 = $active2 = $active3 = $active4 = '';
        if ($id == 1) {
            $company = 'Medicom';
            $link = 'medicom.php';
            $logo = 'src="views/assets/img/logo/medicom.png" width="150"';
            $style = 'style="position:relative;left: 78px;"';
            $product = 'products-company.php?company=1';
            $sologan = 'TRÍ TUỆ -  SÁNG TẠO - TÂM - LIÊM CHÍNH - ĐẠO ĐỨC';
        } else if ($id == 2) {
            $company = 'Cường Minh';
            $link = 'cuong-minh.php';
            $logo = 'src="views/assets/img/logo/cuongminh.png" width="80"';
            $style = 'style="position:relative;left: 62px;"';
            $product = 'products-company.php?company=2';
            $sologan = 'CHI PHÍ TỐI THIỂU - LỢI ÍCH TỐI ĐA';
        } else if ($id == 3) {
            $company = 'Vạn Hoa';
            $link = 'van-hoa.php';
            $logo = 'src="views/assets/img/logo/vanhoa.png" width="150"';
            $style = 'style="position:relative;left: 38px;"';
            $product = 'products-company.php?company=3';
            $sologan = 'TIẾT KIỆM - PHÙ HỢP - CHẤT LƯỢNG - HIỆU QUẢ';
        } else if ($id == 4) {
            $company = 'Minh Quang';
            $link = 'minh-quang.php';
            $logo = 'src="views/assets/img/logo/minhquang.png" width="80"';
            $style = 'style="position:relative;left: 80px;"';
            $product = 'products-company.php?company=4';
            $sologan = "HÀNH ĐỘNG VÌ SỨC KHỎE CỘNG ĐỒNG";
        } else {
            header('location: index.php');
        }
        echo '<header class="header fixed">
            <div class="container">
                <div class="header-wrapper clearfix">
                    <div class="logo">
                        <a href="index.php" class="scroll-to">
                            <img id="logo" '.$logo.' '.$style.'><br id="br">
                            <img id="scroll-img" '.$logo.' style="display: none">
                            <span id="sologan" style="    font-size: 12px;
            position: relative;
            top: -4px;">'.$sologan.'</span>
                        </a>
                    </div>
                    <div id="mobile-menu"></div>
                    <nav class="navigation closed clearfix">
                        <a href="#" class="menu-toggle btn"><i class="fa fa-bars"></i></a>
                        <ul class="sf-menu nav">
                            <li><a href="/">Trang chủ</a></li>
                            <li><a href="'.$link.'">Về chúng tôi</a></li>
                            <li><a href="'.$product.'">Sản phẩm</a></li>
                            <li><a href="technical.php">Kỹ thuật</a></li>
                            <li><a href="contact-us.php">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>';
    }
?>
