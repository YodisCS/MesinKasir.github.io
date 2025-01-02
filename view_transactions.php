<?php
include 'koneksi.php'; // Memasukkan koneksi database

// Query untuk mendapatkan semua transaksi
$sql = "SELECT * FROM penjualan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Data Transaksi</h1>";
    echo "<table border='1'>
            <tr>
                <th>Nama Produk</th>
                <th>Jumlah Produk</th>
                <th>Harga Satuan</th>
                <th>Total Harga</th>
                <th>Tanggal Transaksi</th>
            </tr>";
    // Menampilkan hasil transaksi
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['nama_produk']}</td>
                <td>{$row['jumlah_produk']}</td>
                <td>{$row['harga_satuan']}</td>
                <td>{$row['total_harga']}</td>
                <td>{$row['tanggal_transaksi']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada transaksi.";
}

// Tutup koneksi
$conn->close();
?>
