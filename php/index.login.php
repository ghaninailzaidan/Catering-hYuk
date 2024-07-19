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
  <title>Home</title>
  <link rel="stylesheet" href="../bootstrap-5.0.0-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark main-color">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <a class="navbar-brand me-auto" href="#">CateringHyukk</a>
        <ul class="navbar-nav">
          <li class="nav-item me-5">
            <a class="nav-link active" aria-current="page" href="#"> <i class="bi bi-house"></i> Home</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link" href="hubungi.php">About Us</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link" href="lihatpemesan.php"><i class="bi bi-cart"></i> Pesanan saya</a>
          </li>
          <li class="nav-item me-5">
            <a href="#" class="nav-link active">Hi, <?php echo $username; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true"> <i class="bi bi-door-open"></i> logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--banner-->
  <div class="container-fluid banner d-flex align-items-center">
    <div class="container">
      <h1 class="text-light text-center display-5 mb-3">Selamat Datang Di Website Catering hYukk.. </h1>
      <h2 class="text-light text-center mb-3">lagi mau pesen catering apa ? </h2>
      
    </div>
  </div>

  <!--catalog cathring-->
  <div class="container-fluid py-5">
    <div class="container">
      <h2 class="text-center">Catalog Catering</h2>
      <div class="row mt-5 justify-content-center">
        <div class="col-sm-6 col-lg-3 hovered-card mb-3">
          <div class="card">
            <img src="../image/product/thumb/salad-on-a-plate.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">D'Yummy Catering</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, aspernatur.</p>
              <a href="D'yummy.php" class="btn btn-primary">lihat profil dan menu catering</a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-3 hovered-card mb-3">
          <div class="card">
            <img src="../image/product/thumb/chicken-dish.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Mitra Rasa Catering</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, aspernatur.</p>
              <a href="mitrarasa.php" class="btn btn-primary">lihat profil dan menu catering</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 hovered-card mb-3">
          <div class="card">
            <img src="../image/product/thumb/chilled-meat.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">viona Catering</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, aspernatur.</p>
              <a href="viona.php" class="btn btn-primary">lihat profil dan menu catering</a>
            </div>
          </div>
        </div>
        <div class="mt-5 d-flex justify-content-center">
          <a href="caricatering.php" class="btn btn-warning btn-lg text-light">lihat semua Catalog</a>
        </div>
      </div>
    </div>
  </div>

  <!--service-->
  <div class="container-fluid py-5 main-color">
    <div class="container">
      <h2 class="text-light text-center mb-5">Kami Melayani Dan Menyediakan</h2>
      <div class="row justify-content-center">
        <div class="col-sm-6 col-lg-3 hovered-card mb-3">
          <div class="d-flex justify-content-center">
            <div class="icon-service d-flex align-items-center justify-content-center">
              <i class="bi bi-cart display-6"></i>
            </div>
          </div>
          <div class="mt-3 text-white text-center">
            <h5>Pemesanan yang mudah</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam doloribus, illum fugiat dolorum ratione eum?</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 hovered-card mb-3">
          <div class="d-flex justify-content-center">
            <div class="icon-service d-flex align-items-center justify-content-center">
              <i class="bi bi-hand-thumbs-up-fill display-6"></i>
            </div>
          </div>
          <div class="mt-3 text-white text-center">
            <h5>Rasa dan kualitas yang enak</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam doloribus, illum fugiat dolorum ratione eum?</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 hovered-card mb-3">
          <div class="d-flex justify-content-center">
            <div class="icon-service d-flex align-items-center justify-content-center">
              <i class="bi bi-check-lg display-6"></i>
            </div>
          </div>
          <div class="mt-3 text-white text-center">
            <h5>Di buat ole para ahli</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam doloribus, illum fugiat dolorum ratione eum?</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <!--footer-->
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
      <h5 class="text-center mt-5">copyright | catering hYukk</h5>
    </div>
  </div>

  <script src="../bootstrap-5.0.0-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>