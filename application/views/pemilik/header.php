<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed header-blue">
		<div class="m-header">
			<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
			<a href="#!" class="b-brand">
				<img src="<?= base_url() ?>asset/assets/images/newlogo.png" alt="" class="logo">
				<img src="<?= base_url() ?>asset/assets/images/newlogoicon.png" alt="" class="logo-thumb">
			</a>
			<a href="#!" class="mob-toggler">
				<i class="feather icon-more-vertical"></i>
			</a>
		</div>
			<ul class="navbar-nav ml-auto"><b><span><?= $_SESSION['nama'] ?></span></b><span></span>
				<li>
					<div class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i><span class="badge bg-primary"><span class="sr-only"></span></span></a>
						<div class="dropdown-menu dropdown-menu-right notification">
							<div class="noti-head">
								<h6 class="d-inline-block m-b-0">Notifications</h6>
							</div>
							<ul class="noti-body">
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="<?= base_url() ?>asset/assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>Admin house rental</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
											<p>rumah kontarakan dua putri anda telah di verifikasi</p>
										</div>
									</div>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="<?= base_url() ?>asset/assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
										<div class="media-body">
										<p><strong>Admin house rental</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
											<p>rumah kontarakan dua putri anda telah di verifikasi</p>
										</div>
									</div>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="<?= base_url() ?>asset/assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
										<div class="media-body">
										<p><strong>Admin house rental</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
											<p>rumah kontarakan dua putri anda telah di verifikasi</p>
										</div>
									</div>
								</li>
							</ul>
							<div class="noti-footer">
								<a href="#!">show all</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="dropdown drp-user">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?= base_url() ?>asset/assets/images/user/avatar-1.jpg" class="img-radius wid-40" alt="User-Profile-Image">
						</a>
						<div class="dropdown-menu dropdown-menu-right profile-notification">
							<div class="pro-head">
								<img src="<?= base_url() ?>asset/assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
								<span><?= $_SESSION['nama'] ?></span>
								<a href="<?= base_url() ?>pemilik/logout" class="dud-logout" title="Logout">
									<i class="feather icon-log-out"></i>
								</a>
							</div>
							<ul class="pro-body">
								<li><a href="profil" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
								
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</header>