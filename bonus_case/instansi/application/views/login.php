<!doctype html>
<html lang="en">
  <head>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap1.css'); ?>" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/bootstrap/css/floating-labels.css'); ?>" rel="stylesheet">
  </head>
  <body>
    <form class="form-signin form-horizontal" id="form" enctype="multipart/form-data" action="<?php echo base_url('Login/aksi_login'); ?>" method="POST">
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Login Admin</h1>
      </div>

      <div class="form-label-group">
        <input name="username" type="username" id="username" class="form-control" placeholder="Username" required autofocus>
        <label for="username">Username</label>
      </div>

      <div class="form-label-group">
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
</body>
</html>
