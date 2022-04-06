<!DOCTYPE html>
<html>
<head>
	<?php include "header.php"; ?>
	<title>Rekapitulasi Pengambilan</title>
</head>
<body>

	<?php include "menu.php"; ?>

	<!-- isi -->
	<div class="container-fluid">
		<h3>Rekapitulasi Pengambilan</h3>
		<a href="#"> <button class="btn btn-primary">Export</button> </a>
		<table class="table table-bordered">
			<thead>
				<tr style="background-color: grey; color:white">
					<th style="width: 10px; text-align: center">No.</th>
					<th style="width: 200px; text-align: center">No. ID Card</th>
					<th style="width: 200px; text-align: center">Nama Karyawan</th>
					<th style="width: 50; text-align: center">NRP</th>
					<th style="width: 100; text-align: center">Pengambilan<br> Sarung Tangan</th>
					<th style="width: 200; text-align: center">Waktu<br> Pengambilan</th>
				</tr>
			</thead>
			<tbody>
				<?php
    include 'connection.php'; 
			
    $sql = mysqli_query($conn, "select b.nama, b.NRP, a.kananKiri, a.id, a.uid, a.waktu from log a, karyawan b where a.uid=b.uid ORDER BY `id` DESC");
    /*SELECT * from log ORDER BY `id` DESC");*/
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
					<td> <?php echo $data['kananKiri']; ?> </td>
					<td> <?php echo $data['waktu']; ?> </td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	<?php include "footer.php"; ?>

</body>
</html>


