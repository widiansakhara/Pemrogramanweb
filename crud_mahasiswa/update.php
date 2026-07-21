<?php
include "koneksi.php"; // Menghubungkan database [cite: 298]

// Menerima data ter-update dari form edit menggunakan metode POST [cite: 316, 326]
$id       = $_POST['id']; [cite: 318, 332]
$nim      = $_POST['nim']; [cite: 299, 319]
$nama     = $_POST['nama']; // Perbaikan typo dari modul [cite: 300, 320]
$prodi    = $_POST['prodi']; [cite: 301, 321]
$angkatan = $_POST['angkatan']; [cite: 302, 324]

// Menjalankan Query UPDATE berdasarkan ID tertentu agar tidak mengubah seluruh data [cite: 303, 334, 345]
$query = mysqli_query($conn, "UPDATE mahasiswa SET nim='$nim', nama='$nama', prodi='$prodi', angkatan='$angkatan' WHERE id='$id'"); [cite: 303, 305, 306, 307, 308, 309, 310]

if ($query) {
    // Redirect ke halaman utama jika data berhasil diperbarui [cite: 315, 346]
    header("Location: index.php"); [cite: 315]
} else {
    echo "Gagal mengupdate data: " . mysqli_error($conn);
}
?>