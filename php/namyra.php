<?php 
session_start();
include "koneksidatabase.php";

if (!$_SESSION){
    echo "<script> 
    alert('Anda harus login terlebih dahulu!');
    window.location='login.php'; 
      </script>";
} else {
    $username = mysqli_escape_string($db, $_SESSION['username']);
    $data = mysqli_query($db, "SELECT * FROM tb_user WHERE username = '$username' ");
    $row = mysqli_fetch_array($data);
    $nama = $row['nama'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catering hYukk</title>
    <link rel="stylesheet" href="../bootstrap-5.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark main-color">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <a class="navbar-brand me-auto" href="#">CateringHyukk</a>
                <ul class="navbar-nav">
                    <li class="nav-item me-5">
                        <a class="nav-link " aria-current="page" href="index.login.php"> <i class="bi bi-house"></i>Home</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="hubungi.php">About Us</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="lihatpemesan.php"><i class="bi bi-cart"></i>Pesanan saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true"> <i class="bi bi-door-open"></i>logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main -->
    <div class="containerfluid py-5">
        <div class="container">
            <div class="row">
                <!-- Produk img -->
                <div class="col-md-5 col-lg-4">
                    <img src="../image/product/fried-rice.jpg" class="img-fluid" alt="">
                </div>
                <!-- Produk detail -->
                <div class="col-md-6 offset-md-1 col-lg-7 offset-lg-1">
                    <h1>Namyra Catering</h1>
                    <p>Namyra Catering adalah catering yang Menyediakan menu-menu yang beragam mulai dari menu untuk acara kumpul dengan saudara, arisan maupun acara kantor</p>
                    <h2>Menu</h2>
                    <p><b>Paket 1: </b>Standar 50.000/porsi nasi putih, ayam panggang, sapi lada hitam, tumis kangkung, es teh manis</p>
                    <p><b>Paket 2: </b>Premium 70.000/porsi nasi kuning, ayam goreng, ikan bakar, sate ayam, es buah segar</p>
                    <p><b>Paket 3: </b>Eklusif 90.000/porsi nasi tumpeng kumplit, sate sapi madura, sop sapi, tumis jamur, es kelapa muda</p>
                    <p><b>Peket 4: </b> Maksimal order 200 porsi 
                    </p>
                    <p>Untuk pemesanan catering, silakan membayar melalui transfer bank di bawah:</p>
                    <p>No rek: 0928897383 atas nama Namyra Catering<br>
                       info selanjutnya hub: 0838768987
                    </p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pesan">
                            Pesan Sekarang
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Lokasi Maps -->
    <div class="container py-5">
        <h2 class="text-center">Lokasi Kami</h2>
        <div class="map-container">
            <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.7815328360055!2d107.5833034!3d-6.916875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e713bff28667%3A0x97237c0578ff3870!2sNamyra%20Catering!5e0!3m2!1sen!2sid!4v1623862365821!5m2!1sen!2sid"
                frameborder="0"
                allowfullscreen="" 
                aria-hidden="false" 
                tabindex="0">
            </iframe>
        </div>
    </div>
    <!-- Footer -->
    <div class="container-fluid py-5 content-footer text-light">
        <div class="container">
            <h5 class="text-center md-4">Kunjungi Kami</h5>
            <div class="row justify-content-center">
                <div class="col-lg-1 d-flex justify-content-center hovered-card">
                    <i class="bi bi-facebook fs-4"></i>
                </div>
                <div class="col-lg-1 d-flex justify-content-center hovered-card">
                    <i class="bi bi-instagram fs-4"></i>
                </div>
                <div class="col-lg-1 d-flex justify-content-center hovered-card">
                    <i class="bi bi-twitter fs-4"></i>
                </div>
            </div>
            <h5 class="text-center mt-5">copyright|catering hYukk</h5>
        </div>
    </div>

   <!-- The Modal -->
  <div class="modal" id="pesan">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Formulir Pembelian Catering</h4>
        </div>
        
        <!-- Modal body -->
		<form action="prosespembelian.php" method="POST">
        <div class="modal-body">
          <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control"><br>
          <input type="text" name="username" placeholder="Username" class="form-control"><br>
          <input type="text" name="email" placeholder="Email" class="form-control"><br>
          <input type="date" name="tgl_pembelian" placeholder="Tanggal Pembelian" class="form-control"><br>
          <input type="number" name="jumlah_pemesanan" placeholder="Paket Berapa" class="form-control"><br>
          <div class="input-group">
        	<div class="input-group-prepend">
            <span class="input-group-text">Rp</span>
          	</div>
        	<input type="text" name="jumlah_rp" placeholder="Jumlah Bayar" class="form-control">
            </div><br>
          <select name="nama_bank" class="form-control">
            <option value="" disabled selected>Pilih Bank</option>
            <option value="Mandiri">Mandiri</option>
            <option value="BNI">BNI</option>
            <option value="BCA">BCA</option>
            <option value="Seabank">Seabank</option>
    	</select><br>
        <Label>Bukti Transfer</Label>
        <input type="file" name="foto" placeholder="Foto" class="form-control"><br>
		<label for="status">
        	<input type="checkbox" id="konfirmasi_pembayaran" name="status" value="Lunas">
                Saya sudah melakukan pembayaran
        </label>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
      </div>
    </div>
  </div>

    <script src="../bootstrap-5.0.0-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
