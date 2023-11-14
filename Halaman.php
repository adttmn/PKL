<?php
include 'Connect.php';



?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Project Laporan</title>
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
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
			<!-- <li>
							<a href="">
								<i class='bx bx-bar-chart'></i>
								<span class="link_name">Data</span>
							</a>
						</li> -->
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
				<span class="dasboard text-white ">DATA SISWA</span>
			</div>
		</nav>

		<!-- Form Halaman Data -->
		<div class="card-body">
			<a href="Daftar.php" class="btn btn-primary my-3">Tambah Data</a>

			<tr>

				<table id="example" class="table table-bordered table-striped">
					<br>
					<thead>

						<tr class="text-center">
							<th>No</th>
							<th>NISN</th>
							<th>Email</th>
							<th>Nama</th>
							<th>Jurusan</th>
							<th>Jenis Kelamin</th>
							<th>No.Telepon</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						$tampil = mysqli_query($conn, "SELECT * from siswa order by id desc");
						while ($data = mysqli_fetch_array($tampil)) :
						?>
							<tr class="text-center">
								<td><?= $no++ ?></td>
								<td><?= $data['nisn'] ?></td>
								<td><?= $data['email'] ?></td>
								<td><?= $data['nama'] ?></td>
								<td><?= $data['jurusan'] ?></td>
								<td><?= $data['jenis_kelamin'] ?></td>
								<td><?= $data['notelp'] ?></td>
								<td>
									<a href="Update.php?hal=edit&id=<?= $data["id"] ?>" class="btn btn-success"> Edit </a>
									<a href="Delete.php?hal=hapus&id=<?= $data['id'] ?>" onclick="return confirm('Hapus data??')" class="btn btn-danger"> Hapus </a>
								</td>
							</tr>
						<?php endwhile; ?>

					</tbody>
				</table>
		</div>
		</div>
		<script>
			$(document).ready(function() {
				$('#example').DataTable();
			});
		</script>

</body>

</html>