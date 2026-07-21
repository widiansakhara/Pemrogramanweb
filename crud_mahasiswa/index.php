<?php 
include "koneksi.php"; 
?> 
<!DOCTYPE html>
 <html>
    <head> 
        <title>Data Mahasiswa</title>
    </head> 
    <body> 
        <h2>Data Mahasiswa</h2> 
        <a href="tambah.php">Tambah Data</a> 
        <br><br> 
        <table border="1" cellpadding="10"> <tr>   
             <th>No</th>
             <th>NIM</th>  
             <th>Nama</th>   
             <th>Prodi</th>  
             <th>Angkatan</th>
             </tr> 
    <?php   
    $no = 1;  
    $data = mysqli_query($conn, "SELECT * FROM mahasiswa"); 
    while($d = mysqli_fetch_array($data))
    { 
    ?>
    <tr>  
        <td><?= $no++ ?></td> 
        <td><?= $d['nim'] ?></td>
        <td><?= $d['nama'] ?></td> 
        <td><?= $d['prodi'] ?></td>
        <td><?= $d['angkatan'] ?></td>  