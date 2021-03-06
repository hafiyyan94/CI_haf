<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Form</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<style type="text/css">
		.colbox{
			margin-left: 0px;
			margin-right: 0px;
		}
		.top5 { margin-top:5px; }
		.top7 { margin-top:7px; }
		.top10 { margin-top:10px; }
		.top15 { margin-top:15px; }
		.top17 { margin-top:17px; }
		.top30 { margin-top:30px; }
		.top50 { margin-top:50px; }
	</style>
</head>
<body>
	<div class ="container">
		<div class="row top7">
			<div class="col-lg-4 col-sm-4">
				<img src="<?php echo base_url("assets/images/ssc_logo3.jpg"); ?>" class="img-rounded" alt="Responsive image">
			</div>
			<div class="col-lg-8 col-sm-8">
				<div class="row top50">
					<div class="col-lg-2 col-sm-2">
						<?php if (strcmp($halaman,"beranda")== 0) {
							echo "<a class='btn active' href='home'>Beranda</a>";
						} else {
							echo "<a class='btn' href='home'>Beranda</a>";
						} ?>
					</div>
					<div class="col-lg-2 col-sm-2">
						<?php if (strcmp($halaman,"Nilai TO")== 0) {
							echo "<a class='btn active'href='nilaiTO'>Nilai TO</a>";
						} else {
							echo "<a class='btn' href='nilaiTO'>Nilai TO</a>";
						} ?>
					</div>
					<div class="col-lg-2 col-sm-2">
						<?php if (strcmp($halaman,"absensi")== 0) {
							echo "<a class='btn active'href='absensi'>Absensi</a>";
						} else {
							echo "<a class='btn'href='absensi'>Absensi</a>";
						} ?>
					</div>
					<div class="col-lg-2 col-sm-2">
						<?php if (strcmp($halaman,"pembayaran")== 0) {
							echo "<a class='btn active'href='pembayaran'>Pembayaran</a>";
						} else {
							echo "<a class='btn'href='pembayaran'>Pembayaran</a>";
						} ?>
					</div>
					<div class="col-lg-2 col-sm-2">
					</div>
					<a href="logout" class="btn pull-right btn-danger btn-primary btn-lg" id-"btn_logout" name="btn_logout" value="Logout">Logout</a>
				</div>

			</div>
		</div>
	</div>		
<hr/>
