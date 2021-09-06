<?php include_once '../model/check_session.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Quản lý bài viết</title>
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
                                    <h4 class="page-title">Quản lý bài viết </h4>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="add-post.php" class="btn btn-danger btn-bordered waves-effect w-md waves-light m-b-20" data-animation="fadein"><i class="fa fa-plus"></i> Thêm bài viết</a>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="p-20">
                                        <div class="row blog-column-wrapper">
                                            <?php include_once '../views/show/show_post_admin.php'; ?>
                                        </div>
                                        <!-- end row -->

                                    </div>
                                </div> <!-- end col -->

                            </div>
                            <!-- end row -->
                        </div>



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

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script>
            $('.blog-column-wrapper').isotope({
                itemSelector: '.col-md-6',
                percentPosition: true,
                masonry: {
                    columnWidth: '.col-md-6'
                }
            });
        </script>


    </body>
</html>