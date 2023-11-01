<?php
// Config.php - Konfigurasi Database

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "pendaftaran_siswa";

// Membuat koneksi ke database
$db = mysqli_connect($server, $user, $password, $nama_database);

// Memeriksa koneksi berhasil atau tidak
if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>
