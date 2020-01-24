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
								<h2 class="ipt-title">Hasil Pencarian</h2>
								<br><br>
					<div class="row">
						
						<div class="col-lg-8 col-md-12 list-layout">
							<div class="row">
								
								<?php foreach($rank as $key => $value){ ?>
								<!-- Single Property Start -->
								<div class="col-lg-12 col-md-12">
									<div class="property-listing property-1">
											
										<div class="listing-img-wrapper">
											<a href="single-property-2.html">
												<?php $foto = unserialize($value['image']); ?>
												<img src="<?= base_url().$foto[0]; ?>" class="img-fluid mx-auto" alt="" />
											</a>
											<span class="property-type">For Sale</span>
										</div>
										
										<div class="listing-content">
										
											<div class="listing-detail-wrapper">
												<div class="listing-short-detail">
													<h4 class="listing-name"><a href="single-property-2.html"><?= $value['nama_rumah'] ?></a></h4>
													<span class="listing-location"><i class="ti-location-pin"></i><?= $value['alamat'] ?></span>
												</div>
												<div class="list-author">
													<a href="#"><img src="<?= base_url(); ?>asset/home/img/add-user.png" class="img-fluid img-circle avater-30" alt=""></a>
												</div>
											</div>
										
											<div class="listing-features-info">
												<ul>
													<li><strong>Jumalah kamar:</strong><?= $value['jumlah_kamar'] ?></li><br>
													<li><strong></strong></li>
													<li><strong>Luas :</strong><?= $value['luas_bangunan'] ?></li>
												</ul>
											</div>
										
											<div class="listing-footer-wrapper">
												<div class="listing-price">
													<h4 class="list-pr">Rp. <?= $value['harga'] ?></h4>
												</div>
												<div class="listing-detail-btn">
													<a href="single-property-2.html" class="more-btn">More Info</a>
												</div>
											</div>
											
										</div>
										
									</div>
								</div>
								<?php } ?>
								<!-- Single Property End -->
													
								
							</div>
					
						</div>
						
						<!-- property Sidebar -->
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="page-sidebar">
								
								<!-- Find New Property -->
								<div class="sidebar-widgets">
									
									<h4>Find New Property</h4>
									
						<form action="<?= base_url() ?>page/actioncari" method="POST">
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
									
									<div class="form-group">
											<div class="input-with-icon">
												<select id="jumlah_kamar" name="jumlah_kamar" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
												</select>
											</div>
										</div>

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

										<div class="form-group">
											<div class="input-with-icon">
												<select id="sumber_air" name="sumber_air" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">PDAM</option>
													<option value="2">Sumur</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<div class="input-with-icon">
												<select id="listrik" name="listrik" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">Pascabayar</option>
													<option value="2">Prabayar</option>
												</select>
											</div>
										</div>

										<h4>Lokasi dekat dengan</h4>
										<ul class="no-ul-list ">
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
									
									
										<button type="submit" class="btn btn-theme full-width">Find New Home</button>
									
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
				<div>
					<div class="container">
						<div class="row">
							
							<div class="col-lg-3 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title">About Workio</h4>
									<p>Themez Hub is a team of young professionals that has been successfully creating Creative Website templates already for several years.</p>
									<a href="#" class="other-store-link">
										<div class="other-store-app">
											<div class="os-app-icon">
												<i class="ti-android"></i>
											</div>
											<div class="os-app-caps">
												Google Store
											</div>
										</div>
									</a>
								</div>
							</div>		
							<div class="col-lg-3 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title">Useful links</h4>
									<ul class="footer-menu">
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="faq.html">FAQs Page</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="about-us.html">About Us</a></li>
									</ul>
								</div>
							</div>
									
							<div class="col-lg-3 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title">Get in Touch</h4>
									<div class="fw-address-wrap">
										<div class="fw fw-location">
											7744 North Park, New York
										</div>
										<div class="fw fw-mail">
											support@drizvato77.com
										</div>
										<div class="fw fw-call">
											+91 254 584 7584
										</div>
										<div class="fw fw-skype">
											drizvato77
										</div>
										<div class="fw fw-web">
											www.Themez Hub.com
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-lg-3 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title">Follow Us</h4>
									<p>Follow & Subscribe your email to get new business tips.</p>
									<ul class="footer-bottom-social">
										<li><a href="#"><i class="ti-facebook"></i></a></li>
										<li><a href="#"><i class="ti-twitter"></i></a></li>
										<li><a href="#"><i class="ti-instagram"></i></a></li>
										<li><a href="#"><i class="ti-linkedin"></i></a></li>
									</ul>
									
									<form class="f-newsletter mt-4">
										<input type="email" class="form-control sigmup-me" placeholder="Your Email Address" required="required">
										<button type="submit" class="btn"><i class="ti-arrow-right"></i></button>
									</form>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							
							<div class="col-lg-12 col-md-12 text-center">
								<p class="mb-0">© 2019 Rikada. Designd By <a href="https://themezhub.com/">Themez Hub</a> All Rights Reserved</p>
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

	</body>

<!-- Mirrored from codeminifier.com/rikada-template/rikada/list-layout-with-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2019 23:07:42 GMT -->
</html>