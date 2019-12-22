<!DOCTYPE html>
<html lang="en">
	<!-- Mirrored from html.codedthemes.com/gradient-able/bootstrap/default/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 01:19:32 GMT -->
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
		<link rel="stylesheet" href="<?= base_url() ?>asset/assets/css/plugins/ekko-lightbox.css">
		<link rel="stylesheet" href="<?= base_url() ?>asset/assets/css/plugins/lightbox.min.css">
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

	<div class="pcoded-main-container">
		<div class="pcoded-content">
			<div class="user-profile user-card mb-4">
				<div class="card-header border-0 p-0 pb-0">
					<div class="cover-img-block">
						<img src="<?= base_url() ?>asset/assets/images/profile/cover.jpg" alt="" class="img-fluid">
					</div>
				</div>
				<div class="card-body py-0">
					<div class="user-about-block m-0">
						<div class="row">
							<div class="col-md-4 text-center mt-n5">
								<div class="change-profile text-center">
									<div class="dropdown w-auto d-inline-block">
										<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<div class="profile-dp">
												<div class="position-relative d-inline-block">
													<img class="img-radius img-fluid wid-100" src="<?= base_url() ?>asset/assets/images/user/avatar-5.jpg" alt="User image">
												</div>
											</div>
										</a>
									</div>
								</div>
								<h5 class="mb-1">Lary Doe</h5>
								<p class="mb-2 text-muted">UI/UX Designer</p>
							</div>
							<div class="col-md-8 mt-md-4">
								<div class="row">
									<div class="col-md-6">
										<a href="#!" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-globe mr-2 f-18"></i>www.Codedthemes.net</a>
										<div class="clearfix"></div>
										<a href="http://html.codedthemes.com/cdn-cgi/l/email-protection#93f7f6fefcd3f7fcfef2fafdbdf0fcfe" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-mail mr-2 f-18"></i><span class="__cf_email__" data-cfemail="c9adaca4a689ada6a4a8a0a7e7aaa6a4">[email&#160;protected]</span></a>
										<div class="clearfix"></div>
										<a href="#!" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-phone mr-2 f-18"></i>+1 9999-999-999</a>
									</div>
									<div class="col-md-6">
										<div class="media">
											<i class="feather icon-map-pin mr-2 mt-1 f-18"></i>
											<div class="media-body">
												<p class="mb-0 text-muted">4289 Calvin Street</p>
												<p class="mb-0 text-muted">Baltimore, near MD Tower Maryland,</p>
												<p class="mb-0 text-muted">Maryland (21201)</p>
											</div>
										</div>
									</div>
								</div>
								<ul class="nav nav-tabs profile-tabs nav-fill" id="myTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link text-reset active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="feather icon-user mr-2"></i>Profile</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="width:100% !important">
				<div class="tab-pane fade show active" id="profile" style="width:100% !important" role="tabpanel" aria-labelledby="profile-tab">
					<div class="card" >
						<div class="card-body d-flex align-items-center justify-content-between">
							<h5 class="mb-0">Personal details</h5>
							<button type="button" class="btn btn-primary btn-sm rounded m-0 float-right" data-toggle="collapse" data-target=".pro-det-edit" aria-expanded="false" aria-controls="pro-det-edit-1 pro-det-edit-2">
							<i class="feather icon-edit"></i>
							</button>
						</div>
						<div class="card-body border-top pro-det-edit collapse show" id="pro-det-edit-1">
							<form>
								<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Full Name</label>
										<div class="col-sm-9">
											Lary Doe
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Gender</label>
										<div class="col-sm-9">
											Male
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Birth Date</label>
										<div class="col-sm-9">
											16-12-1994
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Martail Status</label>
										<div class="col-sm-9">
											Unmarried
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Location</label>
										<div class="col-sm-9">
											<p class="mb-0 text-muted">4289 Calvin Street</p>
											<p class="mb-0 text-muted">Baltimore, near MD Tower Maryland,</p>
											<p class="mb-0 text-muted">Maryland (21201)</p>
										</div>
									</div>
							</form>
						</div>
						<div class="card-body border-top pro-det-edit collapse " id="pro-det-edit-2">
							<form>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Full Name</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" placeholder="Full Name" value="Lary Doe">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Gender</label>
									<div class="col-sm-9">
										<div class="custom-control custom-radio custom-control-inline">
											<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" checked>
											<label class="custom-control-label" for="customRadioInline1">Male</label>
										</div>
										<div class="custom-control custom-radio custom-control-inline">
											<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
											<label class="custom-control-label" for="customRadioInline2">Female</label>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Birth Date</label>
									<div class="col-sm-9">
										<input type="date" class="form-control" value="1994-12-16">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Martail Status</label>
									<div class="col-sm-9">
										<select class="form-control" id="exampleFormControlSelect1">
											<option>Select Marital Status</option>
											<option>Married</option>
											<option selected>Unmarried</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Location</label>
									<div class="col-sm-9">
										<textarea class="form-control">4289 Calvin Street,  Baltimore, near MD Tower Maryland, Maryland (21201)</textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label"></label>
									<div class="col-sm-9">
										<button type="submit" class="btn btn-primary">Save</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="card">
						<div class="card-body d-flex align-items-center justify-content-between">
							<h5 class="mb-0">Contact Information</h5>
							<button type="button" class="btn btn-primary btn-sm rounded m-0 float-right" data-toggle="collapse" data-target=".pro-dont-edit" aria-expanded="false" aria-controls="pro-dont-edit-1 pro-dont-edit-2">
							<i class="feather icon-edit"></i>
							</button>
						</div>
						<div class="card-body border-top pro-dont-edit collapse show" id="pro-dont-edit-1">
							<form>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Mobile Number</label>
									<div class="col-sm-9">
										+1 9999-999-999
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Email Address</label>
									<div class="col-sm-9">
										<a href="http://html.codedthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2662434b496642494b474f480845494b">[email&#160;protected]</a>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Twitter</label>
									<div class="col-sm-9">
										@phonixcoded
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Skype</label>
									<div class="col-sm-9">
										@phonixcoded demo
									</div>
								</div>
							</form>
						</div>
						<div class="card-body border-top pro-dont-edit collapse " id="pro-dont-edit-2">
							<form>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Mobile Number</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" placeholder="Full Name" value="+1 9999-999-999">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Email Address</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" placeholder="Ema" value="Demo@domain.com">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Twitter</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" placeholder="Full Name" value="@phonixcoded">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Skype</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" placeholder="Full Name" value="@phonixcoded demo">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label"></label>
									<div class="col-sm-9">
										<button type="submit" class="btn btn-primary">Save</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="card">
						<div class="card-body d-flex align-items-center justify-content-between">
							<h5 class="mb-0">other Information</h5>
							<button type="button" class="btn btn-primary btn-sm rounded m-0 float-right" data-toggle="collapse" data-target=".pro-wrk-edit" aria-expanded="false" aria-controls="pro-wrk-edit-1 pro-wrk-edit-2">
							<i class="feather icon-edit"></i>
							</button>
						</div>
						<div class="card-body border-top pro-wrk-edit collapse show" id="pro-wrk-edit-1">
							<form>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Occupation</label>
									<div class="col-sm-9">
										Designer
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Skills</label>
									<div class="col-sm-9">
										C#, Javascript, Scss
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Jobs</label>
									<div class="col-sm-9">
										Codedthemes
									</div>
								</div>
							</form>
						</div>
						<div class="card-body border-top pro-wrk-edit collapse " id="pro-wrk-edit-2">
							<form>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Occupation</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" placeholder="Full Name" value="Designer">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Email Address</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" placeholder="Ema" value="Demo@domain.com">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Jobs</label>
									<div class="col-sm-9">
										<div class="custom-control custom-checkbox form-check d-inline-block mr-2">
											<input type="checkbox" class="custom-control-input" id="pro-wrk-chk-1" checked>
											<label class="custom-control-label" for="pro-wrk-chk-1">C#</label>
										</div>
										<div class="custom-control custom-checkbox form-check d-inline-block mr-2">
											<input type="checkbox" class="custom-control-input" id="pro-wrk-chk-2" checked>
											<label class="custom-control-label" for="pro-wrk-chk-2">Javascript</label>
										</div>
										<div class="custom-control custom-checkbox form-check d-inline-block mr-2">
											<input type="checkbox" class="custom-control-input" id="pro-wrk-chk-3" checked>
											<label class="custom-control-label" for="pro-wrk-chk-3">Scss</label>
										</div>
										<div class="custom-control custom-checkbox form-check d-inline-block mr-2">
											<input type="checkbox" class="custom-control-input" id="pro-wrk-chk-4">
											<label class="custom-control-label" for="pro-wrk-chk-4">Html</label>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label"></label>
									<div class="col-sm-9">
										<button type="submit" class="btn btn-primary">Save</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
</div>
</div>
</div>

<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?= base_url() ?>asset/assets/js/vendor-all.min.js"></script>
<script src="<?= base_url() ?>asset/assets/js/plugins/bootstrap.min.js"></script>
<script src="<?= base_url() ?>asset/assets/js/pcoded.min.js"></script>
<script src="<?= base_url() ?>asset/assets/js/menu-setting.min.js"></script>
<script src="<?= base_url() ?>asset/assets/js/plugins/ekko-lightbox.min.js"></script>
<script src="<?= base_url() ?>asset/assets/js/plugins/lightbox.min.js"></script>
<script src="<?= base_url() ?>asset/assets/js/pages/ac-lightbox.js"></script>
<script>
	// [ customer-scroll ] start
	var px = new PerfectScrollbar('.cust-scroll', {
		wheelSpeed: .5,
		swipeEasing: 0,
		wheelPropagation: 1,
		minScrollbarLength: 40,
	});
	// [ customer-scroll ] end
</script>
</body>
<!-- Mirrored from html.codedthemes.com/gradient-able/bootstrap/default/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2019 01:20:11 GMT -->
</html>