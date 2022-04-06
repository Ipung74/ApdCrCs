<!DOCTYPE html>
<html>
<head>
	<?php include "header.php"; ?>
	<title>Data Karyawan</title>
</head>
<body>

	<?php include "menu.php"; ?>

	<!--isi -->
	<div class="container-fluid">
		<h3>Data Karyawan</h3>
		
		<a href="tambah.php"> <button class="btn btn-primary">Tambah Data Karyawan</button> </a>
		
		<table class="table table-bordered">
			<thead>
				<tr style="background-color: grey; color: white;">
					<th style="width: 10px; text-align: center">No.</th>
					<th style="width: 100px; text-align: center">No.Kartu</th>
					<th style="width: 250px; text-align: center">Nama</th>
					<th style="width: 100px; text-align: center">NRP</th>
					<th style="width: 100px; text-align: center">Aksi</th>
				</tr>
			</thead>
			<tbody>

				<?php
					//koneksi ke database
					include "connection.php";

					//baca data karyawan
					$sql = mysqli_query($conn, "select * from karyawan");
					$no = 0;
					while($data = mysqli_fetch_array($sql))
					{
						$no++;
				?>

				<tr>
					<td> <?php echo $no; ?> </td>
					<td> <?php echo $data['uid']; ?> </td>
					<td> <?php echo $data['nama']; ?> </td>
					<td> <?php echo $data['NRP']; ?> </td>
					<td>
						<a href="edit.php?id=<?php echo $data['id']; ?>"> Edit</a> | <a href="hapus.php?id=<?php echo $data['id']; ?>"> Hapus</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	<?php include "footer.php"; ?>

</body>
</html>
