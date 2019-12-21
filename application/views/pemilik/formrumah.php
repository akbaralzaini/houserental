<!DOCTYPE html>
<html lang="en">
	<!-- Mirrored from html.codedthemes.com/gradient-able/bootstrap/default/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 01:20:48 GMT -->
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
	<section class="pcoded-main-container">
		<div class="pcoded-content">
			<div class="page-header">
				<div class="page-block">
					<div class="row align-items-center">
						<div class="col-md-12">
							<div class="page-header-title">
								<h5 class="m-b-10">Form Wizard</h5>
							</div>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
								<li class="breadcrumb-item"><a href="#!">Form Components</a></li>
								<li class="breadcrumb-item"><a href="#!">Form Wizard</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h5>Data rumah</h5>
						</div>
						<div class="card-body">
							<div class="bt-wizard" id="besicwizard">
								<ul class="nav nav-pills nav-fill mb-3">
									<li class="nav-item"><a href="#b-w-tab1" class="nav-link" data-toggle="tab">Profile rumah</a></li>
									<li class="nav-item"><a href="#b-w-tab2" class="nav-link" data-toggle="tab">fasilitas</a></li>
                                    <li class="nav-item"><a href="#b-w-tab3" class="nav-link" data-toggle="tab">lokasi</a></li>
                                    <li class="nav-item"><a href="#b-w-tab4" class="nav-link" data-toggle="tab">validasi</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active show" id="b-w-tab1">
										<form>
											<div class="form-group row">
												<label for="b-t-name" class="col-sm-3 col-form-label">Nama rumah</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="b-t-name" placeholder="nama rumah">
												</div>
											</div>
											<div class="form-group row">
												<label for="b-t-email" class="col-sm-3 col-form-label">Alamat</label>
												<div class="col-sm-9">
													<textarea type="text" class="form-control" id="b-t-email" placeholder="Alamat"></textarea>
												</div>
											</div>
											<div class="form-group row">
												<label for="b-t-pwd" class="col-sm-3 col-form-label">Harga</label>
												<div class="col-sm-9">
													<input type="text" pattern="[9-0]" class="form-control" id="b-t-pwd" placeholder="harga">
												</div>
											</div>
										</form>
									</div>
									<div class="tab-pane" id="b-w-tab2">
                                            <div class="form-group row">
												<label for="b-t-pwd" class="col-sm-3 col-form-label">Jumlah kamar</label>
												<div class="col-sm-9">
													<input type="text" pattern="[9-0]" class="form-control" id="b-t-pwd" placeholder="kamar">
												</div>
                                            </div>
                                            <div class="form-group row">
												<label for="b-t-pwd" class="col-sm-3 col-form-label">Jumlah kamar</label>
												<div class="col-sm-9">
													<input type="text" pattern="[9-0]" class="form-control" id="b-t-pwd" placeholder="kamar">
												</div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputState" class="col-sm-3 col-form-label" >lisrik</label>
                                                <div class="col-sm-9">
                                                    <select id="inputState" class="form-control">
                                                        <option selected="">select</option>
                                                        <option>1200</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputState" class="col-sm-3 col-form-label" >air</label>
                                                <div class="col-sm-9">
                                                    <select id="inputState" class="form-control">
                                                        <option selected="">select</option>
                                                        <option>Pdam</option>
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="tab-pane" id="b-w-tab3">
                                    <div id="map" class="set-map" style="height:400px;"></div>
									</div>
									<div class="tab-pane" id="b-w-tab4">
										<form class="text-center">
											<i class="feather icon-check-circle display-3 text-success"></i>
											<h5 class="mt-3">Registration Done! . .</h5>
											<p>Lorem Ipsum is simply dummy text of the printing</p>
											<div class="custom-control custom-checkbox mb-3">
												<input type="checkbox" class="custom-control-input" id="customCheck1">
												<label class="custom-control-label" for="customCheck1">Subscribe Newslatter</label>
											</div>
										</form>
									</div>
									<div class="row justify-content-between btn-page">
										<div class="col-sm-6">
											<a href="#!" class="btn btn-primary button-previous">Previous</a>
										</div>
										<div class="col-sm-6 text-md-right">
											<a href="#!" class="btn btn-primary button-next">Next</a>
										</div>
									</div>
								</div>
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
	<script src="<?= base_url() ?>asset/assets/js/menu-setting.min.js"></script>
	<script src="<?= base_url() ?>asset/assets/js/plugins/jquery.bootstrap.wizard.min.js"></script>
	<script>
    $(document).ready(function() {
        $('#besicwizard').bootstrapWizard({
            withVisible: false,
            'nextSelector': '.button-next',
            'previousSelector': '.button-previous',
            'firstSelector': '.button-first',
            'lastSelector': '.button-last'
        });
    });
    </script>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZIWmrKgy4JT8OjF8CwvzknSLWoTfqE5M&callback=initMap" ></script>

</body>
<!-- Mirrored from html.codedthemes.com/gradient-able/bootstrap/default/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 01:20:49 GMT -->
</html>