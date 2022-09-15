<?php
$host="localhost";
$user="root";
$pass="";
$database="phpregpagi";

$koneksi=mysqli_connect($host, $user, $pass, $database);

if ($koneksi){
    $buka=mysqli_select_db($koneksi,$database);
    echo "DATABASE TERHUBUNG";
    if (!$buka){
        echo "DATA BASE TIDAK TERHUBUNG";
    }
    
}else{
    echo "TIDAK DAPAT TERHUBUNG";
    }
?>
