<!DOCTYPE html>
<html lang="zxx">
	
<!-- Mirrored from codeminifier.com/rikada-template/rikada/single-property-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Nov 2019 23:09:00 GMT -->
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
			<?php foreach($rumah as $home){
                $detail = $home;
            } ?>
			
			
			
	
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Property Detail Start ================================== -->
			<section class="gray">
				<div class="container">
					<div class="row">
						<div class="block-wrap">
								
								<div class="block-header">
									<h4 class="property-name"><?= $detail->nama_rumah ?></h4>
									<i class="lni-map-marker"></i> <?= $detail->alamat ?><br><br>
								</div>

								
								<div class="block-body" align="center">
									<div class="col-lg-7 col-md-7 col-sm-12">
										
										<div class="slider-for">
                                			<?php $foto = unserialize($detail->image); 
                                			foreach($foto as $f) { ?>
											<a href="<?= base_url().$f; ?>" class="item-slick"><img style="height:400px; width : 100%" src="<?= base_url().$f; ?>" alt="Alt"></a>
                                			<?php } ?>
										</div>

							
									</div>
						
									

								<div class="col-lg-12 col-md-12">
									<div class="slider-nav" align="center">
                           			 <?php $foto = unserialize($detail->image); 
                                	foreach($foto as $f) { ?>
										<div class="item-slick"><img align="center" style="height:100px; width : 100%" src="<?= base_url().$f; ?>" alt="Alt"></div>
                               			 <?php } ?>
										</div>
									</div>

								<br><br></div>

								<div class="slide-property-first">
									<div class="pr-price-into">
										<h5>Harga Sewa Rumah Kontrakan</h5>
										<span> <b>Rp. <?= $detail->harga ?> / tahun</b></span>
									</div>
								</div>
                      			
                      		</div>

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
									<h4 class="block-title">Lokasi dekat dengan</h4>
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
									<div class="block-header" >
									<h6 class="block-title" align="center">Hubungi Pemilik</h6>
								</div>
									<div class="agent-title"><br>
										
										<div class="agent-details">
											<div class="agent-photo" align="center">
												<br><br><br><br><br><img src="<?= base_url().$detail->foto; ?>" alt=""><br><br>
												<h6><a href="#"><?= $detail->nama ?></a></h6>
												<span><i class="lni-phone-handset"></i><?= $detail->tlp ?></span></div><br><br><br><br>
											
											</div>
									
									</div>
                                    
									<br><br><br><br>
								</div>
								
								
							
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ Property Detail End ================================== -->
			
			
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