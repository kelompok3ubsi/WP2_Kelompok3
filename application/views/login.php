<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log In</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">

  <!-- Custom CSS untuk latar belakang -->
  <style>
    body {
      width: 100%;
      height: 100%;
      overflow: hidden;
      position: relative;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      transition: background-image 5s ease-out;
    }

    .login-box {
      background: transparent;
      border-radius: 2px;
      border: 3px solid #0ef;
      box-shadow: 0 0 30px #0ef;
    }

    .logo {
      position: absolute;
      top: 10px;
      left: -10px;
      width: 160px;
      height: auto;
      opacity: 0.8;
      border-radius: 50%; 
    }

    .curved-shape {
      position: absolute;
      left: 0;
      bottom: 350px;
      height: 600px;
      width: 550px;
      background: linear-gradient(45deg, rgba(0, 0, 0), rgba(0, 0, 0));
      transform: rotate(-20deg) skewY(-20deg);
      transform-origin: bottom left;
      outline: 2px solid #0ef;
      box-shadow: 0 0 30px #0ef;
    }
</style>
</head>
<body class="hold-transition login-page">
<div class="curved-shape"></div>
<div class="login-box">
    <img src="<?=base_url()?>/assets/dist/img/Garage.png" class="logo" style="width: 180px; height: 180px;">
  <div class="card" style="background-color:#000000;">
    <div class="card-header text-center">
      <a href="<?=base_url()?>" class="h3" style="color:white;">
          <img src="<?=base_url()?>/assets/dist/img/symbol.png" alt="garage logo" class="brand-image img-circle elevation-3" style="width: 50px; height: 50px; margin-left: 5px; opacity: .8;">
          <b>Garage</b> Genius
      </a>
    </div>
    <div class="card-body">
      <p class="login-box-msg" style="color:white;">Sign in to start your session</p>

      <form action="<?=site_url('auth/process')?>" method="post">
        <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="icheck-primary">
                </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block" name="login">Sign In</button>
            </div>
            <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>

<script>
    var backgrounds = [
        '<?=base_url()?>assets/dist/img/moon.jpg',
        '<?=base_url()?>assets/dist/img/img6.jpg',
        '<?=base_url()?>assets/dist/img/img4.jpg',
        '<?=base_url()?>assets/dist/img/img3.jpg',
        '<?=base_url()?>assets/dist/img/img5.jpg',
        '<?=base_url()?>assets/dist/img/img2.jpg'
    ];

    var currentBackgroundIndex = 0;

    function changeBackground() {
        document.body.style.backgroundImage = 'url(' + backgrounds[currentBackgroundIndex] + ')';
        currentBackgroundIndex = (currentBackgroundIndex + 1) % backgrounds.length;
    }

    changeBackground(); 
    setInterval(changeBackground, 20000); 
</script>