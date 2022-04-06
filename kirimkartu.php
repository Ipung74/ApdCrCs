<?php
	include "connection.php";

	//baca nomor kartu dari NodeMCU
	$nokartu = $_GET['nokartu'];
	//kosongkan tabel tmprfid
	mysqli_query($conn, "delete from tmprfid");

	//simpan nomor kartu yang baru ke tabel tmprfid
	$simpan = mysqli_query($conn, "insert into tmprfid(nokartu)values('$nokartu')");
	if($simpan)
		echo "Berhasil";
	else
		echo "Gagal";
?>