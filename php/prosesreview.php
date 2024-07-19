<?php
session_start();
include "koneksidatabase.php";

$nama = $_POST['nama'];
$pendapat = $_POST['pendapat'];
 
$query = "INSERT INTO tb_review(nama, pendapat) 
VALUES ('$nama','$pendapat')";

$eksekusi = mysqli_query($db, $query);

if ($eksekusi) {
  $id = mysqli_insert_id($db);
  echo "<script> 
          alert('Review Berhasil Di Kirim!');
          window.location='index.login.php?id=".$id."';
        </script>";
} else {
  echo "<script> 
          alert('Review Gagal di Kirim!');
          window.location='index.login.php';
        </script>";
}
?>
