<?php
session_start();
include "koneksidatabase.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM tb_user where username='$username' AND password='$password' LIMIT 1";

$eksekusi = mysqli_query($db, $query);//untuk menjalankan perintah atau instruksi query ke database MySQL 

$ada = mysqli_fetch_array($eksekusi);//variable ada mengeksekusi
if ($ada > 0){
 
    $_SESSION['username']=$ada['username'];
    echo "<script> 
            alert('Anda akan diarahkan ke halaman utama!');
            window.location='index.login.php';
    
    </script>";
}
else{
    echo "<script> 
    alert('Username dan Password tidak ditemukan!');
    window.location='login.php';

</script>";
}
?>
