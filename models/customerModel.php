<?php

function index(){
    $search='';
    if (isset($_POST['search'])){
        $search=$_POST['search'];
    }
//    $search=$_GET['search'];
    include_once 'connect/openConnnect.php';
    $sql_search="select * from tbl_account where username like '%$search%'";
    $customers = mysqli_query($connect,$sql_search);
    $sqlCount="SELECT COUNT(*) as count_record FROM tbl_account";
    $counts = mysqli_query($connect,$sqlCount);
    foreach ($counts as $each){
        $countRecord=$each['count_record'];
    }
    $recordOnepage =3;
    $countpage=ceil($countRecord/$recordOnepage);
//    $sql_select= "select * from tbl_account";
//    $customers = mysqli_query($connect,$sql_select);
    include_once './connect/closeConnect.php';
//    $array = array();
//    $array['search'] = $search;
//    $array['infor'] = $brands;
//    $array['page'] = $countPage;
//    return $array;
    return $customers;
}
function store(){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $role=$_POST['role'];
    include_once 'connect/openConnnect.php';
    $sql = "INSERT INTO tbl_account (username,password,email,phone,role) 
       values('$username','$password','$email','$phone','$role')";
    mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
}
function edit(){
    $id=$_GET['id'];
    include_once './connect/openConnnect.php';
    $sql="Select * from tbl_account where id='$id'";
    $customers=mysqli_query($connect,$sql);
    include_once './connect/closeConnect.php';
    return $customers;
}
function update(){
    $id=$_POST['id'];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $role=$_POST['quyen'];
    include_once './connect/openConnnect.php';
    $sql_update="UPDATE tbl_account SET username='$username',password='$password',email='$email',phone='$phone',role='$role' where id='$id'";
    mysqli_query($connect,$sql_update);
    include_once './connect/closeConnect.php';
}
//fucntion xóa dữ liệu trên db
function destroy(){
    $id = $_GET['id'];
    include_once './connect/openConnnect.php';
    $sql = "DELETE FROM tbl_account WHERE id = '$id'";
    mysqli_query($connect, $sql);
    include_once './connect/closeConnect.php';
}
switch ($action){
    case'':
        // Lay du lieu tu DB ve
        $customers=index();
        break;
    case 'store':
        store();
        break;
    case 'edit':
       $customers= edit();
       break;
    case 'update':
        update();
        break;
    case 'destroy':
        //xóa dữ liệu trên db
        destroy();
        break;
}
?>
