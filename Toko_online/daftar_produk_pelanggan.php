<?php 
session_start();
if ($_SESSION['status_login'] != true) {
    header('location: login.php');
    exit();
}

// Koneksi ke database
include "koneksi.php";

// Ambil data produk dari database
$query = "SELECT * FROM toko_produk";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f8f9fa;
    }

    .navbar {
        background-color: #1e88e5;
        color: white;
    }

    .navbar-brand {
        font-weight: bold;
        color: white;
    }

    .container {
        margin-top: 20px;
    }

    .card {
        transition: transform 0.2s;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .footer {
        background-color: #1e88e5;
        color: white;
        padding: 20px 0;
        text-align: center;
        position: relative;
        bottom: 0;
        width: 100%;
    }
    </style>
</head>

<body>
    <?php include "header.php"; ?>

    <!-- Daftar Produk -->
    <div class="container">
        <h3 class="mt-4 text-center">Daftar Produk</h3>
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="foto_produk/<?= $row['foto_produk'] ?>" class="card-img-top"
                        alt="<?= $row['nama_produk'] ?>" style="height: 100%; width: 100%; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['nama_produk'] ?></h5>
                        <p class="card-text"><?= substr($row['deskripsi'], 0, 80) . '...' ?></p>
                        <p class="card-text"><strong>Rp <?= number_format($row['harga'], 0, ',', '.') ?></strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="beli_produk.php?id_produk=<?= $row['id_produk'] ?>"
                                    class="btn btn-sm btn-outline-success">Beli</a>
                                <a href="tambah_keranjang.php?id=<?= $row['id_produk'] ?>"
                                    class="btn btn-sm btn-outline-primary">Tambah ke Keranjang</a>
                            </div>
                            <small class="text-muted">Tersedia</small>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php 
    include "footer.php";
?>