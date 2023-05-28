<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="img/logo.png"> <!--logo untuk di dalam judul halaman web atau biasa disebut favicon-->
	<title>Halaman Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css"> <!--untuk memanggil file css external, agar file ini bisa dimodifikasi di css itu-->
	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
	<section class="mt-4">
		<div class="container">
			<!-- ======= Header ======= -->
			<header id="header" class="fixed-top d-flex align-items-center">
				<div class="container d-flex align-items-center">

					<div class="logo me-auto">
						<h1><a href="index.php">ADA Shop</a></h1>
						<!-- Uncomment below if you prefer to use an image logo -->
						<!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
					</div>

					<nav id="navbar" class="navbar order-last order-lg-0">
						<ul>
							<li><a class="nav-link scrollto active" href="index.php">Beranda</a></li>
						</ul>
						<i class="bi bi-list mobile-nav-toggle"></i>
					</nav><!-- .navbar -->

					<div class="header-social-links d-flex align-items-center">
						<a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
						<a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
						<a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
						<a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
					</div>

				</div>
			</header><!-- End Header -->
			<!----------------------------------------------------- END HEADER ------------------------------------------------>

			<div class="content">
				<a href="data.php" class="btn-delete">Kembali</a>
				<hr>
				<br>
				<font style="font-size:18px;color:#666;">Silahkan isi data produk di bawah ini.</font>
				<form action="proses.php" method="POST" enctype="multipart/form-data">
					<table border="0" width="50%">
						<tr>
							<td width="29%" align="right" style="padding-right:1%;">Nama Produk</td>
							<td width="1%">:</td>
							<td width="70%"><input type="text" name="nama_pd" placeholder="Masukan nama produk"></td>
						</tr>

						<tr>
							<td width="29%" align="right" style="padding-right:1%;">Gambar Produk</td>
							<td width="1%">:</td>
							<td width="70%"><input type="file" name="file" placeholder="Masukan gambar"></td>
						</tr>

						<tr>
							<td width="29%" align="right" style="padding-right:1%;">Harga</td>
							<td width="1%">:</td>
							<td width="70%"><input type="text" name="hrg" placeholder="Masukan harga produk"></td>
						</tr>

						<tr>
							<td align="right" style="padding-right:1%;">Status</td>
							<td>:</td>
							<td>
								<select name="status">
									<option value="">-Pilih-</option>
									<option value="ada">ada</option>
									<option value="restock">restock</option>
									<option value="kosong">kosong</option>
								</select>
							</td>
						</tr>

						<tr>
							<td align="right" style="padding-right:1%;">kategori</td>
							<td>:</td>
							<td>
								<select name="kategori_id">
									<option value="">-Pilih-</option>
									<option value="1">kaos</option>
									<option value="2">kemeja</option>
									<option value="3">sepatu</option>
									<option value="4">tas</option>
								</select>
							</td>
						</tr>

						<tr>
							<td align="right" style="padding-right:1%;">Ukuran</td>
							<td>:</td>
							<td>
								<select name="size_id">
									<option value="">-Pilih-</option>
									<option value="1">s</option>
									<option value="2">m</option>
									<option value="3">l</option>
									<option value="4">xl</option>
								</select>
							</td>
						</tr>

						<tr>
							<td align="right" style="padding-right:1%;">gender</td>
							<td>:</td>
							<td>
								<select name="gender_id">
									<option value="">-Pilih-</option>
									<option value="1">men</option>
									<option value="2">woman</option>
								</select>
							</td>
						</tr>

						<tr>
							<td></td>
							<td></td>
							<td>
								<input type="submit" name="simpan" value="SIMPAN DATA">
							</td>
						</tr>
					</table>
				</form>
			</div>
			<!----------------------------------------------------- END CONTENT ------------------------------------------------>


			<!----------------------------------------------------- END FOOTER ------------------------------------------------>

		</div>
	</section>
	<div class="me-md-auto text-center">
		<div class="copyright">
			&copy; Copyright <strong><span>Lumia</span></strong>. All Rights Reserved
		</div>
	</div>
</body>

</html>