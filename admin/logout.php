<?php 
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Đăng xuất thành công</title>
        <?php include_once 'views/header.php'; ?> 
    </head>


    <body class="bg-transparent">

        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box">
                                    <h2 class="text-uppercase">
                                        <a href="index.html" class="text-success">
                                            <span><img src="assets/images/logo.png" alt="" height="36"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <div class="text-center m-b-20">
                                        <div class="m-b-20">
                                            <div class="checkmark">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                                  <circle class="path circle" fill="none" stroke="#4bd396" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                                                  <polyline class="path check" fill="none" stroke="#4bd396" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
                                                </svg>
                                            </div>
                                        </div>

                                        <h3>Hẹn Gặp Lại !</h3>

                                        <p class="text-muted font-13 m-t-10"> Bây giờ bạn đã đăng xuất thành công. </p>
                                    </div>

                                </div>
                            </div>
                            <!-- end card-box-->


                            <div class="row m-t-30">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Quay lại <a href="login.php" class="text-primary m-l-5 m-r-5"><b>Đăng Nhập</b></a> Hoặc <a href="/index.php" class="text-primary m-l-5"><b>Trang Chủ</b></a></p>
                                </div>
                            </div>

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->

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

    </body>
</html>