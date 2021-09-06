<?php 
    include_once 'controller/database.php';
    include_once 'model/edit_title.php';
    include_once 'views/show/show_detailed_post.php';
    include_once 'model/check_company.php';
    include_once 'views/show/show_kinds_product.php';
    include_once 'views/components/navbar-company.php';
?>
<!DOCTYPE html>

<html lang="en">
<!--<![endif]-->

<head>
    <?php include_once 'views/components/head.php'; ?>
    <title><?php echo $name_post; ?> | Cường Mạnh Group</title>
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
            if ($id == 1) {
                company(1);
            } else if ($id == 2) {
                company(2);
            } else if ($id == 3) {
                company(3);
            } else if ($id == 4) {
                company(4);
            }
        ?>
        <!-- /HEADER -->
        <!-- Content area -->
        <div class="content-area">
            <!-- PAGE BLOG -->
            <section class="page-section with-sidebar sidebar-right" style="padding-top: 120px;">
                <div class="container">
                    <div class="row">
                        <!-- Content -->
                        <section id="content" class="content col-sm-8 col-md-9">
                            <article class="post-wrap" data-animation="fadeInUp" data-animation-delay="100">
                                <div class="post-media" style="height: auto;">
                                    <img src="<?php echo $avatar; ?>" style="width: 100%;height: auto;" />
                                </div>
                                <div class="post-header">
                                    <h2 class="post-title"><a href="#"><?php echo $name_post; ?></a></h2>
                                    <div class="post-meta">
                                        <span class="post-date">
                                            Giá: <?php echo $price; ?>
                                    </div>
                                </div>
                                <div class="">
                                    <?php echo $description; ?> 
                                </div>
                            </article>
                            <!-- About the author -->
                            <div class="about-the-author clearfix">
                                <div class="media">
                                    <img class="img-circle media-object pull-left" src="views/assets/img/favicon.png" width="65" alt="">
                                    <div class="media-body">
                                        <h4 class="media-heading">Đăng bởi <a href="#">Y tế Cường Mạnh</a></h4>
                                        <p>Giá trị cốt lõi của chúng tôi là Tôn trọng và tin cậy, Chuyên nghiệp và liêm chính, Tận tâm và nhiệt tình.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="comments-form">
                                <h4 class="block-title">Đăng ký nhận tư vấn sản phẩm này</h4>
                                <form method="post" action="model/add_register.php" name="comments-form">
                                    <div class="form-group"><input type="text" name="name" placeholder="Tên của bạn" class="form-control" title="comments-form-name" name="comments-form-name"></div>
                                    <div class="form-group"><input type="email" name="email" placeholder="Email" class="form-control" title="comments-form-email" name="comments-formemail"></div>
                                    <div class="form-group"><input type="text" name="phone-number" placeholder="Số điện thoại" class="form-control" title="comments-form-website" name="comments-form-website"></div>
                                    <div class="form-group"><textarea placeholder="Lời nhắn..." name="message" class="form-control" title="comments-form-comments" name="comments-form-comments" rows="6"></textarea></div>
                                    <div class="form-group"><input type="submit" class="btn btn-theme" id="submit" value="Nhận tư vấn"></div>
                                </form>
                            </div>
                            <!-- /Leave a Comment -->
                        </section>
                        <!-- Content -->
                        <hr class="page-divider transparent visible-xs" />
                        <!-- Sidebar -->
                        <aside id="sidebar" class="sidebar col-sm-4 col-md-3">
                            <div class="widget categories">
                                <h4 class="widget-title">Sản phẩm theo công ty</h4>
                                <ul>
                                    <?php kinds_company($id); ?>
                                </ul>
                            </div>
                        </aside>
                        <!-- Sidebar -->
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
    
        //jQuery(window).load(function () { jQuery('body').scrollspy({offset: 100, target: '.navigation'}); });
        //jQuery(window).load(function () { jQuery('body').scrollspy('refresh'); });
        //jQuery(window).resize(function () { jQuery('body').scrollspy('refresh'); });
    </script>
</body>

</html>