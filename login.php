<!DOCTYPE html>
<html lang="en">
<head>

  <title>Login</title>
  <script src="assets/font/fontawesome-pro-5.13.0-web/js/all.min.js" defer></script>
    
  <!-- App CSS -->  
  <link rel="stylesheet" href="./assets/style/common/bootstrap.min.css">
  <link rel="stylesheet" href="Project_1_admin/assets/plugins/bootstrap/css/bootstrap.css">
  <link href="Project_1_admin/assets/style/common/base.css" rel="stylesheet">
<link href="Project_1_admin/assets/style/common/normalize.css" rel="stylesheet">
<link href="Project_1_admin/assets/style/common/reset.css" rel="stylesheet">
  <link href="Project_1_admin/assets/style/login.css" rel="stylesheet">
    <link rel="stylesheet" href="./asset/style/sign-in.css">

</head>

<body>
<?php

if (isset($_POST['submitbtn'])){
    $email ='admin@gmail.com';
    $password ='12345';
    if ($_POST['email']==$email && $_POST['password']==$password){
        $_SESSION['username'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        header("Location:index.php");

    }else{
        $error ='
        <div class="alert alert-danger"> Tai khoan hoac mat khau khong hop le!</div>
        ';
    }
}
?>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
            <form method="post">
              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="floatingInput"  placeholder="name@example.com">
                  <?php if(isset($errorr)){echo $errorr;} ?>
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" id="rememberPasswordCheck" type="checkbox" value>
                <label class="form-check-label" for="rememberPasswordCheck">
                  Remember password
                </label>
              </div>
              <div class="d-grid">
                <button type="submit" name="submitbtn" class="btn btn-success btn-login text-uppercase fw-bold text-white" >Sign
                  in</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="./asset/js/common/bootstrap.bundle.min.js"></script>
<script src="Project_1_admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="./asset/js/common/jquery-1.11.0.min.js"></script>
</html>