<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>Dashboard
                  <small>Control Panel</small>
                </h2>
            </div>
            <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><i class="fas fa-tachometer-alt"><span> &rarr;</span></i> Home</li>

    </ol>
</div>
        </div>
    </div>
</section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-shopping-cart"></i></span>
            <div class="info-box-content"></i>
            <span calss="info-box-text">Items</span>
            <span calss="info-box-number"><?=$this->fungsi->count_item()?></span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-truck"></i></span>
            <div class="info-box-content"></i>
            <span calss="info-box-text">Suppliers</span>
            <span calss="info-box-number"><?=$this->fungsi->count_supplier()?></span>
            </div>
          </div>
        </div>

        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>
            <div class="info-box-content"></i>
            <span calss="info-box-text">Customers</span>
            <span calss="info-box-number"><?=$this->fungsi->count_customer()?></span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-user-plus"></i></span>
            <div class="info-box-content"></i>
            <span calss="info-box-text">Users</span>
            <span calss="info-box-number"><?=$this->fungsi->count_user()?></span>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

    </section>