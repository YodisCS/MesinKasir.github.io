<?php
include 'koneksi.php'; // Memasukkan koneksi database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $namaProduk = $_POST['namaProduk'];
    $jumlahProduk = $_POST['jumlahProduk'];
    $hargaSatuan = $_POST['hargaSatuan'];
    $totalHarga = $jumlahProduk * $hargaSatuan;
    $tanggalTransaksi = $_POST['tanggalTransaksi'];

    // Query untuk memasukkan data ke tabel
    $sql = "INSERT INTO penjualan (nama_produk, jumlah_produk, harga_satuan, total_harga, tanggal_transaksi)
            VALUES ('$namaProduk', '$jumlahProduk', '$hargaSatuan', '$totalHarga', '$tanggalTransaksi')";

    if ($conn->query($sql) === TRUE) {
        echo "Transaksi berhasil disimpan!";
    } else {
        echo "Error: " . $conn->error;
    }

    // Tutup koneksi
    $conn->close();
}
?>
