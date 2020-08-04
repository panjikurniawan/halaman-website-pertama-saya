<?php 
    include "koneksi.php";

    $sql = "CREATE DATABASE profile";

    if($koneksi->query($sql) === TRUE){
        echo("database berhasil dibuat");
    } else{
        echo("database gagal dibuat");
    }
?>
