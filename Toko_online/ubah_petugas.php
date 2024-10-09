<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
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
    $qry_get_petugas=mysqli_query($conn,"SELECT * FROM toko_petugas where 
    id_petugas = '".$_GET['id_petugas']."'");
    $dt_petugas=mysqli_fetch_array($qry_get_petugas);
    ?>
        <h3>Ubah Petugas</h3>
        <form action="proses_ubah_petugas.php" method="post">
            <input type="hidden" name="id_petugas" value="<?=$dt_petugas['id_petugas']?>">
            <!-- Nama Petugas : -->
            <div class="mb-3">
                <label for="nama_petugas" class="form-label">Nama Petugas</label>
                <input type="text" name="nama_petugas" value="<?=$dt_petugas['nama_petugas']?>" class="form-control">
                <!-- Username : -->
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" value="<?=$dt_petugas['username']?>" class="form-control">
                    <!-- Password : -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" value="" class="form-control">
                        <!-- Level : -->
                        <div class="mb-3">
                            <label for="level" class="form-label">Level</label>
                            <select name="level" value="<?=$dt_petugas['level']?>" class="form-select" id="level"
                                required>
                                <option value="" disabled selected>Pilih Level</option>
                                <option value="CEO">CEO</option>
                                <option value="Manager">Manager</option>
                                <option value="Admin">Admin</option>
                                <option value="Karyawan">Karyawan</option>

                            </select>
                            <div class="mb-3"></div>
                            <input type="submit" name="simpan" value="Ubah Petugas" class="btn btn-primary">
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>
</body>

</html>