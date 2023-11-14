<?php
include 'Connect.php';


// Jika tombol simpan diklik
if (isset($_POST['simpan'])) {

	// Input data 
	$simpan = mysqli_query($conn, "INSERT INTO siswa (nisn, email, nama, jurusan, jenis_kelamin, notelp)
									VALUES(  
									'$_POST[nisn]',
									'$_POST[email]',
									'$_POST[nama]',
									'$_POST[jurusan]',
									'$_POST[jenis_kelamin]',
									'$_POST[notelp]')
				
										 ");
	//jika simpan data sukses
	if ($simpan) {
		echo "<script>
						alert('Simpan data sukses!');
						document.location='Halaman.php';
				      </script>";
	} else {
		echo "<script>
						alert('Simpan data GAGAL!');
						document.location='Halaman.php';
				      </script>";
	}
}






?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Web LRCOM</title>
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Boxicons CSS -->
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
	<div class="sidebar">
		<div class="logo-details me-2">
			<i class='bx bxs-doughnut-chart'></i>
			<span class="logo_name me-2">SMKN 1 Depok</span>
		</div>
		<ul class="nav_links">
			<li>
				<a href="">
					<i class='bx bx-package'></i>
					<span class="link_name">DAFTAR</span>
				</a>
			</li>
			<li>
				<a href="Halaman.php">
					<i class='bx bx-list-ul'></i>
					<span class="link_name">DATA SISWA</span>
				</a>
			</li>
			<li>
				<a href="logout.php">
					<i class='bx bx-log-out'></i>
					<span class="link_name">Log Out</span>
				</a>
			</li>
		</ul>
	</div>
	<!-- Home-content -->
	<section class="home-section">
		<nav>
			<div class="sidebar-button">
				<i class='bx bx-menu sidebarBtn'></i>
				<span class="dasboard text-white">Pendataan Siswa Baru</span>
			</div>
		</nav>

		<!-- Form Input Data -->
		<div class="card-body">
			<form method="post" action="">
				<div class="form-group ms-4">
					<label>NISN</label>
					<input type="text" id="nisn" name="nisn" value="" class="form-control" placeholder="Masukan NIS " required>
				</div>
				<div class="form-group ms-4">
					<label>Email</label>
					<input type="text" id="email" name="email" value="" class="form-control" placeholder="Masukan Email " required>
				</div>
				<div class="form-group ms-4">
					<label>Nama</label>
					<input type="text" id="nama" name="nama" value="" class="form-control" placeholder="Masukan Nama " required>
				</div>
				<div class="form-group ms-4">
					<label>Jurusan</label>
					<select name="jurusan" id="jurusan" value="" class="form-select" required>
						<option>Pilih Jurusan</option>
						<option value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
						<option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
						<option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
						<option value="Akomodasi Perhotelan">Akomodasi Perhotelan</option>
						<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
						<option value="Multimedia">Multimedia</option>
					</select>
				</div>
				<div class="form-group ms-4">
					<label>Jenis Kelamin</label>
					<select name="jenis_kelamin" id="jenis_kelamin" value="" class="form-select" required>
						<option>Pilih </option>
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</div>
				<div class="form-group ms-4">
					<label>No. Telepon</label>
					<input type="text" id="notelp" name="notelp" value="" class="form-control" placeholder="Masukan No Telepon " required>
				</div>
				<button type="submit" class="btn btn-success my-3 ms-4" name="simpan">Simpan</button>
			</form>
		</div>




	</section>

	<!-- <script src="file.js"></script> -->
	<script src="js/bootstrap.min.js"></script>

</html>