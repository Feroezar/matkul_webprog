<?php
require_once("../koneksi_db.php");
$hapus = $_GET["user"];
$query_update = mysqli_query($koneksi_db, "UPDATE mst_user SET is_active = 0 WHERE username= '$hapus'");
if($query_update){
    header("Location: http://localhost/matkul_repo/matkul_webprog/latihanlogin/home.php?modul=mod_user");
}
?>