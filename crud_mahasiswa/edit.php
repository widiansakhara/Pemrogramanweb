<?php
include "koneksi.php"; // Menghubungkan database [cite: 251]

// Mengambil ID dari URL menggunakan metode GET [cite: 252, 292]
$id = $_GET['id']; [cite: 252, 286]

// Mengambil data mahasiswa yang sesuai dengan id untuk ditampilkan kembali di form [cite: 255, 289, 293]
$data = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id='$id'"); [cite: 253, 255, 287, 289]
$d = mysqli_fetch_array($data); [cite: 257, 291]
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title> [cite: 262]
</head>
<body>
    <h2>Edit Mahasiswa</h2>
    <form action="update.php" method="POST"> [cite: 265]
        <input type="hidden" name="id" value="<?= $d['id'] ?>">

        NIM : <br>
        <input type="text" name="nim" value="<?= $d['nim'] ?>" required><br><br> [cite: 266, 267]
        
        Nama: <br>
        <input type="text" name="nama" value="<?= $d['nama'] ?>" required><br><br> [cite: 269, 270]
        
        Prodi: <br>
        <input type="text" name="prodi" value="<?= $d['prodi'] ?>" required><br><br> [cite: 272, 273]
        
        Angkatan : <br>
        <input type="number" name="angkatan" value="<?= $d['angkatan'] ?>" required><br><br> [cite: 275, 276]
        
        <button type="submit">Update</button> [cite: 278, 279]
    </form> [cite: 281]
</body>
</html>