<?php 
    include_once 'controller/database.php';
    include_once 'model/edit_title.php';
    include_once 'model/check_company.php';
    include_once 'views/show/show_kinds_product.php';
    include_once 'views/components/navbar-company.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'views/components/head.php'; ?>
    <title>Sản phẩm <?php echo $company; ?> | Cường Mạnh Group</title>
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
        <div class="banner-top" style="<?php echo $bg; ?>">
            <?php
                // include_once 'views/components/company-menu.php';
            ?>
            <!-- <div style="background: #33333352;height: 100%;">
                <h1 style="line-height: 590px;margin: 0;"><?php echo $sologan; ?></h1>
            </div> -->
        </div>
        <!-- Content area -->
        <div class="content-area">
            <!-- PAGE BLOG -->
            <section class="page-section with-sidebar sidebar-right" style="padding-top: 120px;">
                <div class="container">
                    <div class="row">
                        <!-- Content -->
                        <section id="content" class="content col-sm-8 col-md-9">
                            <?php
                                if (@$_GET['kind']) {
                                    include_once 'views/show/show_all_product_company.php';
                                } else {
                                    echo $imge_product;
                                }
                            ?>
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
    </script>
</body>

</html>