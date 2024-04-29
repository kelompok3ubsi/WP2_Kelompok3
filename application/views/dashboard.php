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
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content" >
	<div class="container-fluid">
		<!-- Info boxes -->
		<div class="berhasil-login" data-flashdata="<?= $this->session->flashdata('pesan') ?>">
		</div>
		<div class="row">
			<div class="col-12 col-sm-6 col-md-3">
				<div class="info-box">
					<span class="info-box-icon elevation-1" style="background-color:#F18021"><i class="fas fa-shopping-cart"></i></span>

					<div class="info-box-content">
						<a href="<?= site_url('item') ?>">
							<span class="info-box-text">Items</span>
							<span class="info-box-number"><?=$this->fungsi->count_item()?></span>
						</a>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-12 col-sm-6 col-md-3">
				<div class="info-box mb-3">
				<span class="info-box-icon elevation-1" style="background-color:#FA0000;"><i class="fas fa-truck" style="color:#ECE7E7;"></i></span>

					<div class="info-box-content">
					<a href="<?= site_url('supplier') ?>">
						<span class="info-box-text">Suppliers</span>
						<span class="info-box-number"><?=$this->fungsi->count_supplier()?></span>
					</a>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->

			<!-- fix for small devices only -->
			<div class="clearfix hidden-md-up"></div>

			<div class="col-12 col-sm-6 col-md-3">
			<div class="info-box mb-3">
				<span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

					<div class="info-box-content">
					<a href="<?= site_url('customer') ?>">
						<span class="info-box-text">Customers</span>
						<span class="info-box-number"><?=$this->fungsi->count_customer()?></span>
					</a>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<?php if ($this->fungsi->user_login()->level == 1) { ?>
				<div class="col-12 col-sm-6 col-md-3">
				<div class="info-box mb-3">
					<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-plus"></i></span>

						<div class="info-box-content">
						<a href="<?= site_url('user') ?>">
							<span class="info-box-text">Users</span>
							<span class="info-box-number"><?=$this->fungsi->count_user()?></span>
						</a>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
			<?php } ?>
			<!-- /.col -->
		</div>

		<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title"><i class="fa-solid fa-chart-pie"  style="color:black; margin-right:5px;"></i> <b> Static Penjualan</b></h3>
			<div class="card-tools">
				<button type="button" class="btn btn-tool" data-card-widget="collapse">
					<i class="fas fa-minus"></i>
				</button>
			</div>
		</div>
		<div class="card-body" style="background-color:black;">
			<div class="chart">
				<canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
			</div>
		</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="card card-primary">
					<div class="card-header border-0" style="margin-top:6px;">
						<h3 class="card-title"><i class="fa-solid fa-money-bill-trend-up" style="color:black; margin-right:5px;"></i> <b> Products In Demand</b></h3>
						<div class="card-tools">
							<a href="#" class="btn btn-tool btn-sm">
								<i class="fas fa-download"></i>
							</a>
							<a href="#" class="btn btn-tool btn-sm">
								<i class="fas fa-bars"></i>
							</a>
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
                    data: [65, 59, 80, 81, 56, 55, 40]
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
</script>


</body>
</html>