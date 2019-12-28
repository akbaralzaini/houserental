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
		<link rel="icon" href="<?= base_url() ?>asset/assets/images/newlogoicon.png" type="image/x-icon">
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
								<h5 class="m-b-10">Detail rumah</h5>
							</div>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
								<li class="breadcrumb-item"><a href="#!">Detail rumah</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
                        <?php foreach($rumah as $row){ ?>
						<div class="card-header">
							<h5>Rumah dua putri</h5>
						</div>
						<div class="card-body">
                            <div class="row">
                                <?php $foto = unserialize($row->image);
                                $i = 1;
                                foreach ($foto as $key ) { ?>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="thumbnail mb-4">
                                            <div class="thumb">
                                                <a href="<?= base_url().$key ?>" data-lightbox="<?= $i ?>" data-title="My caption 1">
                                                    <img src="<?= base_url().$key ?>" alt="" class="img-fluid img-thumbnail">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php $i++; } ?>
                                
                                <div class="w-100"></div>
								<div class="col-6 col-sm-2"><b> Nama Rumah </b></div><div class="col-6 col-sm-3">: <?= $row->nama_rumah ?></div>
								<div class="w-100"></div>
								<div class="col-6 col-sm-2"><b> Harga </b></div> <div class="col-6 col-sm-3">: <?= $row->harga ?></div>
								<div class="w-100"></div>
								<div class="col-6 col-sm-2"><b> Jumlah kamar </b></div> <div class="col-6 col-sm-3">: <?= $row->jumlah_kamar ?></div>
								<div class="w-100"></div>
								<div class="col-6 col-sm-2"><b> Luas Bangunan </b></div> <div class="col-6 col-sm-3">: <?= $row->luas_bangunan ?></div>
								<div class="w-100"></div>
								<div class="col-6 col-sm-2"><b> Listrik </b></div> <div class="col-6 col-sm-3">: <?= $row->listrik ?></div>
								<div class="w-100"></div>
								<div class="col-6 col-sm-2"><b> Air </b></div> <div class="col-6 col-sm-3">: <?= $row->air ?></div>
								<div class="w-100"></div>
								<div class="col-6 col-sm-2"><b> Alamat </b></div> <div class="col-6 col-sm-3">: <?= $row->alamat ?></div>
                                <div class="w-100"></div>
                                <div class="col-6 col-sm-2"><b> Lokasi </b></div> 
                                <?php $lokasi = unserialize($row->lokasi);
                                $i = 1;
                                foreach ($lokasi as $loc ) { ?>
                                    <div class="col-6 col-sm-12"><?= $i." ".$loc ?></div>
                                <?php $i++; } ?>
								<div class="w-100"></div>

							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header">
							<h5>Maps</h5>
						</div>
						<div class="card-body">
                            <div id="map" class="set-map" style="height:400px;"></div>
						</div>
                    </div>
                        <?php 
                        $lang = $row->longitude;
                        $lat = $row->latitude;
                    } ?>
				</div>
			</div>
		</div>
	</div>
	<?php include "footer.php"; ?>
	<script src="<?= base_url() ?>asset/assets/js/vendor-all.min.js"></script>
	<script src="<?= base_url() ?>asset/assets/js/plugins/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>asset/assets/js/pcoded.min.js"></script>

	<script>
        // Initialize and add the map
        function initMap() {
        // The location of Uluru
        var uluru = {lat: <?= $lat ?>, lng: <?= $lang ?>};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom:16, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script>
	<script src="../../../../developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZIWmrKgy4JT8OjF8CwvzknSLWoTfqE5M&callback=initMap"></script>
	<script src="<?= base_url() ?>asset/assets/js/plugins/gmaps.min.js"></script>
	<script src="<?= base_url() ?>asset/assets/js/pages/google-maps.js"></script>
</body>
<!-- Mirrored from html.codedthemes.com/gradient-able/bootstrap/default/sample-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 01:22:03 GMT -->
</html>