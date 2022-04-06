<!DOCTYPE html>
<html>
<head>
  <title>foto</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .flex-container {
      display: flex;
      flex-wrap: wrap;
    }
    .flex-container > div {
      text-align: center;
      margin: 10px;
    }
  </style>
</head>
<body>
<h2>Result Foto Sarung Tangan Bekas</h2>
<a href="index.php"> <button class="btn btn-primary">Kembali</button>
<?php
  // Image extensions
  $image_extensions = array("png","jpg","jpeg","gif");

  // Check delete HTTP GET request - remove images
  if(isset($_GET["delete"])){
    $imageFileType = strtolower(pathinfo($_GET["delete"],PATHINFO_EXTENSION));
    if (file_exists($_GET["delete"]) && ($imageFileType == "jpg" ||  $imageFileType == "png" ||  $imageFileType == "jpeg") ) {
      echo "File found and deleted: " .  $_GET["delete"];
      unlink($_GET["delete"]);
    }
    else {
      echo 'File not found - <a href="Cek.php">refresh</a>';
    }
  }
  // Target directory
  $dir = 'uploads/';
  if (is_dir($dir)){
    echo '<div class="flex-container">';
    $count = 1;
    $files = scandir($dir);
    rsort($files);
    foreach ($files as $file) {
      if ($file != '.' && $file != '..') {?>
        <div>
          <p><a href="Cek.php?delete=<?php echo $dir . $file; ?>">Delete file</a> - <?php echo $file; ?></p>
          <a href="<?php echo $dir . $file; ?>">
            <img src="<?php echo $dir . $file; ?>" style="width: 500px;" alt="" title=""/>
          </a>
       </div>
<?php
       $count++;
      }
    }
  }
  if($count==1) { echo "<p>No images found</p>"; } 
?>
  </div>
</body>
</html>



<?php /*
$folder = "uploads";
$handle = opendir($folder);
echo '<table cellspacing="2" cellpadding="5">';
echo '<tr>';
$i = 1;
$fileGambar = array('png', 'jpg', 'jpeg', 'gif');
while(false !== ($file = readdir($handle))){
	$fileAndExt = explode('.', $file);
	if(in_array(end($fileAndExt), $fileGambar)){
		echo '<td style="border:1px solid #00000;" align="center">
			<img src="uploads/'.$file.'" width="full scren" /><br />
			'.$file.'
		</td>';
		if(($i % 1) == 0){
			echo '</tr><tr>';
		}
		$i++;
	}
}
echo '</tr>';
echo '</table>';*/
?>*/