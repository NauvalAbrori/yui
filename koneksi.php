<?php
$host = "localhost";
$user = "root";
$pass = ""; // sesuaikan dengan password MySQL kamu
$db   = "kelurahan_jati";

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
