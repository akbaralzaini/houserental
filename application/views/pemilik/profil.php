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
		<link rel="icon" href="<?= base_url() ?>asset/assets/images/newlogoicon.png" type="image/x-icon">
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
				
				<div class="card-body py-0">
					<div class="user-about-block m-0">
					<?php foreach ($pemilik as $row) { ?>
						
						
					</div>
				</div>
			</div>
			<div class="row" style="width:100% !important">
				<div class="tab-pane fade show active" id="profile" style="width:100% !important" role="tabpanel" aria-labelledby="profile-tab">
					<div class="card" >
						<div class="card-body d-flex align-items-center justify-content-between">
							<h5 class="mb-0">Data Diri</h5>
							<button type="button" class="btn btn-primary btn-sm rounded m-0 float-right" data-toggle="collapse" data-target=".pro-det-edit" aria-expanded="false" aria-controls="pro-det-edit-1 pro-det-edit-2">
							<i class="feather icon-edit"></i>
							</button>
						</div>
						<div class="card-body border-top pro-det-edit collapse show" id="pro-det-edit-1">
							<form>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Username</label>
										<div class="col-sm-9">
											<?= $row->username ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Password</label>
										<div class="col-sm-9">
											<?= substr($row->password,0,3)."****"; ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Nama</label>
										<div class="col-sm-9">
											<?= $row->nama ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Alamat</label>
										<div class="col-sm-9">
											<?= $row->alamat ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Email</label>
										<div class="col-sm-9">
										<?= $row->email ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Telepon</label>
										<div class="col-sm-9">
										<?= $row->tlp ?>
										</div>
									</div>
							</form>
						</div>
						<div class="card-body border-top pro-det-edit collapse " id="pro-det-edit-2">
							<form action="<?= base_url() ?>pemilik/updatepemilik?id_p=<?= $row->id_pemilik.'&id_u='.$row->id_user ?>" enctype="multipart/form-data" method="post">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Username</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" placeholder="Username" name="username" value="<?= $row->username ?>">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Password</label>
									<div class="col-sm-9">
										<input type="password" class="form-control" placeholder="Password" name="password" value="<?= $row->password ?>">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Nama</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" placeholder="Nama" name="nama" value="<?= $row->nama ?>">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Alamat</label>
									<div class="col-sm-9">
										<textarea type="text" class="form-control" placeholder="alamat" name="alamat"> <?= $row->alamat ?> </textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Email</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="email" value="<?= $row->email ?>">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label font-weight-bolder">Telepon</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" placeholder="telpon" name="telpon" value="<?= $row->tlp ?>">
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-sm-3 col-form-label"></label>
									<div class="col-sm-9">
										<button type="submit" class="btn btn-primary">Save</button>
									</div>
								</div>
								

							</form>
							<?php } ?>
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
<?php include "footer.php"; ?>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?= base_url() ?>asset/assets/js/vendor-all.min.js"></script>
<script src="<?= base_url() ?>asset/assets/js/plugins/bootstrap.min.js"></script>
<script src="<?= base_url() ?>asset/assets/js/pcoded.min.js"></script>
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