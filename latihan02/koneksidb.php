<?php
  $servernm = "localhost";
  $database = "db_blog";
  $user_db = "root";
  $pass_db = "";
  $koneksidb = mysqli_connect($servernm, $user_db, $pass_db, $database);

  if(!$koneksidb){
    echo "Koneksi gagal";
    exit;
  }
  // else{
  //   echo "Koneksi Berhasil";
  // }


?>