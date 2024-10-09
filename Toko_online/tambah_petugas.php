<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Petugas</title>
    <style>
    body {
        background-color: #f1f8e9;
        /* Hijau sangat lembut untuk latar belakang */
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
        /* Hijau utama */
        font-weight: bold;
        margin-bottom: 20px;
    }

    .form-control {
        border-radius: 10px;
        border: 1px solid #4caf50;
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

    .form-select {
        border-radius: 10px;
        border: 1px solid #4caf50;
    }

    label {
        margin-top: 10px;
        color: #2e7d32;
    }

    .form-container {
        padding: 20px;
        border-radius: 15px;
        background-color: #e8f5e9;
        /* Warna latar belakang form */
    }
    </style>
</head>

<body>
    <div class="container">
        <h3>Tambah Petugas</h3>
        <div class="form-container">
            <form action="proses_tambah_petugas.php" method="post">
                <label for="nama_petugas">Nama Petugas:</label>
                <input type="text" name="nama_petugas" value="" class="form-control" id="nama_petugas" required>

                <label for="username">Username:</label>
                <input type="text" name="username" value="" class="form-control" id="username" required>

                <label for="password">Password:</label>
                <input type="password" name="password" value="" class="form-control" id="password" required>

                <label for="level">Level:</label>
                <select name="level" class="form-select" id="level" required>
                    <option value="" disabled selected>Pilih Level</option>
                    <option value="CEO">CEO</option>
                    <option value="Manager">Manager</option>
                    <option value="Admin">Admin</option>
                    <option value="Karyawan">Karyawan</option>
                </select>

                <input type="submit" name="simpan" value="Tambah Petugas" class="btn btn-primary mt-4">
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>