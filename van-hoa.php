<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'views/components/head.php'; ?>
    <title>Về chúng tôi - Công ty Cổ phần Y tế Vạn Hoa | Cường Mạnh Group</title>
    <style>
        .border {
            width: 60%;
            margin: auto;
            background: url(https://redswanrestaurant.github.io/images/khungmenu-02.png) center center / cover;
            padding: 40px;
        }
        
        .img-about img {
            width: 40%;
            margin: 40px 0px;
        }
        
        .img-about {
            text-align: justify !important;
            padding: 0px 20px;
            text-align: center;
            background: #fff;
            border-radius: 10px;
            margin-bottom: 30px;
            height: 240px;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .2), 0 1px 5px 0 rgba(0, 0, 0, .12);
        }
        
        .img-about h1 {
            font-size: 25px;
            padding: 10px 0;
            color: #fff;
            text-align: center;
        }
    </style>
</head>

<body id="home" class="wide body-light sub-page">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- Wrap all content -->
    <div class="wrapper">
        <!-- HEADER -->
        <?php
            include_once 'views/components/navbar-company.php';
            company(3);
        ?>
        <!-- /HEADER -->
        <div class="banner-top" style="width: 101%;height: 210px;background: url(views/assets/img/banner/van-hoa.jpg) 40% 10% / cover;">
            <h1>VỀ CHÚNG TÔI</h1>
        </div>
        <!-- Content area -->
        <div class="content-area">
            <!-- PAGE BLOG -->
            <section class="page-section with-sidebar sidebar-right" style="padding-top: 70px;background: url(views/assets/img/banner/van-hoa1.jpg) center center / cover">
                <div class="container">
                    <div class="row">
                        <!-- Content -->
                        <!-- <section class="page-section" id="about" style="box-shadow: 0 4px 18px 0 rgba(0, 0, 0, .12), 0 7px 10px -5px rgba(0, 0, 0, .15);border-radius: 10px;"> -->
                        <section class="page-section" id="about" style="background: none;background-color: #0000;padding-bottom: 0px;">
                            <div class="container" style="padding: 0 30px;margin-top: -40px;">
                                <div class="row">
                                    <div class="col-lg-4 p-4"></div>
                                    <div class="col-lg-8 p-4">
                                        <h2 style="color: #333;margin-top: 0;">Giới thiệu chung</h2>
                                        <h3 style="color: #333;margin-top: 0;">Công ty Cổ phần Y tế Vạn Hoa</h3>

                                        <p style="text-align: justify;">
                                            Vạn Hoa thành lập năm 2016, là nhà phân phối thiết bị y tế của hãng Tosoh, hãng Kobayashy – Nhật Bản tại Việt Nam.
                                        </p>

                                        <p style="text-align: justify;">Vạn Hoa hoạt động trên hai lĩnh vực kinh doanh chính:
                                            <br>- Cung cấp, phân phối máy xét nghiệm miễn dịch tự động của hãng Tosoh (Nhật Bản).
                                            <br> - Cung cấp, phân phối máy chuẩn bị ống mẫu tự động của hãng Kobayashy (Nhật Bản).
                                        </p>
                                        <p style="text-align: justify;">
                                            Trên thị trường trang thiết bị y tế tiềm năng, Vạn Hoa chọn hướng kinh doanh năng động, đầu tư dòng máy xét nghiệm miễn dịch tự động công suất nhỏ, phục vụ các phòng khám chuyên khoa, đa khoa, bệnh viện tuyến dưới. Phân phối những dòng máy xét nghiệm
                                            miễn dịch tự động công suất 36 test/giờ, giá cả hợp lý, Vạn Hoa góp phần giảm thiểu áp lực tài chính, rủi ro, tạo đà cho các trung tâm chăm sóc sức khỏe quy mô vừa và nhỏ được hình thành, phát triển.
                                        </p>
                                    </div>
                                </div>
                        </section>
                        </div>
                    </div>
            </section>
            <section class="page-section with-sidebar sidebar-right" style="padding-top: 30px;">
                <div class="container">
                    <div class="row">
                        <section class="page-section" id="about" style="background: none;background-color: #0000;padding-bottom: 0px;">
                            <div class="container" style="padding: 0 30px;margin-top: -40px;">
                                <!--                                 <h3 style="color: #333;">GIỚI THIỆU CÁC CÔNG TY CON</h3>
 -->
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="img-about" style="background: url(views/assets/img/banner/van-hoa2.jpg) 0% 50% / cover;">
                                            <h1>Sứ mệnh</h1>
                                            <p style="color: #fff;">Cung ứng thiết bị y tế với giá thành phù hợp, cùng hệ thống y tế chăm sóc sức khỏe người dân.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="img-about" style="background: url(views/assets/img/banner/van-hoa3.jpg) 69% 50% / cover;">
                                            <h1>Tầm nhìn</h1>
                                            <p style="color: #fff;">Tăng cường hiệu quả y tế tuyến dưới.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="img-about" style="background: url(views/assets/img/banner/van-hoa4.jpg) 125% 50% / cover;">
                                            <h1>Giá trị cốt lõi</h1>
                                            <p style="color: #fff;">Tiết kiệm, phù hợp, chất lượng, hiệu quả</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                            <p><b>TIẾT KIỆM - PHÙ HỢP - CHẤT LƯỢNG - HIỆU QUẢ</b></p>
                                        </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
            <!-- /PAGE BLOG -->
            </div>
            <!-- /Content area -->
            <!-- FOOTER -->
            <?php include_once 'views/components/footer.php'; ?>
        </div>
        <!-- /Wrap all content -->
        <!-- JS Global -->
        <?php include_once 'views/components/scripts.php'; ?>
        <!--<![endif]-->
        <script type="text/javascript">
            jQuery(document).ready(function() {
                theme.init();
            });
        </script>
</body>

</html>