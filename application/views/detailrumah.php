<!DOCTYPE html>
<html lang="zxx">
	
<!-- Mirrored from codeminifier.com/rikada-template/rikada/single-property-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2019 23:09:00 GMT -->
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
        <title>Rikada - Powerful Residence Real Estate Template</title>
		
        <!-- All Plugins Css -->
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
			<?php foreach($rumah as $home){
                $detail = $home;
            } ?>
			
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="single-advance-property gray">
				<div class="container-fluid p-0">
					<div class="row align-items-center">
					
						<div class="col-lg-7 col-md-7 col-sm-12">
							<div class="slider-for">
                                <?php $foto = unserialize($detail->image); 
                                foreach($foto as $f) { ?>
								<a href="<?= base_url().$f; ?>" class="item-slick"><img style="height:400px; width : 100%" src="<?= base_url().$f; ?>" alt="Alt"></a>
                                <?php } ?>
							</div>
							
						</div>
						
						<div class="col-lg-5 col-md-5 col-sm-12">
							<div class="single-advance-caption">
							
								<div class="property-name-info">
									<h4 class="property-name"><?= $detail->nama_rumah ?></h4>
									<p class="property-desc"><?= $detail->alamat ?></p>
								</div>
								
								<div class="property-price-info">
									<h4 class="property-price">Rp. <?= $detail->harga ?></h4>
									<p class="property-sqa"><?= $detail->luas_bangunan ?><sup>m2</sup></p>
								</div>
								
								<div class="property-statement">
									<ul>
										<li>
											<i class="lni-apartment"></i>
											<div class="ps-trep">
												<span>Pemilik</span>
												<h5 class="ps-type"><?= $detail->nama ?></h5>
											</div>
										</li>
										
									</ul>
								</div>
								
							</div>
						</div>
					
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="slider-nav">
                            <?php $foto = unserialize($detail->image); 
                                foreach($foto as $f) { ?>
								<div class="item-slick"><img style="height:100px; width : 100%" src="<?= base_url().$f; ?>" alt="Alt"></div>
                                <?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<section class="spd-wrap">
				<div class="container">
					<div class="row">
						
						<div class="col-lg-12 col-md-12">
						
							<div class="slide-property-detail">
								
								<div class="slide-property-first">
									<div class="pr-price-into">
										<h2>Rp. <?= $detail->harga ?></i></h2>
										<span><i class="lni-map-marker"></i> <?= $detail->alamat ?></span>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Property Detail Start ================================== -->
			<section class="gray">
				<div class="container">
					<div class="row">
						
						<!-- property main detail -->
						<div class="col-lg-8 col-md-12 col-sm-12">
							
							<!-- Single Block Wrap -->
							<div class="block-wrap">
								
								<div class="block-header">
									<h4 class="block-title">Info Rumah</h4>
								</div>
								
								<div class="block-body">
									<ul class="dw-proprty-info">
										<li><strong>Jumlah kamar</strong><?= $detail->jumlah_kamar ?></li>
										<li><strong>Luas bangunan</strong><?= $detail->luas_bangunan ?></li>
										<li><strong>Listrik</strong><?= $detail->listrik ?></li>
										<li><strong>Sumber Air</strong><?= $detail->air ?> </li>
									</ul>
								</div>
								
                            </div>
                            
							<!-- Single Block Wrap -->
							<div class="block-wrap">
								
								<div class="block-header">
									<h4 class="block-title">Lokasi terdekat</h4>
								</div>
								
								<div class="block-body">
									<ul class="avl-features third">
                                        <?php $lokasi = unserialize($detail->lokasi);
                                        foreach ($lokasi as $key) {
                                            echo "<li>$key</li>";
                                        } ?>
										
										
									</ul>
								</div>
								
							</div>
							
							<!-- Single Block Wrap -->
							<div class="block-wrap">
								
								<div class="block-header">
									<h4 class="block-title">Location</h4>
								</div>
								
								<div class="block-body">
                                    <div id="map" class="set-map" style="height:400px;"></div>
                                    <?php 
                                        $lang = $detail->longitude;
                                        $lat = $detail->latitude; 
                                    ?>
								</div>
								
							</div>
							
							
							
						</div>
						
						<!-- property Sidebar -->
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="page-sidebar">
								
								<!-- Agent Detail -->
								<div class="agent-widget">
									<div class="agent-title">
										<div class="agent-photo"><img src="<?= base_url().$detail->foto; ?>" alt=""></div>
										<div class="agent-details">
											<h4><a href="#"><?= $detail->nama ?></a></h4>
											<span><i class="lni-phone-handset"></i><?= $detail->tlp ?></span>
										</div>
										<div class="clearfix"></div>
									</div>
                                    
									<!-- <div class="form-group">
										<input type="text" class="form-control" placeholder="Your Email">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Your Phone">
									</div>
									<div class="form-group">
										<textarea class="form-control">I'm interested in this property.</textarea>
									</div>
									<button class="btn btn-theme full-width">Send Message</button> -->
								</div>
								
								
							
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ Property Detail End ================================== -->
			
			
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
        
        
		<!-- Map -->
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
		<script src="<?= base_url(); ?>asset/home/js/map_infobox.js"></script>
		<script src="<?= base_url(); ?>asset/home/js/map.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>

<!-- Mirrored from codeminifier.com/rikada-template/rikada/single-property-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2019 23:09:00 GMT -->
</html>