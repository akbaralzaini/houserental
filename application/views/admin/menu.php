	<nav class="pcoded-navbar menupos-fixed menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div ">
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Menu</label>
					</li>
					<li class="nav-item">
                        <a href="<?= base_url() ?>admin/index" class="nav-link ">
                            <span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Beranda</span>
                        </a>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="fa fa-users"></i></span><span class="pcoded-mtext">User</span></a>
						<ul class="pcoded-submenu">
                            <li><a href="useradmin">Admin</a></li>
                            <li><a href="userpemilik">Pemilik rumah</a></li>
					    </ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="fa fa-home"></i></span><span class="pcoded-mtext">Data Rumah</span></a>
						<ul class="pcoded-submenu">
                            <li><a href="viewrumah">Data rumah</a></li>
					    </ul>
					</li>
					
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext">Kriteria</span></a>
						<ul class="pcoded-submenu">
                            <li><a href="viewkreteria">Data Kriteria</a></li>
                            <li><a href="tambahkreteria">Input Kriteria</a></li>
					    </ul>
				    </li>
		    </div>
	    </div>
    </nav>