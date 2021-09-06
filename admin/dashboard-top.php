<?php include_once '../model/check_session.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bài viết nổi bật</title>
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

                        <form action="../model/add_post_top.php" method="post">
                            <div class="row">
    							<div class="col-xs-12">
    								<div class="page-title-box">
                                        <h4 class="page-title">Quản lý bài TOP</h4>
                                        <div class="clearfix"></div>
                                    </div>
    							</div>
    						</div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group m-b-20">
                                        <label for="property-location">Chọn khóa học lên TOP</label>
                                        <?php include_once '../views/show/show_all_title_post.php'; ?>
                                    </div>
                                </div> <!-- end col -->

                            </div>
                            <!-- end row -->
                            <div class="row"> 
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-danger btn-bordered waves-effect w-md waves-light m-b-20"><i class="fa fa-plus"></i> Lưu</button>
                                </div><!-- end col -->
                            </div>
                        </form>
                    </div> <!-- container -->

                </div> <!-- content -->

                <?php include_once 'views/footer.php'; ?>

            </div>

        </div>



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