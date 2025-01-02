
// Fungsi untuk mengirim data form transaksi tanpa pindah halaman
function submitForm(event) {
    event.preventDefault(); // Mencegah form dari reload halaman

    var form = document.getElementById('kasirForm');
    var formData = new FormData(form);

    // Membuat request AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'save_transaction.php', true);

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Tampilkan popup jika transaksi berhasil
            showPopup("Transaksi berhasil disimpan!");
            form.reset(); // Reset form setelah submit
        } else if (xhr.readyState == 4) {
            // Tampilkan error jika ada masalah
            showPopup("Terjadi kesalahan saat menyimpan transaksi.");
        }
    };

    xhr.send(formData); // Kirim data form
}

// Fungsi untuk menampilkan popup
function showPopup(message) {
    var popup = document.getElementById('popup');
    var popupMessage = document.getElementById('popupMessage');
    popupMessage.innerText = message;
    popup.style.display = 'block';
}

// Fungsi untuk menutup popup
function closePopup() {
    var popup = document.getElementById('popup');
    popup.style.display = 'none';
}
