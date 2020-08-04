<?php 
    include "koneksi.php";

    if(isset($_POST ['submit'])){
        $id_user = $_POST["Id_User"];
        $nama = $_POST["name"];
        $role = $_POST["role"];
        $availability = $_POST["availability"];
        $age = $_POST["age"];
        $location = $_POST["location"];
        $years_experience = $_POST["years"];
        $email = $_POST["email"];

        $sql = "UPDATE user SET nama = '$nama', role = '$role', availability = '$availability', age = '$age', location = '$location', years_experience = '$years_experience', email = '$email' WHERE Id = '$id_user";
    }

    if($koneksi->query($sql) == TRUE){
        echo "update data berhasil";
    }else{
        echo "update data gagal";
    }
?>    