<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Form Tambah Mahasiswa </title>
	<style type="text/css">
		li {
			list-style-type: none;
		}
	</style>
</head>
<body>
<h1> Tambah Data MAHASISWA </h1>
	<form method="post" action="action.php">
		<ul>
			<li>
				<label for="nama_mhs">Nama Mahasiswa :</label>
				<input type="text" name="nama_mhs" placeholder="Masukkan Nama Mahasiswa" >
			</li>
			<br>
			<li>
				<label for="id_prodi">ID Prodi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
				<input type="number" name="id_prodi" placeholder="Masukkan ID Prodi">
			</li>
			<br>
			<li>
				<label for="alamat_mhs">Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
				<input type="text" name="alamat_mhs" placeholder="Masukkan Alamat">
			</li>
			<br>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>
	</form>

</body>
</html>