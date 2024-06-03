<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <script src="<?=base_url()?>/assets/plugins/chart.js/Chart.min.js"></script>
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Dashboard
					<small style="color:grey;">Panel Control</small>
				</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#"><i class="fa-solid fa-house"></i></a></li>
					<li class="breadcrumb-item active">Dashboard</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!-- Main content -->
<section class="content" >
	<div class="container-fluid">
		<!-- Info boxes -->
		<div class="berhasil-login" data-flashdata="<?= $this->session->flashdata('pesan') ?>">
		</div>
		<div class="row">
		<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h4 style="color:black; margin-top:5px;"><b>Total</b></h4>

              <p style="color:#ECEAE9; margin-top:20px;"><b><?=$this->fungsi->count_item()?> Items</b></p>
              </div>
              <div class="icon">
                <i class="fa fa-shopping-cart"></i>
              </div>
              <a href="<?= site_url('item') ?>" class="small-box-footer" id="item">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h4 style="color:black; margin-top:5px;"><b>Total</b></h4>

              <p style="color:#ECEAE9; margin-top:20px;"><b><?=$this->fungsi->count_supplier()?> Suppliers</b></p>
              </div>
              <div class="icon">
                <i class="fa fa-truck"></i>
              </div>
              <a href="<?= site_url('supplier') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color:orange;">
              <div class="inner">
                <h4 style="color:black; margin-top:5px;"><b>Total</b></h4>

                <p style="color:#ECEAE9; margin-top:20px;"><b><?=$this->fungsi->count_customer()?> Customers</b></p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="<?= site_url('customer') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h4 style="color:black; margin-top:5px;"><b>Total</b></h4>

              <p style="color:#ECEAE9; margin-top:20px;"><b><?=$this->fungsi->count_user()?> Users</b></p>
              </div>
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <a href="<?=site_url('user')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
			<!-- /.col -->
		</div>

		<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title"><i class="fas fa-chart-pie" style="color:black; margin-right:5px;"></i><b> Static Penjualan</b></h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body" style="background-color:black;">
        <div class="row">
            <div class="col-md-8">
                <div class="chart">
                    <canvas id="areaChart" style="min-height: 350px; height: 250px; max-height: 350px; max-width: 100%;"></canvas>
                </div>
            </div>
            <div class="col-md-4">
                <div class="goal-completion">
                    <p class="text-center text-white"><strong>Completion Total Stock</strong></p>
					<?php foreach ($item as $item): ?>
						<div class="progress-group">
							<span class="text-white"><?= $item->name ?></span>
							<span class="float-right text-white"><b><?= $item->stock ?></b>/400</span>
							<?php
								$progress_color = '';
								if ($item->stock <= 100) {
									$progress_color = 'bg-danger'; 
								} elseif ($item->stock <= 200) {
									$progress_color = 'bg-warning';
								} elseif ($item->stock <= 300) {
									$progress_color = 'bg-info';
								} else {
									$progress_color = 'bg-success';
								}
							?>
							<div class="progress progress-sm">
								<div class="progress-bar <?= $progress_color ?>" style="width: <?= ($item->stock / 400) * 100 ?>%"></div>
							</div>
						</div>
					<?php endforeach; ?>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
</div>



		<div class="row">
			<div class="col-12">
				<div class="card card-primary">
					<div class="card-header border-0" style="margin-top:6px;">
						<h3 class="card-title">
							<i class="fa-solid fa-money-bill-trend-up" style="color:black; margin-right:5px;"></i> 
							<b> Products In Demand</b>
						</h3>
						<div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
						</div>
					</div>
					<div class="card-body table-responsive">
						<table class="table table-bordered table-striped" id="table1">
							<thead style="background-color:black;">
								<tr>
									<th style="color:white;">Product</th>
									<th style="color:white;">Price</th>
									<th style="color:white;">Sales</th>
									<th style="text-align: center; color:white;">Detail</th>
								</tr>
							</thead>
							<tbody>
								<?php if(@$product): 
									foreach ($product as $p) { ?>
									<tr>
										<td>
											<img src="<?= base_url('/uploads/product/' . $p->image); ?>" alt="Product 1" class="img-circle img-size-32 mr-2">
											<?= $p->name ?>
										</td>
										<td><?= indo_currency($p->price); ?></td>
										<td>
											<small class="text-success mr-1">
												<i class="fas fa-arrow-up"></i>
												<?php
												$percentage_sold = ($p->qty / $p->stock) * 100;
												echo number_format($percentage_sold, 2) . '%';
												?>
											</small>
											<?= $p->qty.' Item' ?> Sold
										</td>
										<td align="center">
											<a href="<?=site_url('report/sale')?>" class="text-muted">
												<i class="fas fa-search"></i>
											</a>
										</td>
									</tr>
								<?php } 
								endif;
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
		


<script>
    $(function () {
        var areaChartCanvas = $('#areaChart').get(0).getContext('2d');
        
        var productNames = <?= json_encode(array_column($product, 'name')) ?>;

		var productQtys = <?= json_encode(array_column($product, 'qty')) ?>;
        
        var areaChartData = {
            labels: productNames, 
            datasets: [{
                    label: 'Digital Goods',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: productQtys
                },
                {
                    label: 'Electronics',
                    backgroundColor: 'rgba(210, 214, 222, 1)',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: [65, 20, 80, 61, 56, 55, 40, 20]
                },
            ]
        };

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    },
					ticks: {
            			fontColor: 'white', 
          			}
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    },
					ticks: {
            			fontColor: 'white', 
          			}
                }]
            }
        };

        new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        });
    });


	 //-------------
    //- DONUT CHART -
    //-------------
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Chrome',
          'IE',
          'FireFox',
          'Safari',
          'Opera',
          'Navigator',
      ],
      datasets: [
        {
          data: productQtys,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de', '#ffffff', '#ffffff'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

</script>


</body>
</html>