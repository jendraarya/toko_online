<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Register</title>
    <style>
    body {
        background-color: #f1f8e9;
        /* Latar belakang hijau lembut */
    }

    .container {
        margin-top: 50px;
        max-width: 600px;
        background-color: #ffffff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
    }

    h3 {
        text-align: center;
        color: #2e7d32;
        /* Warna hijau tua */
        font-weight: bold;
        margin-bottom: 20px;
    }

    .form-control {
        border-radius: 10px;
        border: 1px solid #4caf50;
        /* Hijau lembut untuk border */
    }

    .btn-primary {
        background-color: #388e3c;
        border: none;
        width: 100%;
        border-radius: 10px;
        transition: 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #66bb6a;
    }

    label {
        margin-top: 10px;
        color: #2e7d32;
        /* Hijau tua untuk label */
    }

    .form-container {
        padding: 20px;
        border-radius: 15px;
        background-color: #e8f5e9;
        /* Latar belakang form hijau lembut */
    }
    </style>
</head>

<body>
    <div class="container">
        <?php 
    include "koneksi.php";
    $qry_get_pelanggan=mysqli_query($conn,"select * from toko_pelanggan where 
id_pelanggan = '".$_GET['id_pelanggan']."'");
    $dt_pelanggan=mysqli_fetch_array($qry_get_pelanggan);
    ?> <h3>Ubah Pelanggan</h3>
        <form action="proses_ubah_pelanggan.php" method="post">
            <input type="hidden" name="id_pelanggan" value="<?=$dt_pelanggan['id_pelanggan']?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" value="<?=$dt_pelanggan['nama']?>" class="form-control">
                <div class="mb-3">
                    <label for="Alamat" class="form-label">Alamat</label>
                    <textarea name="Alamat" class="form-control" rows="4"><?=$dt_pelanggan['alamat']?></textarea>
                    <div class="mb-3">
                        <label for="telp" class="form-label">No Telepon</label>
                        <input type="text" name="telp" value="<?=$dt_pelanggan['telp']?>" class="form-control">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" value="<?=$dt_pelanggan['username']?>"
                                class="form-control">
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" value="" class="form-control">
                                <div class="mb-3"></div>
                                <input type="submit" name="simpan" value="Ubah Pelanggan" class="btn btn-primary">
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>
</body>

</html>