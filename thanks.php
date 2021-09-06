<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
    <?php include_once 'views/components/head.php'; ?>
    <title>Cảm ơn | Cường Mạnh Group</title>
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

    <?php include_once 'views/components/navbar.php'; ?>

    <!-- Content area -->
    <div class="content-area">

        <div id="main">
        <!-- SLIDER -->
        <section class="page-section no-padding background-img-slider">
            <!-- Content area -->
            <div class="container">
                <div id="main-slider" style="background: url(views/assets/img/banner/bg0.jpg) center center / cover;">
                    <!-- Slide -->
                    <div class="item page text-center slide2" style="background: #3333337d;" >
                        <div class="caption">
                            <div class="container">
                                <div class="div-table">
                                    <div class="div-cell">
                                        <h2 class="caption-title"><span>Chúng tôi sẽ liên hệ sớm nhất cho bạn</span></h2>
                                        <h3 class="caption-subtitle">Cảm ơn</h3>
                                        <p class="caption-text">
                                            <a class="btn btn-theme btn-theme-xl scroll-to" href="index.php"> Về trang chủ <i class="fa fa-arrow-circle-right"></i></a>
                                        </p>
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

    </div>
    <!-- /Content area -->

    <!-- FOOTER -->
    <!-- /Content area -->
    <?php include_once 'views/components/footer.php'; ?>
    </div>
    <!-- /Wrap all content -->
    <!-- JS Global -->
    <?php include_once 'views/components/scripts.php'; ?>
<!--<![endif]-->

<script type="text/javascript">
    jQuery(document).ready(function () {
        theme.init();
        theme.initMainSlider();
        theme.initCountDown();
        theme.initPartnerSlider();
        theme.initTestimonials();
        theme.initGoogleMap();
    });
    jQuery(window).load(function () {
        theme.initAnimation();
    });

    jQuery(window).load(function () { jQuery('body').scrollspy({offset: 100, target: '.navigation'}); });
    jQuery(window).load(function () { jQuery('body').scrollspy('refresh'); });
    jQuery(window).resize(function () { jQuery('body').scrollspy('refresh'); });

    jQuery(document).ready(function () { theme.onResize(); });
    jQuery(window).load(function(){ theme.onResize(); });
    jQuery(window).resize(function(){ theme.onResize(); });

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
