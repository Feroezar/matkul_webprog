<?php
  $servernm = "localhost";
  $database = "dblp3i";
  $user_db = "root";
  $pass_db = "";

  //fungsi untuk mengkoreksi ke database mysql
  $koneksidb = mysqli_connect($servernm, $user_db, $pass_db, $database);

  if(!$koneksidb){
    echo "Koneksi gagal";
    exit;
  }
  // else{
  //   echo "Koneksi Berhasil";
  // }


?>