<?php
$conn = mysqli_connect("localhost","root","","toko_online");
if ($conn) {
    echo" ";
} else {
    echo "Database Tidak Terhubung";
}
?>