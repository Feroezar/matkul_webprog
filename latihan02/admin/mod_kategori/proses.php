<?php
require_once("../../koneksidb.php");
if($_GET["aksi"]=="insert"){
  echo "Proses tambah";
  $nmkategori = $_POST["txt_nama"];
  $exsave = mysqli_query($koneksidb, "insert into mst_katagori(nm_katagari) values('".$nmkategori."')");
  if($exsave){
    header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_kategori");
  }
}
else if($_GET["aksi"]=="update"){
  echo "Proses Update";
}
else if($_GET["aksi"]=="delete"){
  echo "Proses Delete";
}

?>