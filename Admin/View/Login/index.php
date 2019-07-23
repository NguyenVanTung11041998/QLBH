<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Bootstrap core CSS-->
  <link href="Public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="Public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="Public/admin/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="" method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="txtTaiKhoan" name="txtTaiKhoan" class="form-control" placeholder="Email address" required="required" autofocus="autofocus" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username'];?>">
              <label for="txtTaiKhoan">Tài khoản</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="txtMatKhau" name="txtMatKhau" class="form-control" placeholder="Password" required="required" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'];?>">
              <label for="txtMatKhau">Mật khẩu</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me" name="remember_me" <?php if(isset($_COOKIE['username'])) echo 'checked="checked"';?>>
                Remember Password
              </label>
            </div>
          </div>
          <!-- <a class="btn btn-primary btn-block" href="Index.php?controller=login-admin">Login</a> -->
          <input class="btn btn-primary btn-block" type="submit" name="btnLogin" value="Đăng nhập" />
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="View/vendor/jquery/jquery.min.js"></script>
  <script src="View/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="View/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
