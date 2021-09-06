<?php 
    include_once '../model/check_session.php';
    include_once '../views/show/statistic.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bảng quản trị</title>
        <?php include_once 'views/header.php'; ?> 
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <?php include_once 'views/navbar.php'; ?> 
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Bảng quản trị</h4>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

                        <div class="row">

                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <i class="mdi mdi-account-convert widget-one-icon"></i>
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User Today">Bài viết tin tức</p>
                                        <h2><?php echo thong_ke("post"); ?></h2>
                                        <p class="text-muted m-0"><b>Người</b> </p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <i class="mdi mdi-layers widget-one-icon"></i>
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Bài viết kỹ thuật</p>
                                        <h2><?php echo thong_ke("post"); ?></h2>
                                        <p class="text-muted m-0"><b>Khóa</b> </p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <i class="mdi mdi-layers widget-one-icon"></i>
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Số sản phẩm</p>
                                        <h2><?php echo thong_ke("post"); ?></h2>
                                        <p class="text-muted m-0"><b>Bài viết</b> </p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <i class="mdi mdi-account-multiple widget-one-icon"></i>
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Total Users">Đối tác</p>
                                        <h2><?php echo thong_ke("post"); ?></h2>
                                        <p class="text-muted m-0"><b>Tổ chức</b> </p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-30">Người đăng ký gần đây</h4>
                                    <div class="table-responsive">
                                        <table class="table table table-hover m-0">
                                            <thead>
                                                <tr>
                                                    <th>Họ tên</th>
                                                    <th>Số điện thoại</th>
                                                    <th>Email</th>
                                                    <th>Sản phẩm đăng ký</th>
                                                    <th>Lời nhắn</th>
                                                    <th>Tùy chọn <i class='fa fa-remove'></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php include_once '../views/show/show_register.php'; ?>
                                            </tbody>
                                        </table>

                                    </div> <!-- table-responsive -->
                                </div> <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <?php include_once 'views/footer.php'; ?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>