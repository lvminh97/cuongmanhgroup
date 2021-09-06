<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'views/components/head.php'; ?>
    <title>Liên hệ | Cường Mạnh Group</title>
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
                        <div id="main-slider" style="background: url(views/assets/img/banner/bg0.jpg) center center / cover;">
                            <!-- Slide -->
                            <div class="item page slide2" style="background: #3333337d;">
                                <div class="caption">
                                    <div class="container">
                                        <div class="div-table">
                                            <div class="div-cell">
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-4">
                                                        <div class="form-background">
                                                            <div class="form-header color">
                                                                <h1 class="section-title">
                                                                    <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                                                                    <span class="title-inner" style="color: #fff !important">Tư vấn miễn phí</span>
                                                                </h1>
                                                            </div>

                                                            <form name="registration-form-alt" class="registration-form alt" action="model/add_register.php" method="post">
                                                                <div class="row">
                                                                    <div class="col-sm-12 form-alert"></div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control input-name" name="name" data-toggle="tooltip" placeholder="Tên của bạn" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control input-email" name="email" data-toggle="tooltip" placeholder="Email" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control input-phone" name="phone-number" placeholder="Số điện thoại" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group selectpicker-wrapper">
                                                                            <input type="text" class="form-control input-name" data-toggle="tooltip" name="product" placeholder="Tên sản phẩm" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="text-center">
                                                                            <button data-animation="flipInY" data-animation-delay="100" class="btn btn-theme btn-block submit-button" type="submit"> Đăng ký <i class="fa fa-arrow-circle-right"></i></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-8">
                                                        <div class="text-holder">
                                                            <h2 class="caption-title">Y TẾ CƯỜNG MẠNH</h2>
                                                            <h3 class="caption-subtitle" style="line-height: 90px">GIÁ TRỊ VỮNG BỀN, GIẢI PHÁP TOÀN DIỆN.</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Event description -->
                                                <!-- /Event description -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /SLIDER -->
            </div>
            <!-- PAGE LOCATION -->
            <section class="page-section" id="contact">
                <div class="container full-width gmap-background">
                    <div class="container">
                        <div class="on-gmap color">
                            <h1 class="section-title">
                                <span data-animation="flipInY" data-animation-delay="100" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                                <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner" style="color: #fff !important">Địa chỉ liên hệ</span>
                            </h1>
                            <p data-animation="fadeInUp" data-animation-delay="200" class="text-uppercase">Số 63 Đỗ Quang<br /> Trung Hòa, Cầu Giấy<br /> Hà Nội, Việt Nam<br /> 02437.264.708
                            </p>
                            <p><a href="mailto:thietbiytecuongminh@gmail.com">thietbiytecuongminh@gmail.com</a></p>
                            <a href="https://goo.gl/maps/W3tnWVJqSoVJcWxU6" class="btn btn-theme" data-animation="flipInY" data-animation-delay="300">Chỉ đường <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- Google map -->
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.553706352926!2d105.80056541532268!3d21.010519686008273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aca05fd76a37%3A0x89f415329362999!2zNjMgxJDhu5cgUXVhbmcsIFRydW5nIEhvw6AsIFRoYW5oIFh1w6JuLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1585746827910!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;width: 100%;height: 100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <!-- /Google map -->
                </div>
            </section>
            <!-- /PAGE LOCATION -->
        </div>
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
            theme.initTestimonials();
            theme.initGoogleMap();
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