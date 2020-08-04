<?php 
    include "koneksi.php";

    $sql = "INSERT INTO user(
        id,
        nama,
        role,
        availability,
        age,
        location,
        years_experience,
        email 
    )VALUE(
        '1',
        'Panji Kurniawan',
        'Front End Developer',
        'full time',
        '20',
        'Bekasi',
        '2',
        'pkurniawan30@gmail.com'
    )";

    if($koneksi->query($sql) == TRUE){
        echo "insert data berhasil";
    }else{
        echo "insert data gagal";
    }
?>