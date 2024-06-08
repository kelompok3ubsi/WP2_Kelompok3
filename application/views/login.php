<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?=base_url()?>assets/dist/img/symbol.png" rel="icon" style="radius: 50%;">
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
      margin-top: 40px;
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
    
  
    
    .sign {
  background-image: linear-gradient(to right bottom, #e300ff, #ff00aa, #ff5956, #ffb900, #fffe00);
  border: none;
  font-size: 14px;
  border-radius: 0;
  padding: 4px;
  transition: border-top-left-radius 0.2s ease-in, 
  border-top-right-radius 0.2s ease-in 0.15s, 
  border-bottom-right-radius 0.2s ease-in 0.3s,
  border-bottom-left-radius 0.2s ease-in 0.45s, 
  padding 0.2s ease-in;
  position: relative;
  margin: -28px;
}

.sign__int {
  background-color: #212121;
  color: white;
  border-radius: 0;
  padding: 5px 40px;
  transition: all 0.2s ease-in,
  border-top-left-radius 0.2s ease-in, 
  border-top-right-radius 0.2s ease-in 0.15s, 
  border-bottom-right-radius 0.2s ease-in 0.3s,
  border-bottom-left-radius 0.2s ease-in 0.45s,
  padding 0.2s ease-in;
  font-weight: 600;
  z-index: -1;
  box-shadow: -25px -10px 30px -5px rgba(225, 0, 255, 0.7),
    25px -10px 30px -5px rgba(255, 0, 212, 0.7),
    25px 10px 30px -5px rgba(255, 174, 0, 0.7),
    -25px 10px 30px -5px rgba(255, 230, 0, 0.7);
}

.sign:active .sign__int {
  padding: 10px 30px;
}

.sign:hover {
  border-radius: 1.5em;
}

.sign:hover .sign__int {
  border-radius: 1.3em;
}

.sign:hover .sign__int {
  box-shadow: -15px -10px 30px -5px rgba(225, 0, 255, 0.8),
    15px -10px 30px -5px rgba(255, 0, 212, 0.8),
    15px 10px 30px -5px rgba(255, 174, 0, 0.8),
    -15px 10px 30px -5px rgba(255, 230, 0.8);
}



 .modelViewPort {
            perspective: 1000px;
            width: 20rem;
            aspect-ratio: 1;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: transparent;
            overflow: hidden;
        }

        .eva {
            --EVA-ROTATION-DURATION: 4s;
            transform-style: preserve-3d;
            animation: rotateRight var(--EVA-ROTATION-DURATION) linear infinite alternate;
        }

        .head {
            position: relative;
            width: 6rem;
            height: 4rem;
            border-radius: 48% 53% 45% 55% / 79% 79% 20% 22%;
            background: linear-gradient(to right, white 45%, gray);
        }

        .eyeChamber {
            width: 4.5rem;
            height: 2.75rem;
            position: relative;
            left: 50%;
            top: 55%;
            border-radius: 45% 53% 45% 48% / 62% 59% 35% 34%;
            background-color: #0c203c;
            box-shadow: 0px 0px 2px 2px white, inset 0px 0px 0px 2px black;
            transform: translate(-50%, -50%);
            animation: moveRight var(--EVA-ROTATION-DURATION) linear infinite alternate;
        }

        .eye {
            width: 1.2rem;
            height: 1.5rem;
            position: absolute;
            border-radius: 50%;
        }

        .eye:first-child {
            left: 12px;
            top: 50%;
            background: repeating-linear-gradient(65deg, #9bdaeb 0px, #9bdaeb 1px, white 2px);
            box-shadow: inset 0px 0px 5px #04b8d5, 0px 0px 15px 1px #0bdaeb;
            transform: translate(0, -50%) rotate(-65deg);
        }

        .eye:nth-child(2) {
            right: 12px;
            top: 50%;
            background: repeating-linear-gradient(-65deg, #9bdaeb 0px, #9bdaeb 1px, white 2px);
            box-shadow: inset 0px 0px 5px #04b8d5, 0px 0px 15px 1px #0bdaeb;
            transform: translate(0, -50%) rotate(65deg);
        }

        .body {
            width: 6rem;
            height: 8rem;
            position: relative;
            margin-block-start: 0.25rem;
            border-radius: 47% 53% 45% 55% / 12% 9% 90% 88%;
            background: linear-gradient(to right, white 35%, gray);
        }

        .hand {
            position: absolute;
            left: -1.5rem;
            top: 0.75rem;
            width: 2rem;
            height: 5.5rem;
            border-radius: 40%;
            background: linear-gradient(to left, white 15%, gray);
            box-shadow: 5px 0px 5px rgba(0, 0, 0, 0.25);
            transform: rotateY(55deg) rotateZ(10deg);
        }

        .hand:first-child {
            animation: compensateRotation var(--EVA-ROTATION-DURATION) linear infinite alternate;
        }

        .hand:nth-child(2) {
            left: 92%;
            background: linear-gradient(to right, white 15%, gray);
            transform: rotateY(55deg) rotateZ(-10deg);
            animation: compensateRotationRight var(--EVA-ROTATION-DURATION) linear infinite alternate;
        }

        .scannerThing {
            width: 0;
            height: 0;
            position: absolute;
            left: 60%;
            top: 10%;
            border-top: 180px solid #9bdaeb;
            border-left: 250px solid transparent;
            border-right: 250px solid transparent;
            transform-origin: top left;
            mask: linear-gradient(to right, white, transparent 35%);
            animation: glow 2s cubic-bezier(0.86, 0, 0.07, 1) infinite;
        }

        .scannerOrigin {
            position: absolute;
            width: 8px;
            aspect-ratio: 1;
            border-radius: 50%;
            left: 60%;
            top: 10%;
            background: #9bdaeb;
            box-shadow: inset 0px 0px 5px rgba(0, 0, 0, 0.5);
            animation: moveRight var(--EVA-ROTATION-DURATION) linear infinite;
        }

        @keyframes rotateRight {
            from {
                transform: rotateY(0deg);
            }
            to {
                transform: rotateY(25deg);
            }
        }

        @keyframes moveRight {
            from {
                transform: translate(-50%, -50%);
            }
            to {
                transform: translate(-40%, -50%);
            }
        }

        @keyframes compensateRotation {
            from {
                transform: rotateY(55deg) rotateZ(10deg);
            }
            to {
                transform: rotatey(30deg) rotateZ(10deg);
            }
        }

        @keyframes compensateRotationRight {
            from {
                transform: rotateY(55deg) rotateZ(-10deg);
            }
            to {
                transform: rotateY(70deg) rotateZ(-10deg);
            }
        }

        @keyframes glow {
            from {
                opacity: 0;
            }
            20% {
                opacity: 1;
            }
            45% {
                transform: rotate(-25deg);
            }
            75% {
                transform: rotate(5deg);
            }
            100% {
                opacity: 0;
            }
        }


        .login-container {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }

  .modelViewPort {
    margin-right: 40px;
    margin-top: 20px;
  }

</style>
</head>
<body class="hold-transition login-page">
<div class="curved-shape"></div>
<div class="loader">
  <div class="login-container">
    <div class="modelViewPort">
      <div class="eva">
        <div class="head">
          <div class="eyeChamber">
            <div class="eye"></div>
            <div class="eye"></div>
          </div>
        </div>
        <div class="body">
          <div class="hand"></div>
          <div class="hand"></div>
          <div class="scannerThing"></div>
          <div class="scannerOrigin"></div>
        </div>
      </div>
    </div>
    <div class="login-box">
    <a href="<?=site_url('portofolio')?>">
  <img src="<?=base_url()?>/assets/dist/img/Garage.png" class="logo" style="width: 180px; height: 180px;">
</a>      <div class="card" style="background-color:#000000;">
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
                    <button type="submit" class="sign" name="login">
                    <div class="sign__int">
                      <span class="sign__span">Login</span>
                    </div>
                    </button>
                </div>
                <!-- /.col -->
            </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
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