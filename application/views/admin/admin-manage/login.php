<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login Admin</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('css/sb-admin.css') ?>" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login Admin Survei Mentor OJT || <?php echo $this->session->userdata("status"); ?></div>
      <div class="card-body">

      
        <form action="<?php echo base_url('admin/admin/dologin');?>" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="email_admin" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <input type="submit" class="btn btn-primary btn-block" value="login" >
          <!-- <a class="btn btn-primary btn-block" >Login</a> -->
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>
</body>

</html>
