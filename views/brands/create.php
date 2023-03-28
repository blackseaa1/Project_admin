<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Category</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link href="favicon.ico" rel="shortcut icon">

    <!-- FontAwesome JS-->
    <script src="assets/font/fontawesome-pro-5.13.0-web/js/all.min.js" defer></script>

    <!-- App CSS -->
    <link href="./assets/style/common/base.css" rel="stylesheet">
    <link href="./assets/style/common/normalize.css" rel="stylesheet">
    <link href="./assets/style/common/reset.css" rel="stylesheet">
    <link id="theme-style" href="./assets/style/portal.css" rel="stylesheet">
</head>

<body class="app">
    <?php
    include 'views/layout/sidebar.php';
    ?>

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Thêm Danh Mục</h1>
                    </div>
                    <div class="col-auto">
                        <div class="page-utilities">
                            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                                <div class="col-auto">
                                    <a class="btn app-btn-secondary bg-danger text-white" href="./category.html">
                                        Trở Lại</a>
                                </div>
                            </div><!--//row-->
                        </div><!--//table-utilities-->
                    </div><!--//col-auto-->
                </div><!--//row-->
                <div class="card-body bg-white p-4 border rounded">
                    <form method="post" action="index.php?controller=brand&action=store">
                        <div class="mb-3">
                            <label class="form-label" for="category">Tên Danh Mục</label>
                            <input class="form-control" id="category" name="category_name" type="text" placeholder="Viết Tên Danh Mục">
                        </div>
                        <button class="btn btn-primary text-white fs-5" name="submit" type="submit">Tạo Mới</button>

                    </form>
                </div>
            </div>

        </div><!--//container-fluid-->
    </div><!--//app-content-->

    <!--//app-wrapper-->


    <!-- Javascript -->
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>


    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script>

</body>
</html>



