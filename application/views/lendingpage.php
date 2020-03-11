<!DOCTYPE html>
<html lang="zxx">
	
<!-- Mirrored from codeminifier.com/rikada-template/rikada/home-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2019 23:06:59 GMT -->
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
        <title>kontrakan.plg.id</title>
		
        <!-- All Plugins Css -->
        <link rel="icon" href="<?= base_url() ?>asset/assets/images/newlogoicon.png" type="image/x-icon">
        <link rel="stylesheet" href="<?= base_url(); ?>asset/home/css/plugins.css">
		<link rel="stylesheet" href="<?= base_url(); ?>asset/home/css/nav.css" />
		
		
        <!-- Custom CSS -->
        <link href="<?= base_url(); ?>asset/home/css/styles.css" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="<?= base_url(); ?>asset/home/css/colors.css" rel="stylesheet">
		
    </head>
	
    <body class="green-skin">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
           <?php include "menu.php" ?>
			
			
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="image-cover large-banner" style="background:url(<?= base_url(); ?>asset/home/img/b.jpg) no-repeat;">
				<div class="container" id="atasss">
					<div class="full-search-2">
						<div class="hero-search">
							<h1>Temukan Rumahmu!</h1>
						</div>
						<form action="<?= base_url() ?>page/actioncari" method="POST">
							<div class="hero-search-content">
							
								<!-- row -->
								<div class="row">
								
									<div class="col-lg-4 col-md-4 col-sm-12">
										<div class="form-group">
											<div class="input-with-icon">
												<select id="Harga" name="harga"  class="form-control">
													<option value="">&nbsp;</option>
													<option value="5">5.5 – 6.7 juta / tahun</option>
													<option value="4">6.8 – 7.9 juta / tahun</option>
													<option value="3">8 – 9.1  juta /tahun</option>
													<option value="2">9.2 – 10.3 juta / tahun</option>
													<option value="1">10.4 – 11.5 juta / tahun</option>
												</select>
											</div>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-12">
										<div class="form-group">
											<div class="input-with-icon">
												<select id="jumlah_kamar" name="jumlah_kamar" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
												</select>
											</div>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-12">
										<div class="form-group">
											<div class="input-with-icon">
												<select id="luas" name="luas" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">6 – 65 m2</option>
													<option value="2">66 - 124 m2</option>
													<option value="3">125 - 183 m2</option>
													<option value="4">184 - 242 m2</option>
													<option value="5">243 - 300 m2</option>
												</select>
											</div>
										</div>
									</div>
									
								</div>
								<!-- /row -->
								<div class="row">
								
									<div class="col-lg-4 col-md-4 col-sm-12">
										<div class="form-group">
											<div class="input-with-icon">
												<select id="sumber_air" name="sumber_air" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">PDAM</option>
													<option value="2">Sumur</option>
												</select>
											</div>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-12">
										<div class="form-group">
											<div class="input-with-icon">
												<select id="listrik" name="listrik" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">Pascabayar</option>
													<option value="2">Prabayar / Token</option>
												</select>
											</div>
										</div>
									</div>
									
								</div>
								
								<!-- row -->
								<div class="row">
								
									<div class="col-lg-12 col-md-12 col-sm-12">
										<h4>Lokasi dekat dengan</h4>
										<ul class="no-ul-list third-row">
											<li>
												<input id="a-1" class="checkbox-custom" name="lokasi[]" type="checkbox">
												<label for="a-1" class="checkbox-custom-label">Sekolah / Kampus</label>
											</li>
											<li>
												<input id="a-2" class="checkbox-custom" name="lokasi[]" type="checkbox">
												<label for="a-2" class="checkbox-custom-label">Mall/ Pasar</label>
											</li>
											<li>
												<input id="a-3" class="checkbox-custom" name="lokasi[]" type="checkbox">
												<label for="a-3" class="checkbox-custom-label">Kantor</label>
											</li>
											<li>
												<input id="a-4" class="checkbox-custom" name="lokasi[]" type="checkbox">
												<label for="a-4" class="checkbox-custom-label">Rumah sakit</label>
											</li>
										</ul>
									</div>
									
								</div>
								<!-- /row -->
								
							
								<div class="row">
								
									<div class="col-lg-4 col-md-6 col-sm-12">
										<div class="form-group">
										<a type="reset" class="btn reset-btn-outline">Reset</a>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-6 col-sm-12">
										<div class="form-group">
											<div class="form-group">
											</div>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-12 col-sm-12">
										<div class="form-group">
											<button type="submit" class="btn search-btn-outline">Cari</button>
										</div>
									</div>
									
								</div>
							
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Property Start ================================== -->
			<section>
				<div class="container">
				
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="sec-heading center">
								<h3>Rumah Kontrakkan di Palembang</h3>
								
							</div>
						</div>
					</div>
					
					<div class="row">
						<?php foreach ($rumah as $r ) {?>
						<!-- Single Property -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">
								
								<div class="listing-img-wrapper">
									<div class="list-img-slide">
										<div class="click">
											<?php $foto = unserialize($r->image);
											foreach ($foto as $key) {?>
											<div><a href="<?= base_url().'page/homedetail?id_rumah='.$r->id_rumah ?>"><img src="<?= base_url().$key; ?>" class="img-fluid mx-auto" alt="" /></a></div>
											<?php } ?>
										</div>
									</div>
								</div>
								
								<div class="listing-detail-wrapper pb-0">
									<div class="listing-short-detail">
										<h4 class="listing-name"><a href="<?= base_url().'page/homedetail?id_rumah='.$r->id_rumah ?>"><?= $r->nama_rumah ?></a><i class="list-status ti-check"></i></h4>
									</div>
								</div>
								
								<div class="price-features-wrapper">
									<div class="listing-price-fx">
										<h6 class="listing-card-info-price">Rp. <?= $r->harga ?><span class="price-suffix">/tahun</span></h6>
									</div>
									<div class="list-fx-features">
										<div class="listing-card-info-icon">
											<span class="inc-fleat inc-bed"><?= $r->jumlah_kamar ?> kamar</span>
										</div>
										<div class="listing-card-info-icon">
											<?= $r->luas_bangunan ?> M<sup>2</sup>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<!-- End Single Property -->
						<?php } ?>
						
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="text-center mt-4">
								<a href="#atasss" class="btn btn-theme-2">Muat Lainnya</a>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ============================ Property End ================================== -->
			
		
			
			<!-- ============================ Footer Start ================================== -->
			<footer class="dark-footer skin-dark-footer">
				
							
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							
							<div class="col-lg-12 col-md-12 text-center">
								<p class="mb-0">© Designed By <a href="#">Ainun Mardliyyah</a> Fakultas Ilmu Komputer Universitas Sriwijaya 2020 </p>
							</div>
							
						</div>
					</div>
				</div>
			</footer>
			<!-- ============================ Footer End ================================== -->
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->
		

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="<?= base_url(); ?>asset/home/js/jquery.min.js"></script>
		<script src="<?= base_url(); ?>asset/home/js/popper.min.js"></script>
		<script src="<?= base_url(); ?>asset/home/js/bootstrap.min.js"></script>
		<script src="<?= base_url(); ?>asset/home/js/rangeslider.js"></script>
		<script src="<?= base_url(); ?>asset/home/js/select2.min.js"></script>
		<script src="<?= base_url(); ?>asset/home/js/aos.js"></script>
		<script src="<?= base_url(); ?>asset/home/js/owl.carousel.min.js"></script>
		<script src="<?= base_url(); ?>asset/home/js/jquery.magnific-popup.min.js"></script>
		<script src="<?= base_url(); ?>asset/home/js/slick.js"></script>
		<script src="<?= base_url(); ?>asset/home/js/slider-bg.js"></script>
		<script src="<?= base_url(); ?>asset/home/js/lightbox.js"></script> 
		<script src="<?= base_url(); ?>asset/home/js/imagesloaded.js"></script>
		<script src="<?= base_url(); ?>asset/home/js/isotope.min.js"></script>
		<script src="<?= base_url(); ?>asset/home/js/coreNavigation.js"></script>
		<script src="<?= base_url(); ?>asset/home/js/custom.js"></script><script src="<?= base_url(); ?>asset/home/js/cl-switch.js"></script>
		<script>
		// Select Bedrooms
		$('#Harga').select2({
			placeholder: "Harga",
			allowClear: true
		});

		$('#jumlah_kamar').select2({
			placeholder: "Jumlah kamar",
			allowClear: true
		});

		$('#luas').select2({
			placeholder: "Luas kontrakan",
			allowClear: true
		});

		$('#sumber_air').select2({
			placeholder: "sumber air",
			allowClear: true
		});

		$('#listrik').select2({
			placeholder: "Listrik",
			allowClear: true
		});
		</script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>

<!-- Mirrored from codeminifier.com/rikada-template/rikada/home-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2019 23:07:18 GMT -->
</html>