<?php
    include_once '../model/check_session.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Đổi mật khẩu</title>
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
                                    <h4 class='page-title'>Đổi mật khẩu</h4>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-20">
                                    <div class="">
                                        <form action='../model/update_password.php' method='post'>
                                            <div class="form-group m-b-20">
                                                <label for="exampleInputEmail1">Mật khẩu cũ <span style="color: red">*</span></label>
                                                <input type="password" class="form-control" id="exampleInputEmail1"  name="old-password" autocomplete="off">
                                            </div>
                                            <div class="form-group m-b-20">
                                                <label for="exampleInputEmail1">Mật khẩu mới <span style="color: red">*</span></label>
                                                <input type="password" class="form-control" id="exampleInputEmail1"  name="password" autocomplete="off">
                                            </div>
                                            <div class="form-group m-b-20">
                                            	<label for="exampleInputEmail1">Nhập lại mật khẩu <span style="color: red">*</span></label>
                                                <input type="password" class="form-control" id="exampleInputEmail1"  name="repassword" autocomplete="off">
                                            </div>
                                            <button type='submit' class='btn btn-purple waves-effect waves-light'>Thay đổi</button>
                                            <a href="/admin/index.php"><button type="button" class="btn btn-danger waves-effect waves-light">Thoát</button></a>
                                        </form>
                                    </div>
                                </div> <!-- end p-20 -->
                            </div> <!-- end col -->
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
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!--Summernote js-->
        <script src="../plugins/summernote/summernote.min.js"></script>
        <!-- Select 2 -->
        <script src="../plugins/select2/js/select2.min.js"></script>
        <!-- Jquery filer js -->
        <script src="../plugins/jquery.filer/js/jquery.filer.min.js"></script>

        <!-- page specific js -->
        <script src="assets/pages/jquery.blog-add.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

       <script>

            jQuery(document).ready(function(){
                $('#summernote').summernote({
                    height: 480,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
                // Select2
                $(".select2").select2();

                $(".select2-limiting").select2({
                    maximumSelectionLength: 2
                });
                $('#summernote').html($('#summernote').summernote('code'));
                $("#filer_input1").attr('name','avatar');
            });
        </script>

    </body>
</html>