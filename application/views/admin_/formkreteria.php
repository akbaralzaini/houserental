<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Basic Forms | Okler Themes | Porto-Admin</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?= base_url() ?>asset/admin/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?= base_url() ?>asset/admin/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?= base_url() ?>asset/admin/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?= base_url() ?>asset/admin/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?= base_url() ?>asset/admin/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?= base_url() ?>asset/admin/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?= base_url() ?>asset/admin/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?= base_url() ?>asset/admin/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="<?= base_url() ?>asset/admin/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<?= include "header.php" ?>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?= include "menu.php" ?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Basic Forms</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Forms</span></li>
								<li><span>Basic</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
										<h2 class="panel-title">Form Kreteria</h2>
									</header>
									<form class="form-horizontal form-bordered" method="get">
										<div class="panel-body">
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Nama kreteria</label>
												<div class="col-md-6">
													<input type="text" name="nama_kreteria" class="form-control" id="inputDefault">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Bobot</label>
												<div class="col-md-6">
													<input type="text" name="bobot" class="form-control" id="inputDefault">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputSuccess">tipe pilihan</label>
												<div class="col-md-6">
													<select class="form-control mb-md" name="dbType" id="dbType">
														<option value="piliha">Opsi pilihan</option>
														<option value="">opsi range</option>
														<option>2</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>
											</div>
						
											<div class="form-group" >
												<label class="col-md-3 control-label">Column sizing</label>
												<div class="col-sm-8" id="input_fields_wrap">
													<div class="row" >
														<div class="col-sm-4">
															<input type="text" class="form-control" placeholder="data">
														</div>
														<div class="visible-xs mb-md"></div>
														<div class="col-sm-2">
															<input type="text" class="form-control" placeholder="bobot">
														</div>
														<div class="col-sm-2">
															<button class="btn btn-primary" id="add_field_button">add</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<footer class="panel-footer">
											<div class="row">
												<div class="col-sm-9 col-sm-offset-3">
													<button class="btn btn-primary">Submit</button>
													<button type="reset" class="btn btn-default">Reset</button>
												</div>
											</div>
										</footer>
									</form>
								</section>
						
							</div>
						</div>
					<!-- end: page -->
				</section>
			</div>
		</section>

		<!-- Vendor -->
		<script src="<?= base_url() ?>asset/admin/vendor/jquery/jquery.js"></script>
		<script src="<?= base_url() ?>asset/admin/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?= base_url() ?>asset/admin/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?= base_url() ?>asset/admin/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?= base_url() ?>asset/admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?= base_url() ?>asset/admin/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?= base_url() ?>asset/admin/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="<?= base_url() ?>asset/admin/vendor/jquery-autosize/jquery.autosize.js"></script>
		<script src="<?= base_url() ?>asset/admin/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?= base_url() ?>asset/admin/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?= base_url() ?>asset/admin/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?= base_url() ?>asset/admin/javascripts/theme.init.js"></script>
		<script>
		$(document).ready(function() {
			var max_fields      = 10; //maximum input boxes allowed
			var wrapper   		= $("#input_fields_wrap"); //Fields wrapper
			var add_button      = $("#add_field_button"); //Add button ID
			
			var x = 1; //initlal text box count
			$(add_button).click(function(e){ //on add input button click
				e.preventDefault();
				if(x < max_fields){ //max input box allowed
					x++; //text box increment
					$(wrapper).append('<div class="row" style="margin-top:10px"><div class="col-sm-4">'+
										   '<input type="text" class="form-control" placeholder="data">'+
									   '</div>'+
									   '<div class="visible-xs mb-md"></div>'+
									   '<div class="col-sm-2">'+
										   '<input type="text" class="form-control" placeholder="bobot">'+
									   '</div><a href="#" class="remove_field">Remove</a>'); //add input box
				}
			});
			
			$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
				e.preventDefault(); $(this).parent('div').remove(); x--;
			})
		});
</script>

	</body>
</html>