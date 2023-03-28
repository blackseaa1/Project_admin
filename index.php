<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="Project_1_admin/favicon.ico" rel="shortcut icon">

    <!-- FontAwesome JS-->
    <script src="Project_1_admin/assets/plugins/fontawesome/js/all.min.js" defer></script>


    <!-- App CSS -->
    <link rel="stylesheet" href="Project_1_admin/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link href="Project_1_admin/assets/style/common/base.css" rel="stylesheet">
    <link href="Project_1_admin/assets/style/common/normalize.css" rel="stylesheet">
    <link href="Project_1_admin/assets/style/common/reset.css" rel="stylesheet">
    <link id="theme-style" href="Project_1_admin/assets/style/portal.css" rel="stylesheet">

</head>
<body>

</body>
<script src="Project_1_admin/assets/plugins/popper.min.js"></script>
<script src="Project_1_admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Charts JS -->
<script src="Project_1_admin/assets/plugins/chart.js/chart.min.js"></script>
<script src="Project_1_admin/assets/js/index-charts.js"></script>

<!-- Page Specific JS -->
<script src="Project_1_admin/assets/js/app.js"></script>
</html>
<?php

$controller='';
if (isset($_GET['controller'])){

    $controller =$_GET['controller'];
}
switch ($controller){
    case '':
        include_once './views/index.php';
        break;
    case 'order':
        include_once './controller/orderController.php';
        break;
    case 'product':
        include_once './controller/productController.php';
        break;
    case 'customer':
        include_once './controller/customerController.php';
        break;
    case 'brand':
        include_once './controller/brandController.php';
        break;
    case 'logout':
        include_once './controller/userController.php';
        break;
    default:
        echo "Chua co controller nao";
        break;
}
?>