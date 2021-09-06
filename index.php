<?php 
    include_once 'controller/database.php';
    include_once 'model/edit_title.php';
    include_once 'views/show/show_product_company.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'views/components/head.php'; ?>
    <title>Trang chủ | Y Tế Cường Mạnh</title>
    <style>
        h2 {
            font-size: 16px;
        }
        .price-value {
            font-size: 20px;
        }
    </style>
</head>

<body id="home" class="wide body-light">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- Wrap all content -->
    <div class="wrapper">
        <!-- HEADER -->
        <?php include_once 'views/components/navbar.php'; ?>
        <!-- /HEADER -->
        <!-- Content area -->
        <div class="content-area">
            <div id="main">
                <!-- SLIDER -->
                <section class="page-section no-padding background-img-slider">
                    <div class="container">
                        <div id="main-slider">
                            
                            <div class="item page text-center slide" style="background: url(views/assets/img/banner/bg5.jpg) center center / cover;">
                                <div class="caption" style="background: #00000014;">
                                    <div class="container">
                                        <div class="col-md-8" style="height: 93% !important;display: table !important;text-align: left;">
                                            <div class="div-cell">
                                                <h2 class="caption-title">Y TẾ CƯỜNG MẠNH</h2>
                                                <h3 class="caption-subtitle">NHÀ PHÂN PHỐI CỦA SIEMENS</h3>
                                                <!-- Event description -->
                                                <!-- /Event description -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item page text-center slide2" style="background: url(views/assets/img/banner/bg0.jpg) center center / cover;">
                                <div class="caption" style="background: #00000014;">
                                    <div class="container">
                                        <div class="div-table">
                                            <div class="div-cell">
                                                <p class="caption-text">
                                                    <a id="playy" class="btn btn-play" href="javascript:;"><i class="fa fa-play"></i></a>
                                                    <iframe id="video" style="width: 100%;" height="500" src="https://www.youtube.com/embed/IqneZgrL0Qw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </p>
                                                <!-- Event description -->
                                                <!-- /Event description -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Event description -->
                    <div class="event-description">
                        <div class="container">
                            <div class="row">
                                <div class="event-background">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-4">
                                                <div class="media">
                                                    <span class="pull-left">
                                                        <i class="fa fa-calendar fa-2x"></i>
                                                    </span>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Số năm hoạt động</h4>
                                                        <span>Hơn 09 năm</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-5">
                                                <div class="media">
                                                    <span class="pull-left">
                                                        <i class="fa fa-map-marker fa-2x"></i>
                                                    </span>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Địa chỉ</h4>
                                                        <span>Số 63 Phố Đỗ Quang, Trung Hòa, Hà Nội</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="media">
                                                    <span class="pull-left">
                                                        <i class="fa fa-group fa-2x media-object"></i>
                                                    </span>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Thành viên</h4>
                                                        <span>4 Công ty</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Event description -->
                </section>
                <!-- /SLIDER -->
            </div>
            <!-- PAGE ABOUT -->
            <section class="page-section" id="about">
                <div class="container">
                    <div class="col-lg-6">
                        <h1 class="section-title">
                            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-star fa-stack-1x"></i></span></span>
                            <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">Giới thiệu</span>
                        </h1>
                        <div class="row">
                            <p data-animation="fadeInUp" data-animation-delay="300" style="text-align: justify">Là một công ty hoạt động trong lĩnh vực kinh doanh thiết bị y tế, chúng tôi hiểu rằng, đây là một ngành kinh doanh đặc biệt, có ảnh hưởng trực tiếp đến sức khỏe cũng như tính mạng con người. Do vậy, với mục tiêu bảo vệ sức khỏe người Việt, ngay từ khi thành lập, Y TẾ CƯỜNG MẠNH đã xác định phương châm kinh doanh là mang đến những sản phẩm với chất lượng và dịch vụ tốt nhất. Đây chính là chìa khóa thành công cho Y TẾ CƯỜNG MẠNH và cũng là định hướng để chúng tôi phát triển trong tương lai.</p>
                            <p class="btn-row">
                                <a href="about-us.php" class="btn btn-theme btn-theme-xl scroll-to" data-animation="flipInY" data-animation-delay="200">Thông tin chi tiết <i class="fa fa-arrow-circle-right"></i></a>
                                <!--
                            --><!-- <a href="https://www.youtube.com/watch?v=dH3v9oOvYs0" class="btn btn-theme btn-theme-xl btn-theme-transparent" data-gal="prettyPhoto" data-animation="flipInY" data-animation-delay="400">Video giới thiệu</a> -->
                                <!-- <a class="btn btn-play" href="https://www.youtube.com/watch?v=dH3v9oOvYs0" data-gal="prettyPhoto"><i class="fa fa-play"></i></a> -->
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6" style="padding: 35px 15px;">
                        <div class="row thumbnails">
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                <iframe style="width: 100%;height: 240px;border-radius: 6px;box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);" src="https://www.youtube.com/embed/MzEfl5V1Rhc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p style="margin-top: 10px;">MÁY LÀM SẠCH KHÔNG KHÍ AIRFREE, SẢN PHẨM ĐỘC QUYỀN <br> Y TẾ CƯỜNG MẠNH</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /PAGE ABOUT -->
            <!-- Donation -->
            <section class="page-section color" style="padding: 30px 0 10px 0;background: url(views/assets/img/banner/bg.jpg) center center / cover;" id="donation">
                <div class="container">
                    <h1 class="section-title">
                        <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                        <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner" style="color: #fff !important">Giá trị cốt lõi</span>
                    </h1>
                    <p>GIẢI PHÁP TOÀN DIỆN, GIÁ TRỊ VỮNG BỀN</p>
                </div>
            </section>
            <!-- /Donation -->
            <!-- PAGE SCHEDULE -->
            <div style="background: url(views/assets/img/banner/m2.jpg) center center / cover;">
            <?php include_once 'views/components/member.php'; ?>
            <!-- /PAGE SCHEDULE -->
            <section style="background: #0000;" class="page-section" id="price">
                <div class="container">
                    <h1 class="section-title clearfix">
                        <span data-animation="flipInY" data-animation-delay="300" class="icon-inner animated flipInY visible"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-user fa-stack-1x"></i></span></span>
                        <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner animated fadeInRight visible">Thành tựu</span>
                    </h1>
                    <div class="row price-tables">
                        <div class="col-xsp-6 col-sm-6 col-md-6 col-lg-4">
                            <div style="    background: #fff;" class="price-table animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="100">
                                <div class="price-table-header">
                                    <div class="price-label">
                                        <h2 class="price-label-title">Đối tác</h2>
                                    </div>
                                    <div class="price-value">
                                        <span class="price-number">35</span>
                                        <span class="price-per"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xsp-6 col-sm-6 col-md-6 col-lg-4">
                            <div class="price-table featured animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="200">
                                <div class="price-table-header">
                                    <div class="price-label">
                                        <h2 class="price-label-title">Khách hàng</h2>
                                    </div>
                                    <div class="price-value">
                                        <span class="price-number">250</span>
                                        <span class="price-per"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xsp-6 col-sm-6 col-md-6 col-lg-4">
                            <div class="price-table animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="300">
                                <div class="price-table-header">
                                    <div class="price-label">
                                        <h2 class="price-label-title">Sản phẩm</h2>
                                    </div>
                                    <div class="price-value">
                                        <span class="price-number">3512</span>
                                        <span class="price-per"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </div>
            <section class="page-section color" style="padding-top: 20px;padding-bottom: 10px;background: url(views/assets/img/banner/bg3.jpg) center center / cover;">
                <div class="container">
                    <h1 class="section-title">
                        <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-comments fa-stack-1x"></i></span></span>
                        <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner" style="color: #fff !important">Khách hàng nói gì về chúng tôi <small></small></span>
                    </h1>
                    <!-- Testimonials -->
                    <div id="testimonials" class="owl-carousel testimonials" data-animation="fadeInUp" data-animation-delay="100">
                        <div class="media testimonial">
                            <div class="media-object pull-right" data-animation="flipInY" data-animation-delay="300">
                                <div class="hex testimonial-avatar">
                                    <div class="hex-deg">
                                        <div class="hex-deg">
                                            <div class="hex-deg">
                                                <div class="hex-inner">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <p>Chúng tôi không cần quá nhiều máy móc mà cần những máy công suất xét nghiệm lớn và cho ra độ chính xác cao. Các dòng sản phẩm của Siemens healthineers do công ty Medicom phân phối là một sự lựa chọn tuyệt vời giúp các bác sĩ chúng tôi giải quyết được vấn đề bệnh nhân ngày càng đông như hiện nay</p>
                                <h4 class="media-heading">Bệnh viện đa khoa tỉnh Quảng Ninh</h4>
                            </div>
                        </div>
                        <div class="media testimonial">
                            <div class="media-object pull-right" data-animation="flipInY" data-animation-delay="300">
                                <div class="hex testimonial-avatar">
                                    <div class="hex-deg">
                                        <div class="hex-deg">
                                            <div class="hex-deg">
                                                <div class="hex-inner">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <p>Rất cảm ơn công ty và đội ngũ nhân viên rất nhiệt tình hỗ trợ. Chúng tôi được hỗ trợ lắp đặt tại chỗ, được lắp đặt tận mắt và hướng dẫn sử dụng rất rõ ràng. Hiếm có đơn vị nào nhiệt tính với bệnh viện chúng tôi như vậy </p>
                                <h4 class="media-heading">Bệnh viện đại học y Hà Nội</h4>
                            </div>
                        </div>
                        <div class="media testimonial">
                            <div class="media-object pull-right" data-animation="flipInY" data-animation-delay="300">
                                <div class="hex testimonial-avatar">
                                    <div class="hex-deg">
                                        <div class="hex-deg">
                                            <div class="hex-deg">
                                                <div class="hex-inner">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <p>Rất cảm ơn Medicom và đội ngũ kinh doanh. Chúng tôi rất ưng sản phẩm và thái độ phục vụ nhân viên. Máy móc rất hiện đại, thật sự rất đáng đầu tư vì liên quan đến tính mạng con người. Các máy móc đều thuận tiện trong việc lắp đặt, nâng cấp, bổ sung máy móc mới.</p>
                                <h4 class="media-heading">Bệnh Viện Đa khoa Nam Định</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonials -->
                </div>
            </section>

            <section class="page-section image" id="register" style="padding-top: 20px;padding-bottom: 20px;">
                <div class="container">
                    <h1 class="section-title">
                        <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                        <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">Đăng ký nhận tư vấn</span>
                    </h1>
                    <form name="registration-form" class="registration-form" action="model/add_register.php" method="post">
                        <div class="row">
                            <div class="col-sm-12 form-alert"></div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group" data-animation="fadeInUp" data-animation-delay="200">
                                    <input type="text" class="form-control input-name" data-toggle="tooltip" name="name" placeholder="Tên của bạn" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group" data-animation="fadeInUp" data-animation-delay="400">
                                    <input type="text" class="form-control input-email" data-toggle="tooltip" name="email" placeholder="Email" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group" data-animation="fadeInUp" data-animation-delay="600">
                                    <input type="text" name="phone-number" class="form-control input-phone" placeholder="Số điện thoại" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group" data-animation="fadeInUp" data-animation-delay="200">
                                    <input type="text" class="form-control input-name" data-toggle="tooltip" name="product" placeholder="Tên sản phẩm" />
                                </div>
                            </div>
                            <div class="col-md-12 overflowed">
                                <div class="text-center margin-top">
                                    <button class="btn btn-theme btn-theme-xl submit-button" type="submit"> Đăng ký ngay <i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            <section class="page-section" style="padding-top: 20px;padding-bottom: 20px;">
                <div class="container">
                    <h1 class="section-title">
                        <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-file-text-o fa-stack-1x"></i></span></span>
                        <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">Bài viết nổi bật<small></small></span>
                    </h1>
                    <div class="row post-row">
                        <?php include_once 'views/show/show_post_index.php'; ?>
                    </div>
                    <div class="text-center margin-top">
                        <a data-animation="flipInY" data-animation-delay="100" href="blogs.php" class="btn btn-theme"><i class="fa fa-file"></i> Xem thêm tin tức</a>
                    </div>
                </div>
            </section>
            <!-- PAGE SPONSORS -->
            <section class="page-section" id="sponsors">
                <div class="container">
                    <h1 class="section-title">
                        <span data-animation="flipInY" data-animation-delay="100" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-thumbs-up fa-stack-1x"></i></span></span>
                        <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">Đối tác liên kết <small></small></span>
                    </h1>
                    <div class="partners-carousel" data-animation="fadeInUp" data-animation-delay="300">
                        <div class="owl-carousel">
                            <div><a href="#"><img src="views/assets/img/partner/1.png" width="150" height="60" /></a></div>
                            <div><a href="#"><img src="views/assets/img/partner/2.png" width="150" height="60" /></a></div>
                            <div><a href="#"><img src="views/assets/img/partner/3.png" width="150" height="60" /></a></div>
                            <div><a href="#"><img src="views/assets/img/partner/4.png" width="150" height="60" /></a></div>
                            <div><a href="#"><img src="views/assets/img/partner/5.png" width="150" height="60" /></a></div>
                            <div><a href="#"><img src="views/assets/img/partner/6.png" width="150" height="60" /></a></div>
                            <div><a href="#"><img src="views/assets/img/partner/7.png" width="170" height="60" /></a></div>
                            <div><a href="#"><img src="views/assets/img/partner/8.png" width="170" height="60" /></a></div>
                            <div><a href="#"><img src="views/assets/img/partner/9.png" width="170" height="60" /></a></div>
                            <div><a href="#"><img src="views/assets/img/partner/10.png" width="170" height="60" /></a></div>
                            <div><a href="#"><img src="views/assets/img/partner/11.png" width="170" height="60" /></a></div>
                            <div><a href="#"><img src="views/assets/img/partner/12.jpg" width="170" height="60" /></a></div>
                            <div><a href="#"><img src="views/assets/img/partner/13.jpg" width="170" height="60" /></a></div>
                            <div><a href="#"><img src="views/assets/img/partner/15.jpg" width="170" height="60" /></a></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /PAGE SPONSORS -->        </div>
        <!-- /Content area -->
        <?php include_once 'views/components/footer.php'; ?>
    </div>
    <!-- /Wrap all content -->
    <!-- JS Global -->
    <?php include_once 'views/components/scripts.php'; ?>
    <!--<![endif]-->
    <script type="text/javascript">
        jQuery(document).ready(function() {
            theme.init();
            theme.initMainSlider();
            theme.initPartnerSlider();
            theme.initTestimonials();
            $('#playy').click(()=>{
                $('#video').show();
                $('#playy').attr('style', 'display: none !important');
            });
            $('#video').hide();
            function remove_active() {
                $('#first').removeClass('active');
                $('#second').removeClass('active');
                $('#third').removeClass('active');
                $('#last').removeClass('active');
                $('#tab-first').removeClass('in active');
                $('#tab-second').removeClass('in active');
                $('#tab-third').removeClass('in active');
                $('#tab-last').removeClass('in active');
            }
            var hihi = setInterval(()=>{
                if ($('#first').attr('class') == 'active') {
                    remove_active();
                    $('#second').addClass('active');
                    $('#tab-second').addClass('in active');
                } else if ($('#second').attr('class') == 'active') {
                    remove_active();
                    $('#third').addClass('active');
                    $('#tab-third').addClass('in active');
                } else if ($('#third').attr('class') == 'active') {
                    remove_active();
                    $('#last').addClass('active');
                    $('#tab-last').addClass('in active');
                } else if ($('#last').attr('class') == 'active') {
                    remove_active();
                    $('#first').addClass('active');
                    $('#tab-first').addClass('in active');
                }
            },5000);
            $('#first').click(()=>{
                clearInterval(hihi);
            });
            $('#second').click(()=>{
                clearInterval(hihi);
            });
            $('#third').click(()=>{
                clearInterval(hihi);
            });
            $('#last').click(()=>{
                clearInterval(hihi);
            });
        });
        jQuery(window).load(function() {
            theme.initAnimation();
        });
    
        jQuery(window).load(function() { jQuery('body').scrollspy({ offset: 100, target: '.navigation' }); });
        jQuery(window).load(function() { jQuery('body').scrollspy('refresh'); });
        jQuery(window).resize(function() { jQuery('body').scrollspy('refresh'); });
    
        jQuery(document).ready(function() { theme.onResize(); });
        jQuery(window).load(function() { theme.onResize(); });
        jQuery(window).resize(function() { theme.onResize(); });
    
        jQuery(window).load(function() {
            if (location.hash != '') {
                var hash = '#' + window.location.hash.substr(1);
                if (hash.length) {
                    jQuery('html,body').delay(0).animate({
                        scrollTop: jQuery(hash).offset().top - 44 + 'px'
                    }, {
                        duration: 1200,
                        easing: "easeInOutExpo"
                    });
                }
            }
        });
    </script>
</body>

</html>