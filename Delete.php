<?php
include 'Connect.php';

if ($_GET['hal'] == "hapus") {
	// Persiapan hapus data
	$hapus = mysqli_query($conn, "DELETE FROM siswa WHERE id = '$_GET[id]'");
	if ($hapus) {
		echo "<script>
						alert('Hapus data Suksess!!');
						document.location='Halaman.php';
				      </script>";
	}
}
