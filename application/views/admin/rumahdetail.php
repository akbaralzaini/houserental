<!DOCTYPE html>
<html lang="en">
	<!-- Mirrored from html.codedthemes.com/gradient-able/bootstrap/default/sample-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 01:22:03 GMT -->
	<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
	<head>
		<title>Gradient Able bootstrap admin template by codedthemes</title>
		<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
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
			<div class="page-header">
				<div class="page-block">
					<div class="row align-items-center">
						<div class="col-md-12">
							<div class="page-header-title">
								<h5 class="m-b-10">Sample Page</h5>
							</div>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
								<li class="breadcrumb-item"><a href="#!">Sample Page</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-header">
							<h5>Rumah dua putri</h5>
						</div>
						<div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="thumbnail mb-4">
                                        <div class="thumb">
                                            <a href="<?= base_url() ?>asset/assets/images/gallery-grid/img-grd-gal-1.jpg" data-lightbox="1" data-title="My caption 1">
                                                <img src="<?= base_url() ?>asset/assets/images/gallery-grid/img-grd-gal-1.jpg" alt="" class="img-fluid img-thumbnail">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="thumbnail mb-4">
                                        <div class="thumb">
                                            <a href="<?= base_url() ?>asset/assets/images/gallery-grid/img-grd-gal-2.jpg" data-lightbox="2" data-title="My caption 2">
                                                <img src="<?= base_url() ?>asset/assets/images/gallery-grid/img-grd-gal-2.jpg" alt="" class="img-fluid img-thumbnail">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="thumbnail mb-4">
                                        <div class="thumb">
                                            <a href="<?= base_url() ?>asset/assets/images/gallery-grid/img-grd-gal-3.jpg" data-lightbox="3" data-title="My caption 3">
                                                <img src="<?= base_url() ?>asset/assets/images/gallery-grid/img-grd-gal-3.jpg" alt="" class="img-fluid img-thumbnail">
                                            </a>
                                        </div>
                                    </div>
                                </div>
								
								<div class="col-6 col-sm-2">Nama Rumah </div><div class="col-6 col-sm-3">: dua putri</div>
								<div class="w-100"></div>
								<div class="col-6 col-sm-2">Harga </div> <div class="col-6 col-sm-3">: dua putri</div>
								<div class="w-100"></div>
								<div class="col-6 col-sm-2">Jumlah kamar </div> <div class="col-6 col-sm-3">: dua putri</div>
								<div class="w-100"></div>
								<div class="col-6 col-sm-2">Luas Bangunan </div> <div class="col-6 col-sm-3">: dua putri</div>
								<div class="w-100"></div>
								<div class="col-6 col-sm-2">Listrik </div> <div class="col-6 col-sm-3">: dua putri</div>
								<div class="w-100"></div>
								<div class="col-6 col-sm-2">Air </div> <div class="col-6 col-sm-3">: dua putri</div>
								<div class="w-100"></div>
								<div class="col-6 col-sm-2">Alamat </div> <div class="col-6 col-sm-3">: dua putri</div>
								<div class="w-100"></div>
								<div class="col-6 col-sm-2">Status </div> <div class="col-6 col-sm-3">: dua putri</div>

							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header">
							<h5>Maps</h5>
						</div>
						<div class="card-body">
							<div id="markers-map" class="set-map" style="height:400px;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?= base_url() ?>asset/assets/js/vendor-all.min.js"></script>
	<script src="<?= base_url() ?>asset/assets/js/plugins/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>asset/assets/js/pcoded.min.js"></script>

	
	<script src="../../../../developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyDsucrEdmswqYrw0f6ej3bf4M4suDeRgNA"></script>
	<script src="<?= base_url() ?>asset/assets/js/plugins/gmaps.min.js"></script>
	<script src="<?= base_url() ?>asset/assets/js/pages/google-maps.js"></script>
</body>
<!-- Mirrored from html.codedthemes.com/gradient-able/bootstrap/default/sample-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 01:22:03 GMT -->
</html>