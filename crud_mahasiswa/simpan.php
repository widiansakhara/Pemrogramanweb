<?php
include "koneksi.php"; // Menghubungkan database [cite: 74]

// Mengambil data form menggunakan metode POST dan disimpan ke variabel [cite: 94, 101]
$nim      = $_POST['nim']; [cite: 75, 96]
$nama     = $_POST['nama']; // Perbaikan typo '$POST['name']' dari modul [cite: 77, 97]
$prodi    = $_POST['prodi']; [cite: 78, 98]
$angkatan = $_POST['angkatan']; [cite: 81, 99]

// Menjalankan Query INSERT untuk menambah data baru [cite: 82, 109]
$query = mysqli_query($conn, "INSERT INTO mahasiswa (nim, nama, prodi, angkatan) VALUES ('$nim', '$nama', '$prodi', '$angkatan')"); [cite: 82, 83, 84, 85, 86]

if ($query) {
    // Redirect halaman kembali ke daftar mahasiswa setelah berhasil disimpan [cite: 88, 122]
    header("Location: index.php"); [cite: 88, 124]
} else {
    echo "Gagal menyimpan data: " . mysqli_error($conn);
}
?>