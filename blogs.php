<?php 
    include_once 'controller/database.php';
    include_once 'model/edit_title.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'views/components/head.php'; ?>
    <title>Tin tức | Cường Mạnh Group</title>
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
        <?php include_once 'views/components/navbar.php'; ?>
        <!-- /HEADER -->
        <div class="banner-top" style="height: 210px;">
            <h1>TIN TỨC - SỰ KIỆN Y TẾ</h1>
        </div>
        <!-- Content area -->
        <div class="content-area">
            <!-- PAGE BLOG -->
            <section class="page-section with-sidebar sidebar-right">
                <div class="container">
                    <div class="row">
                        <!-- Content -->
                        <section id="content" class="content col-sm-8 col-md-9">
                            <?php include_once 'views/show/show_all_post.php'; ?>
                        </section>
                        <!-- Content -->
                        <hr class="page-divider transparent visible-xs" />
                        <!-- Sidebar -->
                        <aside id="sidebar" class="sidebar col-sm-4 col-md-3">
                            <div class="widget categories">
                                <h4 class="widget-title">Danh mục</h4>
                                <ul>
                                    <li style="background: url(https://cdn.pixabay.com/photo/2014/05/21/22/28/old-newspaper-350376_960_720.jpg) center center / cover;"><a href="blogs-kind.php?id=1">Hoạt động y tế                
                                        </a></li>
                                    <li style="background: url(https://sunshinehomes.vn/wp-content/uploads/2019/09/banner_congnghe.jpg) center center / cover;"><a href="blogs-kind.php?id=2">Hoạt động tập đoàn</a></li>
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
    </script>
</body>

</html>