<?php
$conn = new mysqli("localhost","rdpy8574_testes","Rfidesp12!","rdpy8574_tes");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}

?>