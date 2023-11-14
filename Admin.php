<?php
session_start();

if (empty($_SESSION['username']) or empty($_SESSION['pilih'])) {
	echo "<script>alert('Maaf, untuk mengakses anda harus login terlebih dahulu');
        document.location='login.php'</script>";
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
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<!-- Boxicons CSS -->
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

	<div class="sidebar" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-offset="0" data-aos-duration="1000">
		<div class="logo-details me-2">
			<i class='bx bxs-doughnut-chart'></i>
			<span class="logo_name me-2" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0" data-aos-duration="800">Smkn 1 Depok</span>
		</div>
		<ul class="nav_links">
			<li>
				<a href="Daftar.php">
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
	<section class="home-section" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-offset="0" data-aos-duration="1000">
		<nav>
			<div class="sidebar-button" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0" data-aos-duration="1500">
				<i class='bx bx-menu sidebarBtn' data-aos="fade-left" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0" data-aos-duration="400"></i>
				<span class="dasboard text-white" data-aos="fade-left" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0" data-aos-duration="800">Pendataan Siswa Baru</span>
			</div>
		</nav>
		<h2 class="ms-3 my- bg-light" data-aos="fade-left" data-aos-easing="ease-in-back" data-aos-offset="0" data-aos-duration="1500">Selamat Datang Admin, <b><?= $_SESSION['nama_lengkap'] ?></b></h2>
	</section>

</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
	AOS.init();
</script>


</html>