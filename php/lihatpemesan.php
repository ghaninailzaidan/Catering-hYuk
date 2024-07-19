<?php 
session_start();
include "koneksidatabase.php";

if (!isset($_SESSION['username'])) {
    echo "<script> 
    alert('Anda harus login terlebih dahulu!');
    window.location='login.php'; 
      </script>";
    exit();
} else {
    $username = mysqli_real_escape_string($db, $_SESSION['username']);
    $data = mysqli_query($db, "SELECT * FROM tb_user WHERE username = '$username'");
    if ($data && mysqli_num_rows($data) > 0) {
        $row = mysqli_fetch_array($data);
        $nama = $row['nama'];
    } else {
        echo "<script> 
        alert('Pengguna tidak ditemukan!');
        window.location='login.php'; 
          </script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Saya</title>
  <link rel="stylesheet" href="../bootstrap-5.0.0-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../css/style.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

 <!--nabar-->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark main-color">
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <a class="navbar-brand me-auto" href="#">CateringHyukk</a>
        <ul class="navbar-nav">
          <li class="nav-item me-5">
            <a class="nav-link" aria-current="page" href="index.login.php"> <i class="bi bi-house"></i>Home</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link" href="hubungi.php">About Us</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link  active" href="lihatpemesan.php"><i class="bi bi-cart"></i>Pesanan saya</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true"> <i class="bi bi-door-open"></i>logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <div class="p-3">
        <h2>Riwayat Transaksi pesanan saya </h2>
    </div>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
  
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">   
                <table id="example1" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pemesan</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Jumlah pemesan</th>
                            <th>Jumlah bayar</th>
                            <th>Nama bank</th>
                            <th>No Rekening</th>
                            <th>Lihat & Hapus Riwayat Pemesanan</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    require "koneksidatabase.php";

                    $no= 0;
                    // Query hanya untuk data pengguna yang sedang login
                    $data = mysqli_query($db, "SELECT * FROM tb_catering WHERE username = '$username' ORDER BY id DESC");

                    if ($data && mysqli_num_rows($data) > 0) {
                        while ($row = mysqli_fetch_array($data)) {
                            $no++;
                            $id = $row[0];
                            $nama = $row[1];
                            $username = $row[2];
                            $email = $row[3];
                            $tanggal = $row[4];
                            $jumlah_pemesanan = $row[5];
                            $jumlah_rp = $row[6];
                            $nama_bank = $row[7];
                            $no_rekening = $row[8];
                    ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $nama; ?></td>
                            <td><?php echo $username; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $tanggal; ?></td>
                            <td><?php echo $jumlah_pemesanan; ?></td>
                            <td><?php echo $jumlah_rp; ?></td>
                            <td><?php echo $nama_bank; ?></td>
                            <td><?php echo $no_rekening; ?></td>
                            <td>
                              <a href="detail.php?id=<?php echo $row['id']; ?>"><button class="btn btn-success">Lihat</button></a>
                              <a href="hapusdetail.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin akan menghapus data ini?')"><button class="btn btn-danger">Hapus</button></a>
                            </td>
                        </tr>
                    <?php 
                        }
                    } else {
                        echo "<tr><td colspan='10'>Tidak ada data pesanan.</td></tr>";
                    }
                    ?>
                    </div>
                        <!-- Tambahkan baris sesuai dengan data pemesan tiket -->
                    </tbody>

                </table><br>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

    <div class="p-3">
        <a href="index.login.php"><button type="submit" class="btn btn-info">Kembali Ke Halaman Utama</button></a>
    </div>


<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->

<!-- AdminLTE for demo purposes -->

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
