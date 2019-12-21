<!DOCTYPE html>
<html lang="en">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
	<head>
		<title>Gradient Able bootstrap admin template by codedthemes</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="" />
		<meta name="keywords" content="">
		<meta name="author" content="Codedthemes" />
		<link rel="icon" href="<?= base_url() ?>asset/assets/images/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="<?= base_url() ?>asset/assets/css/plugins/dataTables.bootstrap4.min.css">
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
	<section class="pcoded-main-container">
		<div class="pcoded-content">
			<div class="page-header">
				<div class="page-block">
					<div class="row align-items-center">
						<div class="col-md-12">
							<div class="page-header-title">
								<h5 class="m-b-10"><?= $this->uri->segment(2) ?></h5>
							</div>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
								<li class="breadcrumb-item"><a href="<?= base_url().$this->uri->segment(1) ?>"><?= $this->uri->segment(1) ?></a></li>
								<li class="breadcrumb-item"><a href="<?= base_url().$this->uri->segment(1).$this->uri->segment(2) ?>"><?= $this->uri->segment(2) ?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-header">
							<h5>Setting Defaults</h5>
						</div>
						<div class="card-body">
							<div class="table-responsive dt-responsive">
								<table id="setting-default" class="table table-striped table-bordered nowrap">
									<thead>
										<tr>
											<th>Nama rumah</th>
											<th>Pemilik rumah</th>
											<th>Harga</th>
											<th>Alamat</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($rumah as $row){ ?>
										<tr>
											<td><a href="<?= base_url() ?>pemilik/rumah?id=<?= $row->id_rumah ?>"><?= $row->nama_rumah ?></a></td>
											<td><?= $row->nama ?></td>
											<td><?= $row->harga ?></td>
											<td><?= $row->lokasi ?></td>
											<td><span class="badge badge-success">verified</span></td>
											<td>
												<button type="button" class="btn  btn-icon btn-primary"><i class="feather icon-edit"></i></button>
												<button type="button" class="btn  btn-icon btn-danger"><i class="feather icon-trash-2"></i></button>
												
											</td>
										</tr>
										<?php } ?>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="<?= base_url() ?>asset/assets/js/vendor-all.min.js"></script>
	<script src="<?= base_url() ?>asset/assets/js/plugins/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>asset/assets/js/pcoded.min.js"></script>
	<script src="<?= base_url() ?>asset/assets/js/plugins/jquery.dataTables.min.js"></script>
	<script src="<?= base_url() ?>asset/assets/js/plugins/dataTables.bootstrap4.min.js"></script>
	<script src="<?= base_url() ?>asset/assets/js/pages/data-advance-custom.js"></script>
</body>
</html>