<?php
// deklrasi variabel mysql
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "kampusku";

$connection=mysql_connect($db_host, $db_user, $db_pass, $db_name)
if($connection){
    echo '
    <script>
        alert("koneksi dengan database berhasil");
    </script>';
}else {
    echo '
    <script>
        alert("koneksi dengan database gagal");
    </script>' .mysqli_connect_error();
}

?>
