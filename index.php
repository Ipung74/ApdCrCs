<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include "header.php"; ?>
	<title>Menu Utama</title>
</head>
<body>
	<?php include "menu.php"; ?>

	<!-- isi -->
	<div class="container-fluid" style="padding-top: 10%; text-align: center">
		<h1>
			Selamat Datang <br>
			<a class="my-5"><?php echo htmlspecialchars($_SESSION["username"]); ?></a><br>
			Sistem Penukaran Sarung Tangan<br>
			Berbasis Scan ID Card
		</h1>
	</div>

	<?php include "footer.php"; ?>
</body>
</html>

