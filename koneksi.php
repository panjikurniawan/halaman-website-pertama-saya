<?php 
  $host = "localhost"; //host database
  $username = "root"; //username database
  $password = ""; //password database
  $db = "profile";

  $koneksi = new mysqli($host, $username, $password , $db); //membuat server koneksi ke mysql

  if($koneksi->connect_error){
      die("koneksi ke database gagal");
  } 
?>