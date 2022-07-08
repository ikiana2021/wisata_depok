<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url();?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url();?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url();?>/assets/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?= base_url();?>" class="h1">Login</a>
    </div>
    <?php 
        $session = session();
        $login = $session->getFlashdata('login');
        $username = $session->getFlashdata('username');
        $password = $session->getFlashdata('password');
        $status = $session->getFlashdata('status');
    ?>
    <div class="card-body">
        <?php if($username){ ?>
            <p class="login-box-msg"><?php echo $username?></p>
        <?php } ?>
        
        <?php if($status){ ?>
            <p class="login-box-msg"><?php echo $status?></p>
        <?php } ?>

        <?php if($password){ ?>
            <p class="login-box-msg"><?php echo $password?></p>
        <?php } ?>
        
        <?php if($login){ ?>
            <p class="login-box-msg"><?php echo $login?></p>
        <?php } ?>
        <br>
      <form action="/auth/valid_login" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
      </form>
      <p class="mb-0">
        <a href="/auth/register" class="text-center">Register a new member</a>
      </p>
    </div>
  </div>
</div>

<script src="<?= base_url();?>/assets/plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url();?>/assets/js/adminlte.min.js"></script>
</body>
</html>
