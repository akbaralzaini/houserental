<!DOCTYPE html>
<html lang="en">
	<title>Gradient Able bootstrap admin template by codedthemes</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Codedthemes" />
	<link rel="icon" href="<?= base_url() ?>asset/assets/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?= base_url() ?>asset/assets/css/style.css">
</head>
<body class="">
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
<?php include "menu.php"; ?>
<?php include "header.php"; ?>
<div class="pcoded-main-container">
	<div class="pcoded-content">
		<div class="row">
			<div class="col-md-6 col-xl-3">
				<div class="card bg-c-blue order-card">
					<div class="card-body">
						<h6 class="text-white">Orders Received</h6>
						<h2 class="text-right text-white"><i class="feather icon-shopping-cart float-left"></i><span>486</span></h2>
						<p class="m-b-0">Completed Orders<span class="float-right">351</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xl-3">
				<div class="card bg-c-green order-card">
					<div class="card-body">
						<h6 class="text-white">Total Sales</h6>
						<h2 class="text-right text-white"><i class="feather icon-tag float-left"></i><span>1641</span></h2>
						<p class="m-b-0">This Month<span class="float-right">213</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xl-3">
				<div class="card bg-c-yellow order-card">
					<div class="card-body">
						<h6 class="text-white">Revenue</h6>
						<h2 class="text-right text-white"><i class="feather icon-repeat float-left"></i><span>$42,562</span></h2>
						<p class="m-b-0">This Month<span class="float-right">$5,032</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xl-3">
				<div class="card bg-c-red order-card">
					<div class="card-body">
						<h6 class="text-white">Total Profit</h6>
						<h2 class="text-right text-white"><i class="feather icon-award float-left"></i><span>$9,562</span></h2>
						<p class="m-b-0">This Month<span class="float-right">$542</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-xl-6">
				<div class="card">
					<div class="card-header">
						<h5>Unique Visitor</h5>
					</div>
					<div class="card-body pl-0 pb-0">
						<div id="unique-visitor-chart"></div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-xl-6">
				<div class="row">
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body bg-patern">
								<div class="row">
									<div class="col-auto">
										<span>Customers</span>
									</div>
									<div class="col text-right">
										<h2 class="mb-0">826</h2>
										<span class="text-c-green">8.2%<i class="feather icon-trending-up ml-1"></i></span>
									</div>
								</div>
								<div id="customer-chart"></div>
								<div class="row mt-3">
									<div class="col">
										<h3 class="m-0"><i class="fas fa-circle f-10 m-r-5 text-success"></i>674</h3>
										<span class="ml-3">New</span>
									</div>
									<div class="col">
										<h3 class="m-0"><i class="fas fa-circle text-primary f-10 m-r-5"></i>182</h3>
										<span class="ml-3">Return</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="card bg-primary text-white">
							<div class="card-body bg-patern-white">
								<div class="row">
									<div class="col-auto">
										<span>Customers</span>
									</div>
									<div class="col text-right">
										<h2 class="mb-0 text-white">826</h2>
										<span class="text-white">8.2%<i class="feather icon-trending-up ml-1"></i></span>
									</div>
								</div>
								<div id="customer-chart1"></div>
								<div class="row mt-3">
									<div class="col">
										<h3 class="m-0 text-white"><i class="fas fa-circle f-10 m-r-5 text-success"></i>674</h3>
										<span class="ml-3">New</span>
									</div>
									<div class="col">
										<h3 class="m-0 text-white"><i class="fas fa-circle f-10 m-r-5 text-white"></i>182</h3>
										<span class="ml-3">Return</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<script src="<?= base_url() ?>asset/assets/js/vendor-all.min.js"></script>
<script src="<?= base_url() ?>asset/assets/js/plugins/bootstrap.min.js"></script>
<script src="<?= base_url() ?>asset/assets/js/pcoded.min.js"></script>
<script src="<?= base_url() ?>asset/assets/js/plugins/apexcharts.min.js"></script>
<script src="<?= base_url() ?>asset/assets/js/pages/dashboard-main.js"></script>
</body>
<!-- Mirrored from html.codedthemes.com/gradient-able/bootstrap/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 01:18:46 GMT -->
</html>