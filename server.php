<?php
  include("connection.php");

  if(!empty($_POST)){
    $id = $_POST["id"];
    $kananKiri = $_POST["kananKiri"];
    $waktu = $_POST["waktu"];
    
    $query = "INSERT INTO log (uid, kananKiri, waktu)
            VALUES ('".$id."', '".$kananKiri."', '".$waktu."')";
    if ($conn->query($query) === TRUE) {
      echo "Berhasil menyimpan data ke table log";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

?>
