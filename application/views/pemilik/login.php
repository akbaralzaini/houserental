<!DOCTYPE html>
<html lang="en">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
		<title>kontrakan.plg.id</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="" />
		<meta name="keywords" content="">
		<meta name="author" content="Codedthemes" />
		<link rel="icon" href="<?= base_url() ?>asset/assets/images/newlogoicon.png" type="image/x-icon">
		<link rel="stylesheet" href="<?= base_url() ?>asset/assets/css/style.css">
	</head>
	<div class="auth-wrapper">
		<div class="auth-content">
			<div class="card">
				<div class="row align-items-center text-center">
					<div class="col-md-12">
						<div class="card-body">
							<img src="<?= base_url() ?>asset/assets/images/newlogodark.png" alt="" class="img-fluid mb-4">
                            <h4 class="mb-3 f-w-400">Login</h4>
                            <form action="actionlogin" method="post">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="feather icon-user"></i></span>
                                    </div>
                                    <input type="text" name="username" class="form-control" placeholder="username">
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="feather icon-lock"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-block btn-primary mb-4">Sign In</button>
                            </form>
							<p class="mb-0 text-muted">Don’t have an account? <a href="registerpemilik" class="f-w-400">Sign up</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include "footer.php"; ?>
	<script src="<?= base_url() ?>asset/assets/js/vendor-all.min.js"></script>
	<script src="<?= base_url() ?>asset/assets/js/plugins/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>asset/assets/js/waves.min.js"></script>
</body>
</html>