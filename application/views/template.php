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
  <title>Speed Bengkel</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="<?=base_url()?>/assets/dist/css/adminlte.min.css">

  <script src="<?=base_url()?>/assets/plugins/jquery/jquery.min.js"></script>
</head>
<body class="hold-transition sidebar-mini<?= $this->uri->segment(1) == 'tsale' ? ' sidebar-collapse' : '' ?>">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #0390fc;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search" style="color: white;"></i>
        </a>
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
                <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="user-image"> 
                <span class="hidden-xs" style="color: white; padding: 5px;"><?=$this->fungsi->user_login()->username?></span>
          </a>
            <ul class="dropdown-menu" style="background-color: #03b6fc;">
                <li class="user-header">
                    <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle">
                    <p><?=$this->fungsi->user_login()->name?>
                    <small style="color: black;"><?=$this->fungsi->user_login()->address?></small>
                    </p>
                </li>
                <li class="user-footer d-flex justify-content-between">
                  <div style="margin-left: 5px;">
                      <a href="#" class="btn btn-flat bg-black">Profile</a>
                  </div>
                  <div style="margin-left: 95px;">
                      <a href="<?=site_url('auth/logout')?>" class="btn btn-flat bg-red">Sign Out</a>
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
      <img src="<?=base_url()?>/assets/dist/img/speed.jpg" alt="speed logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-textbrand-text font-weight-light" style="color: white;">Speed Bengkel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url()?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-archive"></i>
              <p>
                Products
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=site_url('category')?>" class="<?php if(site_url('category') == current_url()){echo "nav-link active";}else{echo "nav-link";}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('unit')?>" class="<?php if(site_url('unit') == current_url()){echo "nav-link active";}else{echo "nav-link";}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Units</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('item')?>" class="<?php if(site_url('item') == current_url()){echo "nav-link active";}else{echo "nav-link";}?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Items</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?=site_url('#')?>" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Transaction
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=site_url('sale')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('stock/in')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stock In</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('stock/out')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stock Out</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?=site_url('report')?>" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="report/sale" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sales Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stocks</p>
                </a>
              </li>
            </ul>
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

  <footer class="main-footer" style="background-color: black;">
    <div class="float-right d-none d-sm-block" style="color: white;">
      <b>Version</b> 3.2.0
    </div>
    <strong style="color: white;">Copyright &copy; 2024 <a href="https://www.instagram.com/assuraa_">Muhammad Helmi Assura</a>.</strong> All rights reserved.
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

<script>
$(document).ready(function(){
  function markActiveLink(selector) {
    if(window.location.href.indexOf(selector) > -1) {
      $('.nav-item:has(a[href*="' + selector + '"])').parents('.nav-item').addClass('menu-open');
      $('a[href*="' + selector + '"]').addClass('active');
    }
  }

  markActiveLink('category');
  markActiveLink('unit');
  markActiveLink('item');
  markActiveLink('sale');
  markActiveLink('stock/in');
  markActiveLink('stock/out');
  markActiveLink('report/sale');


  $('.nav-item .nav-link').on('click', function(){
    $('.nav-item .nav-link').removeClass('active');
    $(this).addClass('active');
  });
});
</script>

<script>
  $(document).ready(function() {
    $('#table1').DataTable()
  })
</script>

</body>
</html>
