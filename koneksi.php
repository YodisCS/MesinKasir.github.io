<?php
// Mengaktifkan laporan error
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Informasi koneksi ke database
$servername = "localhost";
$username = "root";  // Username MySQL default
$password = "";      // Password MySQL default (biasanya kosong)
$dbname = "kasir_db"; // Nama database yang ingin dihubungkan

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
