<?php

    $koneksi=mysqli_connect("localhost", "root", "", "phpregpagi");

    if($koneksi){
        echo "SELAMAT KONEKSI SUKSES.";
    }else{
        echo "KURANG BERUNTUNG COBA LAGI.";
    }
    
?>
