<?php
include "koneksi.php"; // Menghubungkan database 

// Mengambil ID dari URL yang dikirimkan tombol aksi di index.php [cite: 348, 349]
$id = $_GET['id']; [cite: 348, 350]

// Menjalankan Query DELETE dengan klausa WHERE agar hanya ID terpilih yang terhapus [cite: 348, 351, 353]
$query = mysqli_query($conn, "DELETE FROM mahasiswa WHERE id='$id'"); [cite: 348]

if ($query) {
    // Redirect ke halaman utama dan data lama otomatis hilang dari daftar [cite: 348, 354]
    header("Location: index.php"); [cite: 348, 354]
} else {
    echo "Gagal menghapus data: " . mysqli_error($conn);
}
?>