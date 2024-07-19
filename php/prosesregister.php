<?php
session_start();
include "koneksidatabase.php";


$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$query = "INSERT INTO tb_user(nama, username, email, password) VALUES ('$nama', '$username', '$email', '$password')";
$eksekusi = mysqli_query($db, $query);

if ($query) {
    echo "<script> 
            alert('Data telah disimpan, silahkan login!');
            window.location='login.php';
          </script>";
} else {
    echo "<script> 
            alert('Data Gagal ditambahkan!');
            window.location='register.html';
          </script>";
}
?>
