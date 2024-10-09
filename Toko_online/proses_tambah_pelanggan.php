<?php
if($_POST){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO toko_pelanggan (nama, alamat, telp, username, password)  VALUES ('".$nama."', '".$alamat."','".$telp."', '".$username."', '".md5($password)."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sign In Sukses');location.href='tambah_pelanggan.php';</script>";
        } else {
            echo "<script>alert('Sign In Error');location.href='tambah_pelanggan.php';</script>";
        }
    }
}
?>