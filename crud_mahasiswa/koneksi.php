<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_kampusku";

// Mengimplementasikan koneksi database menggunakan PHP dan MySQL
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>