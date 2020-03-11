<!DOCTYPE html>
<html lang="zxx">
	
<!-- Mirrored from codeminifier.com/rikada-template/rikada/list-layout-with-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2019 23:07:42 GMT -->
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
			
			<!-- ============================ Page Title Start================================== -->
			
			<!-- ============================ Page Title End ================================== -->

			<!-- ============================ All Property ================================== -->
			<section>

			
				<div class="container">
					<h2 class="ipt-title">Rekomendasi Rumah Kontrakan</h2>
					<br><br>
					<div class="row">
						
						<div class="col-lg-8 col-md-12 list-layout">
							<div class="row">
								
								<?php
								if($rank == "null"){
									echo "data yang sesuai tidak ditemukan";
								}
								else{
								foreach($rank as $key => $value){ ?>
								<!-- Single Property Start -->
								<div class="col-lg-12 col-md-12">
									<div class="property-listing property-1">
											
										<div class="listing-img-wrapper">
											<a href="single-property-2.html">
												<?php $foto = unserialize($value['image']); ?>
												<img src="<?= base_url().$foto[0]; ?>" class="img-fluid mx-auto" alt="fotorumah" />
											</a>
											<span class="property-type">Dikontrakkan</span>
										</div>
										
										<div class="listing-content">
										
											<div class="listing-detail-wrapper">
												<div class="listing-short-detail">
													<h4 class="listing-name"><a href="<?= base_url()."Page/homedetail?id_rumah=".$value['id_rumah'] ?>"><?= $value['nama_rumah'] ?></a></h4>
													<span class="listing-location"><i class="ti-location-pin"></i><?= $value['alamat'] ?></span>
												</div>
												<div class="list-author">
													
												</div>
											</div>
										
											<div class="listing-features-info">
												<ul>
													<li><strong>Jumlah kamar:</strong><br><?= $value['jumlah_kamar'] ?> Kamar</li><br>
													<li><strong></strong></li>
													<li><strong>Luas Bangunan:</strong><br><?= $value['luas_bangunan'] ?> m2</li><br>
												</ul>
											</div>
										
											<div class="listing-footer-wrapper">
												<div class="listing-price">
													<h4 class="list-pr">Rp. <?= $value['harga'] ?></h4>
												</div>
												<div class="listing-detail-btn">
													<a href="<?= base_url()."Page/homedetail?id_rumah=".$value['id_rumah'] ?>" class="more-btn">Detail Rumah</a>
												</div>
											</div>
											
										</div>
										
									</div>
								</div>
								<?php } 
								}?>
								<!-- Single Property End -->
													
								
							</div>
					
						</div>
						
						<!-- property Sidebar -->
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="page-sidebar">
								
								<!-- Find New Property -->
								<div class="sidebar-widgets">
									
									<h4 align="text-center">Cari Rumah Lainnya!</h4><br>

									
								<form action="<?= base_url() ?>page/actioncari" method="POST">

									<div class="form-group">
										<div class="input-with-icon">
											<select id="pilihan" name="pilihan"  class="form-control">
													<option value="">Pilih Kreteria</option>
													<option value="1">Harga</option>
													<option value="2">Jumlah Kamar</option>
													<option value="3">luas</option>
													<option value="4">Sumber Air</option>
													<option value="5">Tipe Listrik</option>
													<!-- <option value="6">Lokasi</option> -->
												</select>
										</div>
									</div>

									<div style="display:none;" id="kr1">
										<div class="input-with-icon">
											<select id="Harga" name="harga"  class="form-control">
													<option value="null">&nbsp;</option>
													<option value="5500000 AND 6700000">5.5 – 6.7 juta / tahun</option>
													<option value="6800000 AND 7900000">6.8 – 7.9 juta / tahun</option>
													<option value="8000000 AND 9100000">8 – 9.1  juta /tahun</option>
													<option value="9200000 AND 10300000">9.2 – 10.3 juta / tahun</option>
													<option value="104000000 AND 11500000">10.4 – 11.5 juta / tahun</option>
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
													<option value="1">6 – 65 m2</option>
													<option value="2">66 - 124 m2</option>
													<option value="3">125 - 183 m2</option>
													<option value="4">184 - 242 m2</option>
													<option value="5">243 - 300 m2</option>
												</select>
											</div>
										</div>

										<div style="display:none;" id="kr4">
											<div class="input-with-icon">
												<select id="sumber_air" name="sumber_air" class="form-control">
													<option value="null">&nbsp;</option>
													<option value="1">PDAM</option>
													<option value="2">Sumur</option>
												</select>
											</div>
										</div>

										<div style="display:none;" id="kr5">
											<div class="input-with-icon">
												<select id="listrik" name="listrik" class="form-control">
													<option value="null">&nbsp;</option>
													<option value="1">Pascabayar</option>
													<option value="2">Prabayar</option>
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
											</ul>
										</div>
										
									
										<button type="submit" style="margin-top:20px"  class="btn btn-theme full-width">Search</button>
									
									</div>
							
								</div>
							</div>
							<!-- Sidebar End -->
								</form>
						
						</div>
					</div>
				</div>	
			</section>
			<!-- ============================ All Property ================================== -->
			
			<!-- ============================ Footer Start ================================== -->
			<footer class="dark-footer skin-dark-footer">
				
				
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							
							<div class="col-lg-12 col-md-12 text-center">
								<p class="mb-0">© Designed By <a href="#">Ainun Mardliyyah</a> Fakultas Ilmu Komputer Universitas Sriwijaya 2019 </p>
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
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->
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

<!-- Mirrored from codeminifier.com/rikada-template/rikada/list-layout-with-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2019 23:07:42 GMT -->
</html>