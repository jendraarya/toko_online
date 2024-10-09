<?php
// Cek apakah sesi sudah dimulai
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Memulai sesi jika belum dimulai
}

// Cek status login
if ($_SESSION['status_login'] != true) {
    header('location: login_petugas.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Header</title>
    <style>
    body {
        font-family: 'Poppins', sans-serif;
    }


    /* Navbar */
    .navbar {
        background-color: #a7c957;
        /* Hijau Muda */
        padding: 15px;
    }

    .navbar .navbar-brand {
        color: #ff6f61;
        /* Oranye */
        font-weight: 600;
    }

    .navbar .nav-link {
        color: #fff;
    }

    .navbar .nav-link:hover {
        color: #ff6f61;
        /* Oranye */
    }

    /* Hero Section */
    .hero-section {
        background-image: url('https://source.unsplash.com/1600x600/?shopping,store');
        background-size: cover;
        background-position: center;
        height: 500px;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin-bottom: 40px;
        position: relative;
    }

    .hero-section:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(167, 201, 87, 0.7);
        /* Hijau Muda Transparan */
        z-index: 1;
    }

    .hero-section div {
        z-index: 2;
    }

    .hero-section h1 {
        font-size: 56px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #ff6f61;
        /* Oranye */
    }

    .hero-section p {
        font-size: 28px;
        margin-bottom: 30px;
        color: #f1f1f1;
    }

    .btn-light {
        background-color: #ff6f61;
        /* Oranye */
        border: none;
        color: #fff;
        padding: 12px 25px;
        font-size: 20px;
        font-weight: 600;
    }

    .btn-light:hover {
        background-color: #e65b55;
        color: #fff;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23ff6f61' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%28255,255,255, 0.5%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    .container.bg-light {
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        margin-top: 10px;
    }

    .dropdown-menu {
        background-color: rgba(33, 147, 176, 0.9);
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #6dd5ed;
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Keshipedia Worker</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home_petugas.php">Home</a>
                    </li>

                    <!-- Daftar Petugas: Hanya untuk CEO -->
                    <?php if ($_SESSION['level'] == 'CEO'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="tampil_petugas.php">Daftar Petugas</a>
                    </li>
                    <?php endif; ?>

                    <!-- Daftar Pelanggan: Hanya untuk CEO dan Manager -->
                    <?php if ($_SESSION['level'] == 'CEO' || $_SESSION['level'] == 'Manager'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="tampil_pelanggan.php">Daftar Pelanggan</a>
                    </li>
                    <?php endif; ?>

                    <!-- Riwayat Transaksi: Hanya untuk CEO, Manager dan Admin -->
                    <?php if ($_SESSION['level'] == 'CEO' || $_SESSION['level'] == 'Manager' || $_SESSION['level'] == 'Admin'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="riwayat_transaksi_petugas.php">Riwayat Transaksi</a>
                    </li>
                    <?php endif; ?>

                    <li class="nav-item">
                        <a class="nav-link" href="daftar_produk.php">Daftar Produk</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="tambah_produk.php">Tambah Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout_petugas.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.nbodypm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>