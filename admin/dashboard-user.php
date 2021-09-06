<?php 
    include_once '../model/check_session.php';
    include_once '../views/show/statistic.php';
    if ($_SESSION['service'] == '2' || $_SESSION['service'] == '3') {
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bảng người dùng</title>
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
						<div class="row">
                        	<div class="col-sm-4">
                        		<a href="add-user.php" class="btn btn-danger btn-bordered waves-effect w-md waves-light m-b-20" data-animation="fadein"><i class="fa fa-plus"></i> Thêm người dùng</a>
                        	</div><!-- end col -->
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-30">Danh sách quản trị</h4>
                                    <div class="table-responsive">
                                    	<form action="../model/update-admin.php" method="post">
	                                        <table class="table table table-hover m-0">
	                                            <thead>
	                                                <tr>
	                                                    <th>Họ tên</th>
	                                                    <th>Tài khoản</th>
	                                                    <th>Mật khẩu</th>
	                                                    <th>Tùy chọn</th>
	                                                </tr>
	                                            </thead>
	                                            <tbody>
	                                                <?php include '../views/show/show_user_admin.php'; ?>
	                                            </tbody>
	                                        </table>
										</form>
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