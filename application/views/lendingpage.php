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
				<div class="container">
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
													<option value="2">Prabayar</option>
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
								<h2>New & featured Property</h2>
								<p>Find new & featured property for you.</p>
							</div>
						</div>
					</div>
					
					<div class="row">
						<!-- Single Property -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">
								
								<div class="listing-img-wrapper">
									<div class="list-img-slide">
										<div class="click">
											<div><a href="single-property-1.html"><img src="<?= base_url(); ?>asset/home/img/p-1.jpg" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="<?= base_url(); ?>asset/home/img/p-2.jpg" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="<?= base_url(); ?>asset/home/img/p-3.jpg" class="img-fluid mx-auto" alt="" /></a></div>
										</div>
									</div>
									<span class="property-type">For Rent</span>
								</div>
								
								<div class="listing-detail-wrapper pb-0">
									<div class="listing-short-detail">
										<h4 class="listing-name"><a href="single-property-1.html">New Clue Apartment</a><i class="list-status ti-check"></i></h4>
									</div>
								</div>
								
								<div class="price-features-wrapper">
									<div class="listing-price-fx">
										<h6 class="listing-card-info-price price-prefix">10,547<span class="price-suffix">/mo</span></h6>
									</div>
									<div class="list-fx-features">
										<div class="listing-card-info-icon">
											<span class="inc-fleat inc-bed">3 Beds</span>
										</div>
										<div class="listing-card-info-icon">
											<span class="inc-fleat inc-bath">1 Bath</span>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<!-- End Single Property -->
						
						<!-- Single Property -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">
								
								<div class="listing-img-wrapper">
									<div class="list-img-slide">
										<div class="click">
											<div><a href="single-property-1.html"><img src="<?= base_url(); ?>asset/home/img/p-4.jpg" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="<?= base_url(); ?>asset/home/img/p-5.jpg" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="<?= base_url(); ?>asset/home/img/p-6.jpg" class="img-fluid mx-auto" alt="" /></a></div>
										</div>
									</div>
									<div class="listing-price">
										<h4 class="list-pr">$2,580</h4>
									</div>
									<span class="property-type">For Sale</span>
								</div>
								
								<div class="listing-detail-wrapper pb-0">
									<div class="listing-short-detail">
										<h4 class="listing-name"><a href="single-property-1.html">Resort Valley Ocs</a><i class="list-status ti-check"></i></h4>
									</div>
								</div>
								
								<div class="price-features-wrapper">
									<div class="listing-price-fx">
										<h6 class="listing-card-info-price price-prefix">85,470</h6>
									</div>
									<div class="list-fx-features">
										<div class="listing-card-info-icon">
											<span class="inc-fleat inc-bed">2 Beds</span>
										</div>
										<div class="listing-card-info-icon">
											<span class="inc-fleat inc-bath">2 Bath</span>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<!-- End Single Property -->
						
						<!-- Single Property -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">
								
								<div class="listing-img-wrapper">
									<div class="list-img-slide">
										<div class="click">
											<div><a href="single-property-1.html"><img src="<?= base_url(); ?>asset/home/img/p-7.jpg" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="<?= base_url(); ?>asset/home/img/p-9.jpg" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="<?= base_url(); ?>asset/home/img/p-8.jpg" class="img-fluid mx-auto" alt="" /></a></div>
										</div>
									</div>
									<span class="property-type">For Rent</span>
								</div>
								
								<div class="listing-detail-wrapper pb-0">
									<div class="listing-short-detail">
										<h4 class="listing-name"><a href="single-property-1.html">Luxury Home in Manhattan</a><i class="list-status ti-check"></i></h4>
									</div>
								</div>
								
								<div class="price-features-wrapper">
									<div class="listing-price-fx">
										<h6 class="listing-card-info-price price-prefix">11,584<span class="price-suffix">/mo</span></h6>
									</div>
									<div class="list-fx-features">
										<div class="listing-card-info-icon">
											<span class="inc-fleat inc-bed">3 Beds</span>
										</div>
										<div class="listing-card-info-icon">
											<span class="inc-fleat inc-bath">2 Bath</span>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<!-- End Single Property -->
						
						<!-- Single Property -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">
								
								<div class="listing-img-wrapper">
									<div class="list-img-slide">
										<div class="click">
											<div><a href="single-property-1.html"><img src="<?= base_url(); ?>asset/home/img/p-10.jpg" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="<?= base_url(); ?>asset/home/img/p-11.jpg" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="<?= base_url(); ?>asset/home/img/p-12.jpg" class="img-fluid mx-auto" alt="" /></a></div>
										</div>
									</div>
									<span class="property-type">For Rent</span>
								</div>
								
								<div class="listing-detail-wrapper pb-0">
									<div class="listing-short-detail">
										<h4 class="listing-name"><a href="single-property-1.html">Energy Certificate for EU</a><i class="list-status ti-check"></i></h4>
									</div>
								</div>
								
								<div class="price-features-wrapper">
									<div class="listing-price-fx">
										<h6 class="listing-card-info-price price-prefix">5,750<span class="price-suffix">/mo</span></h6>
									</div>
									<div class="list-fx-features">
										<div class="listing-card-info-icon">
											<span class="inc-fleat inc-bed">2 Beds</span>
										</div>
										<div class="listing-card-info-icon">
											<span class="inc-fleat inc-bath">1 Bath</span>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<!-- End Single Property -->
						
						<!-- Single Property -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">
								
								<div class="listing-img-wrapper">
									<div class="list-img-slide">
										<div class="click">
											<div><a href="single-property-1.html"><img src="<?= base_url(); ?>asset/home/img/p-13.jpg" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="<?= base_url(); ?>asset/home/img/p-14.jpg" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="<?= base_url(); ?>asset/home/img/p-15.jpg" class="img-fluid mx-auto" alt="" /></a></div>
										</div>
									</div>
									<span class="property-type">For Sale</span>
								</div>
								
								<div class="listing-detail-wrapper pb-0">
									<div class="listing-short-detail">
										<h4 class="listing-name"><a href="single-property-1.html">Office Space New York</a><i class="list-status ti-check"></i></h4>
									</div>
								</div>
								
								<div class="price-features-wrapper">
									<div class="listing-price-fx">
										<h6 class="listing-card-info-price price-prefix">187,895</h6>
									</div>
									<div class="list-fx-features">
										<div class="listing-card-info-icon">
											<span class="inc-fleat inc-bed">3 Beds</span>
										</div>
										<div class="listing-card-info-icon">
											<span class="inc-fleat inc-bath">2 Bath</span>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<!-- End Single Property -->
						
						<!-- Single Property -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">
								
								<div class="listing-img-wrapper">
									<div class="list-img-slide">
										<div class="click">
											<div><a href="single-property-1.html"><img src="<?= base_url(); ?>asset/home/img/p-16.jpg" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="<?= base_url(); ?>asset/home/img/p-17.jpg" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="<?= base_url(); ?>asset/home/img/p-18.jpg" class="img-fluid mx-auto" alt="" /></a></div>
										</div>
									</div>
									<span class="property-type">For Rent</span>
								</div>
								
								<div class="listing-detail-wrapper pb-0">
									<div class="listing-short-detail">
										<h4 class="listing-name"><a href="single-property-1.html">Apartment to rent in Queens</a><i class="list-status ti-check"></i></h4>
									</div>
								</div>
								
								<div class="price-features-wrapper">
									<div class="listing-price-fx">
										<h6 class="listing-card-info-price price-prefix">9,587<span class="price-suffix">/mo</span></h6>
									</div>
									<div class="list-fx-features">
										<div class="listing-card-info-icon">
											<span class="inc-fleat inc-bed">3 Beds</span>
										</div>
										<div class="listing-card-info-icon">
											<span class="inc-fleat inc-bath">2 Bath</span>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<!-- End Single Property -->
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="text-center mt-4">
								<a href="#" class="btn btn-theme-2">Browse More Property</a>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ============================ Property End ================================== -->
			
			
			<!-- ============================ Agent Start ================================== -->
			<section>
				<div class="container">
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="sec-heading center">
								<h2>Our Featured Agent</h2>
								<p>Find new & featured property for you.</p>
							</div>
						</div>
					</div>
					
					<div class="row">
						
						<!-- Single Agent -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid">
								
								<div class="jb-bookmark"><a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Bookmark"><i class="ti-bookmark"></i></a></div>
								<div class="agent-call"><a href="#"><i class="lni-phone-handset"></i></a></div>
								<div class="agents-grid-wrap">
									
									<div class="fr-grid-thumb">
										<a href="http://themezhub.com/">
											<div class="overall-rate">4.4</div>
											<img src="<?= base_url(); ?>asset/home/img/user-1.jpg" class="img-fluid mx-auto" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil">
										<h5 class="fr-can-name"><a href="#">Colin H. Renda</a></h5>
										<span class="fr-position"><i class="lni-map-marker"></i>3599 Huntz Lane</span>
										<div class="fr-can-rating">
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star"></i>
										</div>
									</div>
									
								</div>
								
								<div class="fr-grid-info">
									<ul>
										<li>Property<span>306</span></li>
										<li>Email<span>colin@gmail.com</span></li>
										<li>Phone<span>91 123 456 7859</span></li>
									</ul>
								</div>
								
								<div class="fr-grid-footer">
									<a href="#" class="btn btn-outline-theme full-width">View Profile<i class="ti-arrow-right ml-1"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid">
								
								<div class="jb-bookmark"><a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Bookmark"><i class="ti-bookmark"></i></a></div>
								<div class="agent-call"><a href="#"><i class="lni-phone-handset"></i></a></div>
								<div class="agents-grid-wrap">
									
									<div class="fr-grid-thumb">
										<a href="http://themezhub.com/">
											<div class="overall-rate">4.3</div>
											<img src="<?= base_url(); ?>asset/home/img/user-2.jpg" class="img-fluid mx-auto" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil">
										<h5 class="fr-can-name"><a href="#">James N. Green</a></h5>
										<span class="fr-position"><i class="lni-map-marker"></i>3599 Huntz Lane</span>
										<div class="fr-can-rating">
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star"></i>
										</div>
									</div>
									
								</div>
								
								<div class="fr-grid-info">
									<ul>
										<li>Property<span>306</span></li>
										<li>Email<span>James58@gmail.com</span></li>
										<li>Phone<span>91 123 456 7859</span></li>
									</ul>
								</div>
								
								<div class="fr-grid-footer">
									<a href="#" class="btn btn-outline-theme full-width">Lihat Rumah Kontrakan<i class="ti-arrow-right ml-1"></i></a>
								</div>
								
							</div>
						</div>
						
						<!-- Single Agent -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="agents-grid">
								
								<div class="jb-bookmark"><a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Bookmark"><i class="ti-bookmark"></i></a></div>
								<div class="agent-call"><a href="#"><i class="lni-phone-handset"></i></a></div>
								<div class="agents-grid-wrap">
									
									<div class="fr-grid-thumb">
										<a href="http://themezhub.com/">
											<div class="overall-rate">4.5</div>
											<img src="<?= base_url(); ?>asset/home/img/user-3.jpg" class="img-fluid mx-auto" alt="" />
										</a>
									</div>
									<div class="fr-grid-deatil">
										<h5 class="fr-can-name"><a href="http://themezhub.com/">Colin H. Renda</a></h5>
										<span class="fr-position"><i class="lni-map-marker"></i>3599 Huntz Lane</span>
										<div class="fr-can-rating">
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star filled"></i>
											<i class="ti-star"></i>
										</div>
									</div>
									
								</div>
								
								<div class="fr-grid-info">
									<ul>
										<li>Property<span>306</span></li>
										<li>Email<span>colin@gmail.com</span></li>
										<li>Phone<span>91 123 456 7859</span></li>
									</ul>
								</div>
								
								<div class="fr-grid-footer">
									<a href="http://themezhub.com/" class="btn btn-outline-theme full-width">View Profile<i class="ti-arrow-right ml-1"></i></a>
								</div>
								
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
			<!-- ============================ Agent End ================================== -->
		
			
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