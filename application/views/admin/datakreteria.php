<!DOCTYPE html>
<html lang="en">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
	<head>
		<title>kontrakan.plg.id</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="" />
		<meta name="keywords" content="">
		<meta name="author" content="Codedthemes" />
		<link rel="icon" href="<?= base_url() ?>asset/assets/images/newlogoicon.png" type="image/x-icon">
		<link rel="stylesheet" href="<?= base_url() ?>asset/assets/css/plugins/dataTables.bootstrap4.min.css">
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
								<h5 class="m-b-10">Data Kriteria</h5>
							</div>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
								<li class="breadcrumb-item"><a href="#!">Kriteria</a></li>
								<li class="breadcrumb-item"><a href="#!">Data Kriteria</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-header">
                            <h5>Data Kriteria</h5>
                            
						</div>
						<div class="card-body">
							<div class="table-responsive dt-responsive">
								<table id="setting-default" class="table table-striped table-bordered nowrap">
                                    <thead>
										<tr align="center">
                                            <th>Kode</th>
											<th>Nama Kriteria</th>
											<th>Tipe Kriteria</th>
											<th>Bobot</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
                                        <?php foreach($kreteria as $ket){ ?>
										<tr class="gradeX">
                                            <td align="center"><?= $ket->kd_kreteria ?></td>
											<td ><?= $ket->nama_kreteria ?></td>
											<td align="center"><?php if($ket->tipe_pilihan=='1'){echo "Kriteria Pilihan"; }
																		else if($ket->tipe_pilihan=='2'){echo "Kriteria Range"; }
																		else{ echo "tipe multipel"; } ?></td>
                                            <td align="center"><?= $ket->bobot ?></td>
											<td class="actions" align="center">
												<a href="<?= base_url() ?>admin/detailkriteria?kd_kreteria=<?= $ket->kd_kreteria ?>"><button type="button" class="btn  btn-icon btn-success"><i class="fa fa-eye"></i> Detail</button></a>
                                                <a href="<?= base_url() ?>admin/formupdatekrteria?kd=<?= $ket->kd_kreteria ?>"><button type="button" class="btn  btn-icon btn-primary"><i class="feather icon-edit"></i> Edit</button></a>
												<a href="<?= base_url() ?>admin/deletekreteria?kd_kreteria=<?= $ket->kd_kreteria ?>"><button type="button" class="btn  btn-icon btn-danger"><i class="feather icon-trash-2"></i> Hapus</button></a>
											</td>
                                        </tr>
                                        <?php } ?>
									</tbody>
								</table>
                            </div>
                        </div>
                        
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include "footer.php"; ?>
	<script src="<?= base_url() ?>asset/assets/js/vendor-all.min.js"></script>
	<script src="<?= base_url() ?>asset/assets/js/plugins/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>asset/assets/js/pcoded.min.js"></script>
	<script src="<?= base_url() ?>asset/assets/js/plugins/jquery.dataTables.min.js"></script>
	<script src="<?= base_url() ?>asset/assets/js/plugins/dataTables.bootstrap4.min.js"></script>
	<script src="<?= base_url() ?>asset/assets/js/pages/data-advance-custom.js"></script>
</body>
</html>