<?php
require_once("../../koneksidb.php");
if($_GET["aksi"]=="insert"){
  echo "Proses tambah";
  $nim = $_POST["num_nim"];
  $nama = $_POST["txt_nama"];
  $hadir = $_POST["num_hadir"];
  $sakit = $_POST["num_sakit"];
  $izin = $_POST["num_izin"];
  $alpha = $_POST["num_alpha"];
  $exsave = mysqli_query($koneksidb, "insert into tst_absensi(NIM,Nama,Hadir,Sakit,Izin,Alpha) values('.$nim.','".$nama."','.$hadir.','.$sakit.','.$izin.','.$alpha.')");
  if($exsave){
    header("Location: http://localhost/matkul_webprog/tugas-03/admin/home.php?modul=tst_absensi");
  }
}
else if($_GET["aksi"]=="update"){
  echo "Proses Update";
}
else if($_GET["aksi"]=="delete"){
  echo "Proses Delete";
}

?>