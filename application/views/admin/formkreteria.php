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
								<h5 class="m-b-10">Form Tambah Kriteria</h5>
							</div>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
								<li class="breadcrumb-item"><a href="#!">Kriteria</a></li>
								<li class="breadcrumb-item"><a href="#!">Input Kriteria</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h5>Form Kriteria</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <form>
                                        <div class="form-group">
											<label for="inputDefault">Nama Kriteria</label>
											<input type="text" name="nama_kreteria" class="form-control" id="inputDefault">
                                        </div>
                                        <div class="form-group">
                                            <label>Bobot</label>
                                            <input type="number" class="form-control" placeholder="bobot">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Tipe pilihan</label>
                                            <select class="form-control" id="pilihan" name="pilihan">
                                                <option value="null">-- PILIH TIPE PILIHAN --</option>
                                                <option value="1">Pilihan</option>
                                                <option value="2">Range</option>
                                                <option value="3">multipel select</option>
                                            </select>
                                        </div>
										<!-- -->
											<div class="form-group" style="display:none;" id="sub1">
												<label class="control-label">Sub Kriteria Pilihan</label>
												<div class="col-sm-8" id="input_fields_wrap">
													<div class="row" >
														<div>
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

											<div class="form-group" style="display:none;" id="sub2">
												<label class="control-label">Sub Kriteria Range</label>
												<div class="col-sm-12" id="input_fields_wrap2">
													<div class="row" >
														<div class="col-sm-3">
															<input type="text" class="form-control" placeholder="dari">
														</div>
														-
														<div class="col-sm-3">
															<input type="text" class="form-control" placeholder="sampai">
														</div>
														<div class="visible-xs mb-md"></div>
														<div class="col-sm-2">
															<input type="text" class="form-control" placeholder="bobot">
														</div>
														<div class="col-sm-1">
															<button class="btn btn-primary" id="add_field_button2">add</button>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group" style="display:none;" id="sub3">
												<label class="control-label">Sub Kriteria</label>
												<div class="col-sm-8" id="input_fields_wrap3">
													<div class="row" >
														<div>
															<input type="text" class="form-control" placeholder="data">
														</div>
														<div class="visible-xs mb-md"></div>
														<div class="col-sm-2">
															<input type="text" class="form-control" placeholder="bobot">
														</div>
														<div class="col-sm-2">
															<button class="btn btn-primary" id="add_field_button3">add</button>
														</div>
													</div>
												</div>
											</div>


										<!-- -->

                                        <button type="submit" class="btn  btn-primary">Submit</button>
                                    </form>
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
		$('#pilihan').on('change',function(){
			if( $(this).val()==="1"){
				$("#sub1").show();
				$("#sub2").hide();
				$("#sub3").hide();
			}
			else if( $(this).val()==="2"){
				$("#sub2").show();
				$("#sub1").hide();
				$("#sub3").hide();
			}
			else if( $(this).val()==="3"){
				$("#sub3").show();
				$("#sub2").hide();
				$("#sub1").hide();
			}
			else{
				$("#sub1").hide();
				$("#sub2").hide();
				$("#sub3").hide();
			}
		});
	</script>
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
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZIWmrKgy4JT8OjF8CwvzknSLWoTfqE5M&callback=initMap" ></script>
	
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
					$(wrapper).append('<div class="row" style="margin-top:10px"><div>'+
										   '<input type="text" class="form-control" placeholder="data">'+
									   '</div>'+
									   '<div class="visible-xs mb-md"></div>'+
									   '<div class="col-sm-2">'+
										   '<input type="text" class="form-control" placeholder="bobot">'+
									   '</div><a href="#" class="remove_field2">Remove</a>'); //add input box
				}
			});
			
			$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
				e.preventDefault(); $(this).parent('div').remove(); x--;
			})
		});
	</script>

<script>
		$(document).ready(function() {
			var max_fields      = 10; //maximum input boxes allowed
			var wrapper   		= $("#input_fields_wrap2"); //Fields wrapper
			var add_button      = $("#add_field_button2"); //Add button ID
			
			var x = 1; //initlal text box count
			$(add_button).click(function(e){ //on add input button click
				e.preventDefault();
				if(x < max_fields){ //max input box allowed
					x++; //text box increment
					$(wrapper).append('<div class="row" style="margin-top:5px">'+
														'<div class="col-sm-3">'+
															'<input type="text" class="form-control" placeholder="dari">'+
														'</div>-'+
														
														'<div class="col-sm-3">'+
															'<input type="text" class="form-control" placeholder="sampai">'+
														'</div>'+
														'<div class="visible-xs mb-md"></div>'+
														'<div class="col-sm-2">'+
															'<input type="text" class="form-control" placeholder="bobot">'+
														'</div>'+
															'<a href="#" class="remove_field2 col-sm-2">Remove</a>'+
													'</div>'); //add input box
				}
			});
			
			$(wrapper).on("click",".remove_field2", function(e){ //user click on remove text
				e.preventDefault(); $(this).parent('div').remove(); x--;
			})
		});
	</script>

<script>
		$(document).ready(function() {
			var max_fields      = 10; //maximum input boxes allowed
			var wrapper   		= $("#input_fields_wrap3"); //Fields wrapper
			var add_button      = $("#add_field_button3"); //Add button ID
			
			var x = 1; //initlal text box count
			$(add_button).click(function(e){ //on add input button click
				e.preventDefault();
				if(x < max_fields){ //max input box allowed
					x++; //text box increment
					$(wrapper).append('<div class="row" style="margin-top:10px"><div>'+
										   '<input type="text" class="form-control" placeholder="data">'+
									   '</div>'+
									   '<div class="visible-xs mb-md"></div>'+
									   '<div class="col-sm-2">'+
										   '<input type="text" class="form-control" placeholder="bobot">'+
									   '</div><a href="#" class="remove_field3">Remove</a>'); //add input box
				}
			});
			
			$(wrapper).on("click",".remove_field3", function(e){ //user click on remove text
				e.preventDefault(); $(this).parent('div').remove(); x--;
			})
		});
	</script>

</body>
<!-- Mirrored from html.codedthemes.com/gradient-able/bootstrap/default/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 01:20:49 GMT -->
</html>