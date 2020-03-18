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
						<!-- <form action="<?= base_url() ?>page/actioncari" method="POST"> -->
							<div class="hero-search-content">
							
							<form action="<?= base_url() ?>page/actioncari" method="POST">

									<div class="form-group">
										<div class="input-with-icon">
											<select id="pilihan" name="pilihan"  class="form-control">
													<option value="">Pilih Kriteria</option>
													<option value="1">Harga Sewa</option>
													<option value="2">Jumlah Kamar</option>
													<option value="3">luas</option>
													<option value="4">Sumber Air</option>
													<option value="5">Pembayaran Listrik</option>
													<!-- <option value="6">Lokasi</option>  -->
												</select>
										</div>
									</div>

									<div style="display:none;" id="kr1">
										<div class="input-with-icon">
											<select id="Harga" name="harga"  class="form-control">
													<option value="null">&nbsp;</option>
													<option value="5500000 AND 6700000">5.5 – 6.7 juta / tahun</option>
													<option value="6800000 AND 7900001">6.8 – 7.9 juta / tahun</option>
													<option value="8000000 AND 9100001">8 – 9.1  juta /tahun</option>
													<option value="9200000 AND 10300001">9.2 – 10.3 juta / tahun</option>
													<option value="10400000 AND 11800001">10.4 – 11.5 juta / tahun</option>
												</select>
										</div>
									</div>


										<div style="display:none;" id="kr2">
											<div class="input-with-icon">
												<select id="jumlah_kamar" name="jumlah_kamar" class="form-control">
													<option value="null">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
												</select>
											</div>
										</div>

										<div style="display:none;" id="kr3">
											<div class="input-with-icon">
												<select id="luas" name="luas" class="form-control">
													<option value="null">&nbsp;</option>
													<option value="6 AND 65">6 – 65 m2</option>
													<option value="66 AND 124">66 - 124 m2</option>
													<option value="125 AND 183">125 - 183 m2</option>
													<option value="184 AND 242">184 - 242 m2</option>
													<option value="243 AND 300">243 - 300 m2</option>
												</select>
											</div>
										</div>

										<div style="display:none;" id="kr4">
											<div class="input-with-icon">
												<select id="sumber_air" name="sumber_air" class="form-control">
													<option value="null">&nbsp;</option>
													<option value="Pdam">PDAM</option>
													<option value="Sumur">Sumur</option>
												</select>
											</div>
										</div>

										<div style="display:none;" id="kr5">
											<div class="input-with-icon">
												<select id="listrik" name="listrik" class="form-control">
													<option value="null">&nbsp;</option>
													<option value="Listrik Pascabayar">Pascabayar</option>
													<option value="Listrik Prabayar">Prabayar / Token</option>
												</select>
											</div>
										</div>
										<div style="display:none;" id="kr6">
											<h4>Lokasi dekat dengan</h4>
											<ul class="no-ul-list ">
												<input value="&nbsp;" hidden class="checkbox-custom" name="lokasi[]" type="text">
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
													<li>
														<input id="a-4" class="checkbox-custom" name="lokasi[]" type="checkbox">
														<label for="a-4" class="checkbox-custom-label">Tidak Ada</label>
													</li>
											</ul>
										</div>
										


										<button type="submit" style="margin-top:20px" class="btn btn-theme full-width">Find New Home</button>
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
		<script>
		$('#pilihan').on('change',function(){
			if( $(this).val()==="1"){
				$("#kr1").show();
				$("#kr2").hide();
				$("#kr3").hide();
				$("#kr4").hide();
				$("#kr5").hide();
				$("#kr6").hide();
			}
			else if( $(this).val()==="2"){
				$("#kr1").hide();
				$("#kr2").show();
				$("#kr3").hide();
				$("#kr4").hide();
				$("#kr5").hide();
				$("#kr6").hide();
			}
			else if( $(this).val()==="3"){
				$("#kr1").hide();
				$("#kr2").hide();
				$("#kr3").show();
				$("#kr4").hide();
				$("#kr5").hide();
				$("#kr6").hide();
			}
			else if($(this).val()==="4"){
				$("#kr1").hide();
				$("#kr2").hide();
				$("#kr3").hide();
				$("#kr4").show();
				$("#kr5").hide();
				$("#kr6").hide();
			}
			else if($(this).val()==="5"){
				$("#kr1").hide();
				$("#kr2").hide();
				$("#kr3").hide();
				$("#kr4").hide();
				$("#kr5").show();
				$("#kr6").hide();
			}
			else if($(this).val()==="6"){
				$("#kr1").hide();
				$("#kr2").hide();
				$("#kr3").hide();
				$("#kr4").hide();
				$("#kr5").hide();
				$("#kr6").show();
			}
			else{
				$("#kr1").hide();
				$("#kr2").hide();
				$("#kr3").hide();
			}
		});
	</script>

	</body>

<!-- Mirrored from codeminifier.com/rikada-template/rikada/home-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2019 23:07:18 GMT -->
</html>