<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Kategori Usia Mahasiswa</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: #fff0f5; 
            color: #4a3b40;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            width: 100%;
            max-width: 450px;
            padding: 30px;
            border-radius: 16px; 
            box-shadow: 0 8px 30px rgba(244, 63, 94, 0.1); 
            border: 1px solid #ffe4e6;
        }
        h2 {
            text-align: center;
            color: #db2777; 
            margin-bottom: 25px;
            font-size: 24px;
            font-weight: 600;
            letter-spacing: -0.5px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #9d174d; 
            font-weight: 500;
            font-size: 14px;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #fbcfe8; 
            border-radius: 10px;
            font-size: 15px;
            transition: all 0.3s ease;
            outline: none;
            background-color: #fffdfd;
        }
        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #f43f5e; 
            box-shadow: 0 0 0 3px rgba(244, 63, 94, 0.15);
            background-color: #ffffff;
        }
        button {
            width: 100%;
            padding: 13px;
            background-color: #f43f5e; 
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            margin-top: 10px;
        }
        button:hover {
            background-color: #e11d48; 
            transform: translateY(-1px); 
        }
        button:active {
            transform: translateY(0);
        }
        .result-box {
            margin-top: 25px;
            padding: 15px 20px;
            background-color: #fff1f2; 
            border-left: 5px solid #f43f5e; 
            border-radius: 6px 12px 12px 6px;
        }
        .result-box h3 {
            color: #9d174d;
            font-size: 16px;
            margin-bottom: 6px;
        }
        .result-box p {
            font-size: 14px;
            color: #4c0519;
            line-height: 1.5;
        }
        .highlight {
            font-weight: bold;
            color: #be123c; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cek Kategori Usia Mahasiswa</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" autocomplete="off" required placeholder="Masukkan nama mahasiswa">
            </div>
            
            <div class="form-group">
                <label for="umur">Umur (Tahun)</label>
                <input type="number" id="umur" name="umur" min="0" max="150" required placeholder="Contoh: 20">
            </div>
            
            <button type="submit" name="submit">Cek Kategori</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $umur = $_POST['umur'];
            $kategori = "";
            if ($umur < 13) {
                $kategori = "Anak-anak";
            } elseif ($umur >= 13 && $umur <= 17) {
                $kategori = "Remaja";
            } elseif ($umur >= 18 && $umur <= 59) {
                $kategori = "Dewasa";
            } else {
                $kategori = "Lansia";
            }
            
            echo "<div class='result-box'>";
            echo "<h3>Hasil Analisis:</h3>";
            echo "<p>Mahasiswa bernama <span class='highlight'>" . htmlspecialchars($nama) . "</span> berusia <span class='highlight'>" . $umur . " tahun</span> termasuk dalam kategori: <span class='highlight'>" . $kategori . "</span>.</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>