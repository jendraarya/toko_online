<?php 
    include "header_petugas.php";
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Petugas</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
    .container {
        margin-top: 50px;
        max-width: 1000px;
        background-color: #ffffff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        /* Bayangan elegan */
    }

    h3 {
        text-align: center;
        margin-bottom: 40px;
        color: #2e7d32;
        font-weight: bold;
        letter-spacing: 1px;
    }

    table {
        background-color: #ffffff;
        border-radius: 12px;
        overflow: hidden;
    }

    th {
        background-color: #4caf50;
        /* Warna hijau tetap */
        color: white;
        text-align: center;
        padding: 15px;
        border-bottom: 3px solid #388e3c;
        /* Hijau lebih gelap untuk border */
    }

    td {
        padding: 15px;
        text-align: center;
        border-bottom: 1px solid #dddddd;
        color: #555555;
    }

    tr:nth-child(even) {
        background-color: #e8f5e9;
        /* Hijau sangat lembut */
    }

    tr:nth-child(odd) {
        background-color: #c8e6c9;
        /* Hijau lebih terang */
    }

    tr:hover {
        background-color: #4caf50;
        /* Hijau cerah saat hover */
        color: white;
        transition: background-color 0.3s ease;
    }

    .btn-success {
        background-color: #2e7d32;
        border: none;
        transition: 0.3s ease;
    }

    .btn-success:hover {
        background-color: #4caf50;
    }

    .btn-danger {
        background-color: #d32f2f;
        border: none;
        transition: 0.3s ease;
    }

    .btn-danger:hover {
        background-color: #e57373;
    }

    .btn-primary {
        background-color: #2e7d32;
        border: none;
        transition: 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #66bb6a;
    }

    .table th,
    .table td {
        vertical-align: middle;
    }
    </style>

</head>

<body>
    <div class="container">
        <h3>Daftar Petugas</h3>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA PETUGAS</th>
                    <th>USERNAME</th>
                    <th>LEVEL</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody><?php include "koneksi.php";
    $qry_petugas=mysqli_query($conn, "SELECT * FROM toko_petugas");
    $no=0;

    while($data_petugas=mysqli_fetch_array($qry_petugas)) {
        $no++;
        ?><tr>
                    <td><?=$no?></td>
                    <td><?=$data_petugas['nama_petugas']?></td>
                    <td><?=$data_petugas['username']?></td>
                    <td><?=$data_petugas['level']?></td>
                    <td>
                        <a href="ubah_petugas.php?id_petugas=<?=$data_petugas['id_petugas']?>"
                            class="btn btn-success btn-sm">Ubah</a>
                        <a href="hapus_petugas.php?id_petugas=<?=$data_petugas['id_petugas']?>"
                            onclick="return confirm('Apakah anda yakin menghapus data ini?')"
                            class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr><?php
    }

    ?>
            </tbody>
        </table><a href="tambah_petugas.php" class="btn btn-primary">Tambah Petugas</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>

<?php
    include "footer.php";
?>