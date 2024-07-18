<?php

$directoryURI = $_SERVER['REQUEST_URI'];

$path = parse_url($directoryURI,PHP_URL_PATH);

$components = explode('/',$path);

$page = $components[2];

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GarageGenius</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="<?=base_url()?>/assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/brands.min.css"> 
  <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/sweetalert2/sweetalert2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/sweetalert2/animate.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/assets/dist/css/style.css">

  <script src="<?=base_url()?>/assets/plugins/jquery/jquery.min.js"></script>
  <style>
    .swal2-popup {
      font-size: 1.1rem !important;
    }


    .logout {
  --black: #000000;
  --ch-black: #141414;
  --eer-black: #1b1b1b;
  --night-rider: #2e2e2e;
  --white: #ffffff;
  --af-white: #f3f3f3;
  --ch-white: #e1e1e1;
  border-radius: 8px;
  width: 140px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  padding: 0px 15px;
  border: none;
  color: var(--white);
  position: relative;
  cursor: pointer;
  font-weight: 700;
  transition-duration: .2s;
  background-color: var(--ch-black);
  text-transform: uppercase;
}

.logout:before, .logout:after {
  content: '';
  position: absolute;
  left: -2px;
  top: -2px;
  border-radius: 10px;
  background: linear-gradient(45deg, 
  var(--ch-black), var(--eer-black),
  var(--night-rider), var(--ch-white), var(--night-rider), 
	var(--eer-black), var(--ch-black),var(--ch-black));
  background-size: 400%;
  width: calc(100% + 4px);
  height: calc(100% + 4px);
  z-index: -1;
  animation: steam 20s linear infinite;
}

@keyframes steam {
  0% {
    background-position: 0 0;
  }

  50% {
    background-position: 400% 0;
  }

  100% {
    background-position: 0 0;
  }
}

.logout:after {
  filter: blur(50px);
}




.main-footer {
            background-color: black;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .footer-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            max-width: 1200px;
        }
        
        .pyramid-loader {
            position: relative;
            margin-right: 20px;
            width: 70px;  
            height: 70px; 
            display: block;
            transform-style: preserve-3d;
            transform: rotateX(-20deg);
        }

        .piramid {
            position: relative;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            animation: spin 4s linear infinite;
        }

        @keyframes spin {
            100% {
                transform: rotateY(360deg);
            }
        }

        .piramid .side {
            width: 70px;
            height: 70px;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            transform-origin: center top;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        }

        .piramid .side1 {
            transform: rotateZ(-30deg) rotateY(90deg);
            background: conic-gradient(#2BDEAC, #F028FD, #D8CCE6, #2F2585);
        }

        .piramid .side2 {
            transform: rotateZ(30deg) rotateY(90deg);
            background: conic-gradient(#2F2585, #D8CCE6, #F028FD, #2BDEAC);
        }

        .piramid .side3 {
            transform: rotateX(30deg);
            background: conic-gradient(#2F2585, #D8CCE6, #F028FD, #2BDEAC);
        }

        .piramid .side4 {
            transform: rotateX(-30deg);
            background: conic-gradient(#2BDEAC, #F028FD, #D8CCE6, #2F2585);
        }

        .piramid .shadow {
            width: 60px;
            height: 60px;
            background: #8B5AD5;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            transform: rotateX(90deg) translateZ(-40px);
            filter: blur(12px);
        }

        .footer-text {
        display: flex;
        justify-content: flex-start;
        align-items: flex-end;
        color: white;
      }
  </style>
</head>
<body class="hold-transition sidebar-mini<?= $this->uri->segment(1) == 'sale' ? ' sidebar-collapse' : '' ?>">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #0390fc;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa-brands fa-windows"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

    
       <!-- User Account -->
        <li class="dropdown user user-menu" style="margin-top: 9px; margin-right: 15px;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white;">  
                <img src="<?=base_url()?>assets/dist/img/male.png" class="user-image"> 
                <span class="hidden-xs" style="color: white; padding: 5px;"><?=$this->fungsi->user_login()->username?></span>
          </a>
            <ul class="dropdown-menu" style="background-color: #03b6fc;">
                <li class="user-header">
                    <img src="<?=base_url()?>assets/dist/img/male.png" class="img-circle">
                    <p><?=$this->fungsi->user_login()->name?>
                    <small style="color: black;"><?=$this->fungsi->user_login()->address?></small>
                    </p>
                </li>
                <li class="user-footer d-flex justify-content-between" style="background-color: var(--black);">
  <div style="margin-left: 65px;">
    <button class="logout" onclick="window.location.href='<?=site_url('auth/logout')?>'">
      Sign Out
    </button>
  </div>
</li>

            </ul>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url('dashboard')?>" class="brand-link" style="background-color: #0390fc;">
      <img src="<?=base_url()?>/assets/dist/img/Garage.png" alt="garage logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-textbrand-text font-weight-light" style="color: white;"><b>GarageGenius</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url()?>/assets/dist/img/male.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=ucfirst($this->fungsi->user_login()->username)?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header" style="color: grey;">MAIN NAVIGATION</li>
          <li class="nav-item">
            <a href="<?=site_url('dashboard')?>" class="<?php if(site_url('dashboard') == current_url()){echo "nav-link active";}else{echo "nav-link";}?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=site_url('supplier')?>" class="<?php if(site_url('supplier') == current_url()){echo "nav-link active";}else{echo "nav-link";}?>">
              <i class="nav-icon fas fa-truck"></i>
              <p>
                Suppliers
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="<?=site_url('customer')?>" class="nav-link <?php if(site_url('customer') == current_url()){echo "active";}?>">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                      Customers
                  </p>
              </a>
          </li>
          <li class="nav-item has-treeview <?= $this->uri->segment(1) == 'category' || $this->uri->segment(1) == 'unit' || $this->uri->segment(1) == 'item' ? 'menu-open' : '' ?>">
                            <a href="#" class="nav-link <?= $this->uri->segment(1) == 'category' || $this->uri->segment(1) == 'unit' || $this->uri->segment(1) == 'item' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-archive"></i>
                                <p>
                                    Products
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= site_url('category') ?>" class="nav-link <?= $this->uri->segment(1) == 'category' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Categories</p>
                                    </a>
                                <li class="nav-item">
                                    <a href="<?= site_url('unit') ?>" class="nav-link <?= $this->uri->segment(1) == 'unit' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Units</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('item') ?>" class="nav-link <?= $this->uri->segment(1) == 'item' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Items</p>
                                    </a>
                                </li>
                        </li>
                    </ul>
                    </li>
                    <li class="nav-item has-treeview <?= $this->uri->segment(1) == 'sales' || $this->uri->segment(2) == 'in' || $this->uri->segment(2) == 'out' ? 'menu-open' : '' ?>">
                        <a href="#" class="nav-link <?= $this->uri->segment(1) == 'sales' || $this->uri->segment(2) == 'in' || $this->uri->segment(2) == 'out' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-shopping-cart"></i>
                            <p>
                                Transaction
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= site_url('sale') ?>" class="nav-link  <?= $this->uri->segment(1) == 'sales' ? 'active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sales</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= site_url('stock/in'); ?>" class="nav-link <?= $this->uri->segment(2) == 'in' ? 'active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Stock In</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= site_url('stock/out'); ?>" class="nav-link <?= $this->uri->segment(2) == 'out' ? 'active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Stock Out</p>
                                </a>
                            </li>
                        </ul>
                    </li>
            <li class="nav-item">
              <a href="<?=site_url('report/sale')?>" class="nav-link <?php if(site_url('report/sale') == current_url()){echo "active";}?>">
                <i class="far fa-chart-bar nav-icon"></i>
                <p>Sales Report</p>
              </a>
            </li>
          <?php if($this->fungsi->user_login()->level == 1) { ?>
          <li class="nav-header" style="color: grey;">SETTINGS</li>
          <li class="nav-item">
          <a href="<?=site_url('user')?>" class="<?php if(site_url('user') == current_url()){echo "nav-link active";}else{echo "nav-link";}?>">
              <i class="fas fa-user"></i>
              <p>Users</p>
            </a>
          </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 

  <!-- Content Wrapper-->
  <div class="content-wrapper">
        <?php echo $contents ?>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
        <div class="footer-content">
            <div class="footer-text">
                <strong>Copyright &copy; 2024 <a href="https://www.instagram.com/assuraa_" style="color: #0073FE;">GarageGenius</a>.</strong> All rights reserved.
            </div>
            <div class="pyramid-loader" >
                <div class="piramid" style="margin-left:200px;">
                    <span class="side side1"></span>
                    <span class="side side2"></span>
                    <span class="side side3"></span>
                    <span class="side side4"></span>
                    <span class="shadow"></span>
                </div>
            </div>
        </div>
    </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Bootstrap 4 -->
<script src="<?=base_url()?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>/assets/dist/js/adminlte.min.js"></script>
<script src="<?=base_url()?>/assets/dist/js/demo.js"></script>

<script src="<?=base_url()?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

<script src="<?=base_url()?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script>
var flash= $('#flash').data('flash');
if(flash) {
  Swal.fire({
    icon: "success",
    title: "Success",
    text: flash,
    showClass: {
    popup: `
      animate__animated
      animate__jackInTheBox
    `
  },
  hideClass: {
    popup: `
      animate__animated
      animate__zoomOut
    `
  }
  });   
}

$(document).on('click', '#btn-hapus', function(e) {
  e.preventDefault();
  var link = $(this).attr('href');

  const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: "btn btn-success",
    cancelButton: "btn btn-danger mr-3"
  },
  buttonsStyling: false
});
swalWithBootstrapButtons.fire({
  title: "Apakah anda yakin lillahi ta'ala?",
  text: "Data akan dihapus loh ges!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonText: "Ya, hapus!",
  cancelButtonText: "Cancel",
  reverseButtons: true,
  showClass: {
    popup: `
      animate__animated
      animate__bounceInDown
    `
  },
}).then((result) => {
  if (result.isConfirmed) {
    window.location = link;
    
  } else if (
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire({
      title: "Cancelled",
      text: "Alhamdulillah, data masih aman 😊",
      icon: "error"
    });
  }
});
})
</script>


<script>
  $(document).ready(function() {
    $('#table1').DataTable()
  })
</script>


</body>
</html>