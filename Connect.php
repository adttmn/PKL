<?php
// Koneksi Database
$conn = mysqli_connect("localhost", "root", "", "data_siswa");

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($data = mysqli_fetch_assoc($result)) {
		$rows[] = $data;
	}
	return $rows;
}

function edit($data)
{
	global $conn;


	$id = $data["id"];
	$nisn = htmlspecialchars($data['nisn']);
	$email = htmlspecialchars($data['email']);
	$nama = htmlspecialchars($data['nama']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
	$notelp = htmlspecialchars($data['notelp']);

	$query = "UPDATE siswa set
				insn ='$nisn',
				email ='$email',
				nama ='$nama',
				jurusan ='$jurusan',
				jenis_kelamin ='$jenis_kelamin',
				notelp ='$notelp'
				WHERE id = $id
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
