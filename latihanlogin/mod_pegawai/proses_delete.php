<?php
require_once("../koneksi_db.php");
$hapus = $_GET["idpeg"];
$data = mysqli_query($koneksi_db, "SELECT * FROM mst_pegawai where idpegawai = $hapus");
$lihat = mysqli_fetch_array($data);
if(isset($hapus)){
    $path = "../filefoto/".$lihat['foto'];
    unlink($path);
}
$query_update = mysqli_query($koneksi_db, "DELETE FROM mst_pegawai where idpegawai = $hapus");
if($query_update){
    header("Location: http://localhost/matkul_repo/matkul_webprog/latihanlogin/home.php?modul=mod_pegawai");
}
?>