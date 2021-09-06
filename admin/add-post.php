<?php
    include_once '../model/check_session.php';
    $description_n = "";
    include_once '../views/show/show_detailed_post_admin.php';
    $description = htmlentities($description);
    include_once '../model/show_kind_post.php';
    if ($kiem_tra == 1) {
        $get_infor = $connect->build_query([
            "table" => "post_company",
            "select" => "*",
            "where" => "id_teacher = '{$id_post}'"
        ])->select();
        $kind = '';
        while ($row = mysqli_fetch_array($get_infor)) {
            $kind = $row['name_skill'];
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            if ($kiem_tra == 1) {
                echo "<title>Sửa bài viết tin tức</title>";
            } else {
                echo "<title>Thêm bài viết tin tức</title>";
            }
        ?>
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
                                    <?php 
                                        if ($kiem_tra == 1) {
                                            echo "<h4 class='page-title'>Sửa bài viết: $name_post</h4>";
                                        } else {
                                            echo "<h4 class='page-title'>Thêm bài viết</h4>";
                                        }
                                    ?>
                                    
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-20">
                                    <div class="">
                                        <?php 
                                            if ($kiem_tra == 1) {
                                                echo "<form action='../model/update_post.php' method='post' enctype='multipart/form-data'>
                                                <input type='hidden' name='id_post' value='{$id_post}'>
                                                <input type='hidden' name='avatar' value='{$avatar}'>
                                                ";
                                            } else {
                                                echo "<form action='../model/add_post.php' method='post' enctype='multipart/form-data'>";
                                            }
                                        ?>
                                            <div class="form-group m-b-20">
                                                <label for="exampleInputEmail1">Tên bài viết</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $name_post ?>" name="name-post" placeholder="Nhập tên...">
                                            </div>
                                            
                                            <div class="form-group m-b-20">
                                                <label for="property-desc">Giới thiệu ngắn </label>
                                                <textarea class="form-control" id="property-desc" rows="5" maxlength="255" name="description-n" required><?php echo $description_n; ?></textarea>
                                            </div>

                                            <div class="form-group m-b-20">
                                                <label>Nội dung bài viết</label>
                                                <textarea id="summernote" name="description"><?php echo $description ?></textarea>
                                            </div>

                                            <div class="form-group m-b-20">
                                                <label>Ảnh bài viết</label>
                                                <input type="file" name="avatar" id="filer_input1"
                                                               multiple="multiple">
                                            </div>
                                            <div class="form-group m-b-20">
                                                <img class="img-responsive">
                                            </div>
                                            <div class="form-group m-b-20">
                                                <div class="form-group m-b-20">
                                                    <label>Loại bài viết: <span style="color: #f44336;">*</span></label>
                                                    <div class="row">
                                                        <?php
                                                        if ($kiem_tra == 1) {
                                                            get_kind_update($kind);
                                                        } else {
                                                            get_kind_add();
                                                        }
                                                        ?>
                                                    </div> <!-- end row -->
                                                </div>
                                            </div>
                                            <?php 
                                                if ($kiem_tra == 1) {
                                                    echo "<button type='submit' class='btn btn-purple waves-effect waves-light'>Lưu bài viết</button>";
                                                } else {
                                                    echo "<button type='submit' class='btn btn-purple waves-effect waves-light'>Lưu và đăng bài</button>";
                                                }
                                            ?>
                                            
                                            <a href="/admin/dashbroad-post.php"><button type="button" class="btn btn-danger waves-effect waves-light">Thoát</button></a>
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
        </div>

        <script>
            var resizefunc = [];
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        
        <script src="plugins/switchery/switchery.min.js"></script>

        <!--Summernote js-->
        <script src="plugins/summernote/summernote.min.js"></script>
        <!-- Select 2 -->
        <script src="plugins/select2/js/select2.min.js"></script>
        <!-- Jquery filer js -->
        <script src="plugins/jquery.filer/js/jquery.filer.min.js"></script>

        <!-- page specific js -->
        <script src="assets/pages/jquery.blog-add.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Mô tả chi tiết',
                height: 500,
                minHeight: null,
                maxHeight: null,
                focus: true,
                callbacks: {
                    onImageUpload: function(files)
                    {
                        for(var i = 0; i < files.length; i++)
                        {
                            upFile(files[i]);
                        }
                    }
                },
                insertTableMaxSize: {
                  col: 20,
                  row: 20
                }
            });
            function upFile(file) {
                if(file.type.includes('image')) {
                    var name = file.name.split(".");
                    name = name[0];  
                    var data = new FormData();
                    data.append('file', file);
                    $.ajax({
                        url: 'upload_images.php',
                        type: 'POST',
                        contentType: false,
                        cache: false,
                        processData: false,
                        dataType: 'JSON',
                        data: data,
                        success: function (response) 
                        {
                            if(response.is_ok)
                            {
                                var url = '../'+response.url;
                                $('#summernote').summernote('insertImage', url, name);
                            }
                            else
                            {
                                console.log(response.error);
                            }
                        }
                    })
                    .fail(function(e) {
                        console.log(e);
                    });
                } else {
                    console.log("Đừng cố tải cái gì lên khác ngoài ảnh :>");
                }
            }
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