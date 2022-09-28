<?php 
include "koneksi.php";

$id_prodi = $_POST['id_prodi'];
$nama = $_POST['nama_mhs'];
$alamat = $_POST['alamat_mhs'];

$sql = "INSERT INTO tbl_mhs(id_prodi, nama_mhs, alamat_mhs) VALUES('$id_prodi','$nama','$alamat')";
$hasil = mysqli_query($koneksi,$sql);
if (!$hasil) {
	echo "Penambahan data mahasiswa gagal";
} else {
	echo "Penambahan data mahasiswa berhasil <br>";
	echo "<a href ='data_mhs.php'>Show Data</a>";
}
?>