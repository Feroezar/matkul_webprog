<?php
require_once("../../koneksidb.php");
if($_GET["proses"]=="insert"){
  echo "Proses tambah";
  $nmkategori = $_POST["txt_nama"];
  $exsave = mysqli_query($koneksidb, "insert into mst_kategori(nm_katagari) values('".$nmkategori."')");
  if($exsave){
    header("Location: http://localhost/matkul_repo/matkul_webprog/latihan02/admin/home.php?modul=mod_kategori");
  }
}
else if($_GET["proses"]=="update"){
  echo "Proses Update";
  $nmkategori = $_POST["txt_nama"];
  $idkategori = $_POST["txt_id"];
  $exsave = mysqli_query($koneksidb, "UPDATE mst_kategori SET nm_kategori = '$nmkategori' WHERE id_kategori = $idkategori")
      or die(mysqli_error($koneksidb));
  if($exsave){
    header("Location: http://localhost/matkul_repo/matkul_webprog/latihan02/admin/home.php?modul=mod_kategori");
  }
}
else if($_GET["proses"]=="delete"){
  echo "Proses Delete";
  $hapus = $_GET["id"];
  $exsave = mysqli_query($koneksidb, "DELETE FROM mst_kategori WHERE id_kategori = $hapus")
      or die(mysqli_error($koneksidb));
  if($exsave){
    header("Location: http://localhost/matkul_repo/matkul_webprog/latihan02/admin/home.php?modul=mod_kategori");
  }
}
?>