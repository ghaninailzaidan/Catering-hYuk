<?php
include "koneksidatabase.php";

$id = intval($_GET['id']);
$data = mysqli_query($db, "SELECT * FROM tb_catering WHERE id = '$id' ");

if (!$data) {
    die('Error saat menjalankan query: ' . mysqli_error($db));
}

if (mysqli_num_rows($data) == 0) {
    echo "Data tidak ditemukan";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan berhasil di pesan</title>
    <link rel="stylesheet" href="bootstrap-5.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: ;
            padding: 20px;
        }

        .ticket {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        .success-message {
            color: #28a745;
            font-size: 33px;
            font-weight: bold;
        }

        .ticket-details {
            margin-top: 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="ticket">
    <form action="lihatpemesan.php">
        <div class="ticket-details text-center">
            <div class="success-message">Transaksi Berhasil!</div><br>
            <h6>Terima kasih atas pembayaran Anda. Berikut adalah detail Transaksi anda.</h6>
        </div>

        <?php while ($row = mysqli_fetch_array($data)) { ?>

            <div class="ticket-details text-justify">
                <p><b>Nama Pemesan Catering: <?php echo $row['nama']; ?></b></p>
                <p><b>Email Pemesan: <?php echo $row['email']; ?></b></p>
                <p><b>Tanggal pemesanan: <?php echo $row['tgl_pembelian']; ?></b></p>
                <p><b>Jumlah pemesanan: <?php echo $row['jumlah_pemesanan']; ?></b></p>
                <p><b>Jumlah Rp: <?php echo $row['jumlah_rp']; ?></b></p>
                <p><b>Nama bank: <?php echo $row['nama_bank']; ?></b></p>
                <p><b>Id Pemesan: <?php echo $row['id']; ?></b></p>
                <h6><b>Terima Kasih Sudah Memesan di Catering hYukk!!</h6>
            </div>

        <?php } ?>

        <div>
            <button type="submit" class="btn btn-info">Lihat data pesanan saya</button>
        </div>

    </form>
</div>

</body>
</html>
