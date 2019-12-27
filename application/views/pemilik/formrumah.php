<!DOCTYPE html>
<html lang="en">
	<!-- Mirrored from html.codedthemes.com/gradient-able/bootstrap/default/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 01:20:48 GMT -->
	<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
	<head>
		<title>kontrakan.plg.id</title>
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
								<h5 class="m-b-10">Form Tambah Rumah</h5>
							</div>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
								<li class="breadcrumb-item"><a href="#!">Data Rumah</a></li>
								<li class="breadcrumb-item"><a href="#!">Form Tambah Rumah</a></li>
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



									<li class="nav-item"><a href="#b-w-tab2" class="nav-link" data-toggle="tab">Fasilitas</a></li>
                                    <li class="nav-item"><a href="#b-w-tab3" class="nav-link" data-toggle="tab">Lokasi</a></li>
                                    <li class="nav-item"><a href="#b-w-tab4" class="nav-link" data-toggle="tab">Validasi</a></li>


								</ul>
								<div class="tab-content">
									<div class="tab-pane active show" id="b-w-tab1">
								<form method="post" action="addrumah" enctype="multipart/form-data">
										<div class="form-group row">
											<label for="b-t-name" class="col-sm-3 col-form-label">Nama rumah</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="nama" id="b-t-name" placeholder="nama rumah">
											</div>
										</div>
										<div class="form-group row">
											<label for="b-t-email" class="col-sm-3 col-form-label">Alamat</label>
											<div class="col-sm-9">
												<textarea type="text" class="form-control" name="alamat" id="b-t-email" placeholder="Alamat"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label for="b-t-pwd" class="col-sm-3 col-form-label">Harga</label>
											<div class="col-sm-9">
												<input type="text" pattern="[9-0]" name="harga" class="form-control" id="b-t-pwd" placeholder="harga">
											</div>
										</div>
										<h5>UPLOAD BEBERAPA GAMBAR KONTRAKAN</h5>
										<hr>
										<div class="input-group mb-3 col-md-4">
											<div>
												<input type="file" name="file[]" multiple id="file">
												<label for="inputGroupFile01"></label>
											</div>
										</div>
									</div>
									
									<div class="tab-pane" id="b-w-tab2">
                                        <div class="form-group row">
											<label for="b-t-pwd" class="col-sm-3 col-form-label">Luas bangunan</label>
											<div class="col-sm-9">
												<input type="text" pattern="[9-0]" name="luas" class="form-control" id="b-t-pwd" placeholder="Luas">
											</div>
                                        </div>
                                        <div class="form-group row">
											<label for="b-t-pwd" class="col-sm-3 col-form-label">Jumlah kamar</label>
											<div class="col-sm-9">
												<input type="number" max="2" title="" pattern="[9-0]" name="kamar" class="form-control" id="b-t-pwd" placeholder="kamar">
											</div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputState" class="col-sm-3 col-form-label" >lisrik</label>
                                            <div class="col-sm-9">
                                                <select id="inputState" name="listrik" class="form-control">
                                                    <option selected="">select</option>
													<option>Listrik Prabayar</option>
													<option>Listrik Pascabayar</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputState" class="col-sm-3 col-form-label" >air</label>
                                            <div class="col-sm-9">
                                                <select id="inputState" name="air" class="form-control">
                                                    <option selected="">select</option>
													<option>Pdam</option>
													<option>Sumur</option>
                                                </select>
                                            </div>
										</div>
										<h5>Lokasi dekat dengan</h5>
										<hr>
										<div class="form-group">
											<div class="checkbox checkbox-primary d-inline">
												<input type="checkbox" name="lokasi[]" value="Sekolah/Kampus" id="checkbox-p-1" >
												<label for="checkbox-p-1" class="cr">Sekolah/Kampus</label>
											</div>
										</div>
										<div class="form-group">
											<div class="checkbox checkbox-primary d-inline">
												<input type="checkbox" name="lokasi[]" value="Mall/Pasar" id="checkbox-p-2" >
												<label for="checkbox-p-2" class="cr">Mall/Pasar</label>
											</div>
										</div>
										<div class="form-group">
											<div class="checkbox checkbox-primary d-inline">
												<input type="checkbox" name="lokasi[]" value="Kantor" id="checkbox-p-3" >
												<label for="checkbox-p-3" class="cr">Kantor</label>
											</div>
										</div>
										<div class="form-group">
											<div class="checkbox checkbox-primary d-inline">
												<input type="checkbox" name="lokasi[]" value="Rumah Sakit" id="checkbox-p-4" >
												<label for="checkbox-p-4" class="cr">Rumah Sakit</label>
											</div>
										</div>
                                    </div>
                                    <div class="tab-pane" id="b-w-tab3">
										<div id="googleMap" style="width:100%;height:380px;"></div>
										<div class="row" style="margin: 5px">
											<input type="text" readonly id="lat" style="margin-right:10px" class="form-control col-sm-3"  placeholder="latitude" name="lat" value="">
											<input type="text" readonly id="lng" class="form-control col-sm-3" name="lng" value="" placeholder="lagitude" >
										</div>		
									</div>
									<div class="tab-pane" id="b-w-tab4">
										<div class="text-center" style="margin-top:70px">
											<h5 class="mt-3">Apakah data yang anda masukan sudah benar?</h5>
											<p>data yang telah dimasukan akan di proses validasi,<br> silkan klik submit untuk menyimpan data</p>
											<div class="custom-control custom-checkbox mb-3" style="margin-top:70px">
												<input type="submit" class="btn btn-primary" name="submit" value="Submit data">
											</div>
										</div>
									</div>
								</form>
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZIWmrKgy4JT8OjF8CwvzknSLWoTfqE5M&callback=initMap" ></script>
    <script>
		// variabel global marker
		var marker;
		
		function taruhMarker(peta, posisiTitik){
			
			if( marker ){
				// pindahkan marker
				marker.setPosition(posisiTitik);
			} else {
			// buat marker baru
			marker = new google.maps.Marker({
				position: posisiTitik,
				map: peta
			});
			}
		
			// isi nilai koordinat ke form
			document.getElementById("lat").value = posisiTitik.lat();
			document.getElementById("lng").value = posisiTitik.lng();
			
		}
		
		function initialize() {
		var propertiPeta = {
			center:new google.maps.LatLng(-2.976819877570223,104.7540567971414),
			zoom:13,
			mapTypeId:google.maps.MapTypeId.ROADMAP
		};
		
		var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
		
		// even listner ketika peta diklik
		google.maps.event.addListener(peta, 'click', function(event) {
			taruhMarker(this, event.latLng);
		});

		}


		// event jendela di-load  
		google.maps.event.addDomListener(window, 'load', initialize);
		

	</script>
    
</body>
<!-- Mirrored from html.codedthemes.com/gradient-able/bootstrap/default/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 01:20:49 GMT -->
</html>