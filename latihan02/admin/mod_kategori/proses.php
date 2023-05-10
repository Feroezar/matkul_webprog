<?php
require_once("../../koneksidb.php");
if($_GET["proses"]=="insert"){
  echo "Proses tambah";
  $nmkategori = $_POST["txt_nama"];
  $exsave = mysqli_query($koneksidb, "insert into mst_katagori(nm_katagari) values('".$nmkategori."')");
  if($exsave){
    header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_kategori");
  }
}
else if($_GET["proses"]=="update"){
  echo "Proses Update";
  $nmkategori = $_POST["txt_nama"];
  $idkategori = $_POST["txt_id"];
  $exsave = mysqli_query($koneksidb, "UPDATE mst_katagori SET nm_katagari = '$nmkategori' WHERE id_katagori = $idkategori")
      or die(mysqli_error($koneksidb));
  if($exsave){
    header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_kategori");
  }
}
else if($_GET["proses"]=="delete"){
  echo "Proses Delete";
  $hapus = $_GET["id"];
  $exsave = mysqli_query($koneksidb, "DELETE FROM mst_katagori WHERE id_katagori = $hapus")
      or die(mysqli_error($koneksidb));
  if($exsave){
    header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_kategori");
  }
}
?>