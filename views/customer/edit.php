<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update user</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link href="../../Project_1_admin/favicon.ico" rel="shortcut icon">

    <!-- FontAwesome JS-->
    <script src="../../Project_1_admin/assets/font/fontawesome-pro-5.13.0-web/js/all.min.js" defer></script>
    <script src="../../Project_1_admin/assets/plugins/bootstrap/js/bootstrap.min.js" defer></script>

    <!-- App CSS -->
    <link href="../../Project_1_admin/assets/style/common/base.css" rel="stylesheet">
    <link href="../../Project_1_admin/assets/style/common/normalize.css" rel="stylesheet">
    <link href="../../Project_1_admin/assets/style/common/reset.css" rel="stylesheet">
    <link id="theme-style" href="../../Project_1_admin/assets/style/portal.css" rel="stylesheet">
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
                    <h1 class="app-page-title mb-0">Update Người Dùng</h1>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <a class="btn app-btn-secondary bg-danger text-white" href="index.php">
                                    Trở Lại</a>
                            </div>
                        </div><!--//row-->
                    </div><!--//table-utilities-->
                </div><!--//col-auto-->
            </div><!--//row-->
            <?php
            foreach ($customers as $customer){
            ?>
            <div class="card-body">
                <form method="post" action="index.php?controller=customer&action=update">
                    <input type="hidden" name="id" value="<?= $customer['id'] ?>">
                    <div class="mb-3">
                        <label class="form-label">Tên Người Dùng</label>
                        <input class="form-control"  name="username" type="text" placeholder="User Name"
                               value="<?php echo $customer['username']?>"
                        >

                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="exampleInputPassword1">Mật Khẩu</label>
                        <input class="form-control" id="exampleInputPassword1" name="password" type="text" placeholder="Password"
                               value="<?php echo $customer['password']?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label>Địa Chỉ Email</label>
                        <input class="form-control"  name="email" type="email" placeholder="Email"
                               value="<?php echo $customer['email']?>"
                        >

                    </div>
                    <div class="mb-3">
                        <label>Số Điện Thoại</label>
                        <input class="form-control"  name="phone" type="text" placeholder="Phone"
                               value="<?php echo $customer['phone']?>"
                        >

                    </div>
                    <div class="mb-3">
                        <label>Vai Trò</label>
                        <select class="form-control" name="quyen">
                            <option value="admin" selected>Admin</option>
                            <option value="customer"
                                <?php
                                if($customer['role'] == 'customer'){
                                    echo ' selected';
                                }
                                ?>
                            >
                                Customer
                            </option>
                        </select>
                    </div>

                    <button class="btn btn-primary text-white fs-5" name="submit" type="submit">Update User</button>

                </form>
            </div>
            <?php
                }
            ?>
        </div>


    </div>
</div>

    <!--//app-content-->

<!--//app-wrapper-->


<!-- Javascript -->
<script src="../../Project_1_admin/assets/plugins/popper.min.js"></script>
<script src="../../Project_1_admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>


<!-- Page Specific JS -->
<script src="../../Project_1_admin/assets/js/app.js"></script>

</body>
</html>


