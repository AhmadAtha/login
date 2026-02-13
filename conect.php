<?php
$servername = "localhost";
$username = "root"; // Default username XAMPP
$password = "";     // Default password XAMPP kosong
$dbname = "kelasdkv";

// 1. Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// 2. Mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// Koneksi berhasil. Variabel $conn siap digunakan oleh file yang meng-include file ini.
?>