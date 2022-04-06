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
<html lang="en">
<head>
    
	<?php include "header.php"; ?>
    <title>Welcome</title>
</head>
<body>
    <?php include "menu.php"; ?>
    <h1 class="my-5">Selamat Datang <b><?php echo htmlspecialchars($_SESSION["username"]); ?></h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Logout</a>
    </p>
</body>
</html>