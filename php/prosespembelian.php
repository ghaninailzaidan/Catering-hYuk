<?php
session_start();
include "koneksidatabase.php";

// Pastikan form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nama = mysqli_real_escape_string($db, $_POST['nama']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $tgl_pembelian = mysqli_real_escape_string($db, $_POST['tgl_pembelian']);
    $jumlah_pemesanan = mysqli_real_escape_string($db, $_POST['jumlah_pemesanan']);
    $jumlah_rp = mysqli_real_escape_string($db, $_POST['jumlah_rp']);
    $nama_bank = mysqli_real_escape_string($db, $_POST['nama_bank']);
    $no_rekening = mysqli_real_escape_string($db, $_POST['no_rekening']);
    $status = mysqli_real_escape_string($db, $_POST['status']);

    // Proses file upload
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $file_temp = $_FILES['foto']['tmp_name'];
        $file_name = $_FILES['foto']['name'];
        $file_path = 'file/' . basename($file_name);

        if (move_uploaded_file($file_temp, $file_path)) {
            $foto = $file_name;
        } else {
            $foto = null;
            echo "<script>alert('Gagal mengunggah file.');</script>";
        }
    } else {
        $foto = null;
    }

    // Simpan data ke database
    $query = "INSERT INTO tb_catering (nama, username, email, tgl_pembelian, jumlah_pemesanan, jumlah_rp, nama_bank, no_rekening, status, foto) 
              VALUES ('$nama', '$username', '$email', '$tgl_pembelian', '$jumlah_pemesanan', '$jumlah_rp', '$nama_bank', '$no_rekening', '$status', '$foto')";

    $eksekusi = mysqli_query($db, $query);

    if ($eksekusi) {
        $id = mysqli_insert_id($db);
        echo "<script> 
                alert('Pemesanan berhasil dipesan!');
                window.location='detail.php?id=".$id."';
              </script>";
    } else {
        echo "<script> 
                alert('Pemesanan gagal dipesan: " . mysqli_error($db) . "');
                window.location='index.login.php';
              </script>";
    }
}
?>
