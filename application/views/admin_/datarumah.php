<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Advanced Tables | Okler Themes | Porto-Admin</title>
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
		<link rel="stylesheet" href="<?= base_url() ?>asset/admin/vendor/select2/select2.css" />
		<link rel="stylesheet" href="<?= base_url() ?>asset/admin/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

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
			<?php include "header.php" ?>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?php include "menu.php" ?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Advanced Tables</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Tables</span></li>
								<li><span>Advanced</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Rows with Details</h2>
							</header>
							<input type="text" patre>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-details">
									<thead>
                                        <tr>
											<th>pemilik</th>
											<th>nama rumah</th>
											<th>harga</th>
                                            <th>status</th>
                                            <th>action</th>
										</tr>
									</thead>
									<tbody>
                                        <?php foreach($rumah as $home){ ?>
										<tr class="gradeX">
                                            <td><?= $home->id_pemilik ?></td>
                                            <td><?= $home->nama_rumah ?></td>
                                            <td><?= $home->harga ?></td>
											<td><?= $home->status ?></td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
                                        </tr>
                                        <?php } ?>
									</tbody>
								</table>
							</div>
						</section>
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
		<script src="<?= base_url() ?>asset/admin/vendor/select2/select2.js"></script>
		<script src="<?= base_url() ?>asset/admin/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="<?= base_url() ?>asset/admin/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="<?= base_url() ?>asset/admin/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?= base_url() ?>asset/admin/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?= base_url() ?>asset/admin/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?= base_url() ?>asset/admin/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="<?= base_url() ?>asset/admin/javascripts/tables/examples.datatables.default.js"></script>
		<script src="<?= base_url() ?>asset/admin/javascripts/tables/examples.datatables.tabletools.js"></script>

		<script>
		
			(function( $ ) {

			'use strict';

			var datatableInit = function() {
				var $table = $('#datatable-details');

				// format function for row details
				var fnFormatDetails = function( datatable, tr ) {
					var data = datatable.fnGetData( tr );

					return [
						'<table class="table mb-none">',
							'<tr class="b-top-none">',
								'<td><label class="mb-none">Jumlah kamar :</label></td>',
								'<td>' + <?= $home->id_pemilik ?> + '</td>',
							'</tr>',
							'<tr>',
								'<td><label class="mb-none">Luas bangunan:</label></td>',
								'<td>'+ <?= $home->id_pemilik ?> +'</td>',
							'</tr>',
							'<tr>',
								'<td><label class="mb-none">link</label></td>',
								'<td>untuk selanjutnya klik <a href=#>abbabab </a></td>',
							'</tr>',
						'</div>'
					].join('');
				};

				// insert the expand/collapse column
				var th = document.createElement( 'th' );
				var td = document.createElement( 'td' );
				td.innerHTML = '<i data-toggle class="fa fa-plus-square-o text-primary h5 m-none" style="cursor: pointer;"></i>';
				td.className = "text-center";

				$table
					.find( 'thead tr' ).each(function() {
						this.insertBefore( th, this.childNodes[0] );
					});

				$table
					.find( 'tbody tr' ).each(function() {
						this.insertBefore(  td.cloneNode( true ), this.childNodes[0] );
					});

				// initialize
				var datatable = $table.dataTable({
					aoColumnDefs: [{
						bSortable: false,
						aTargets: [ 0 ]
					}],
					aaSorting: [
						[1, 'asc']
					]
				});

				// add a listener
				$table.on('click', 'i[data-toggle]', function() {
					var $this = $(this),
						tr = $(this).closest( 'tr' ).get(0);

					if ( datatable.fnIsOpen(tr) ) {
						$this.removeClass( 'fa-minus-square-o' ).addClass( 'fa-plus-square-o' );
						datatable.fnClose( tr );
					} else {
						$this.removeClass( 'fa-plus-square-o' ).addClass( 'fa-minus-square-o' );
						datatable.fnOpen( tr, fnFormatDetails( datatable, tr), 'details' );
					}
				});
			};

			$(function() {
				datatableInit();
			});

			}).apply( this, [ jQuery ]);
		</script>
	</body>
</html>