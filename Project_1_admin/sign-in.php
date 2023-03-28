<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="./asset/style/common/bootstrap.min.css">
  <link rel="stylesheet" href="./asset/style/common/">
    <link rel="stylesheet" href="./assets/style/login.css">
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
        header('location:index1.php');

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
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <?php if(isset($errorr)){echo $errorr;} ?>
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Remember password
                </label>
              </div>
              <div class="d-grid">
                <button class="btn btn-success btn-login text-uppercase fw-bold" name="submitbtn" type="submit">Sign
                  in</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="../js/jquery-3.6.3.js></script>
<script src="../js/bootstrap.min.js"></script>
</html>
