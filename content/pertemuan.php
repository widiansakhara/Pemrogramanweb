<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cek Kategori Usia Mahasiswa</title>
</head>
<body>

    <h2>Cek Kategori Usia Mahasiswa</h2>
    
    <form action="" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <label for="umur">Umur:</label><br>
        <input type="number" id="umur" name="umur" required><br><br>
        
        <button type="submit" name="submit">Cek Kategori</button>
    </form>

    <hr>

    <?php
    // Memeriksa apakah form telah disubmit
    if (isset($_POST['submit'])) {
        
        // 1. Menggunakan Variabel untuk menyimpan data dari form
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $kategori = "";

        // 2. Percabangan (if-elseif-else) dan Operator Perbandingan
        if ($umur < 13) {
            $kategori = "Anak-anak";
        } elseif ($umur >= 13 && $umur <= 17) {
            $kategori = "Remaja";
        } elseif ($umur >= 18 && $umur <= 59) {
            $kategori = "Dewasa";
        } else {
            $kategori = "Lansia";
        }

        // 3. Output menggunakan echo
        echo "<h3>Hasil Analisis:</h3>";
        echo "Mahasiswa bernama <strong>" . htmlspecialchars($nama) . "</strong> berusia " . $umur . " tahun termasuk dalam kategori: <strong>" . $kategori . "</strong>.";
    }
    ?>

</body>
</html>