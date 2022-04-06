<!-- proses penyimpanan -->

<?php 
	include "connection.php";

	//jika tombol simpan diklik
	if(isset($_POST['btnSimpan']))
	{
		//baca isi inputan form
		$nokartu = $_POST['nokartu'];
		$nama    = $_POST['nama'];
		$NRP    = $_POST['NRP'];

		//simpan ke tabel karyawan
		$simpan = mysqli_query($conn, "insert into karyawan(uid, nama, NRP)values('$nokartu', '$nama', '$NRP')");

		//jika berhasil tersimpan, tampilkan pesan Tersimpan,
		//kembali ke data karyawan
		if($simpan)
		{
			echo "
				<script>
					alert('Tersimpan');
					location.replace('datakaryawan.php');
				</script>
			";
		}
		else
		{
			echo "
				<script>
					alert('Gagal Tersimpan');
					location.replace('datakaryawan.php');
				</script>
			";
		}

	}

	//kosongkan tabel tmprfid
	mysqli_query($conn, "delete from tmprfid");
?>

<!DOCTYPE html>
<html>
<head>
	<?php include "header.php"; ?>
	<title>Tambah Data Karyawan</title>

	<!-- pembacaan no kartu otomatis -->
	<script type="text/javascript">
		$(document).ready(function(){
			setInterval(function(){
				$("#norfid").load('nokartu.php')
			}, 1000);  //pembacaan file nokartu.php, tiap 1 detik = 1000
		});
	</script>

</head>
<body>


	<!-- isi -->
	<div class="container-fluid">
		<h3>Tambah Data Karyawan</h3>

		<!-- form input -->
		<form method="POST">
			<div id="norfid"></div>

			<div class="form-group">
				<label>Nama Karyawan</label>
				<input type="text" name="nama" id="nama" placeholder="nama karyawan" class="form-control" style="width: 400px">
			</div>
			<div class="form-group">
				<label>NRP</label>
				<input type="text" name="NRP" id="NRP" placeholder="NRP Karyawan" class="form-control" style="width: 200px">
			</div>

			<button class="btn btn-primary" name="btnSimpan" id="btnSimpan">Simpan</button>
		</form>
	</div>


</body>
</html>