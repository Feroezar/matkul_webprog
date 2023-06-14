<?php
require_once("../koneksi_db.php");
$txnama = $_POST["txt_nama"];
$txuser = $_POST["txt_user"];
$txpass = md5($_POST["txt_pasw"]);

$query_cekdata = mysqli_query($koneksi_db, "SELECT * FROM mst_user where username = '".$txuser."'");
$cekdata = mysqli_num_rows($query_cekdata);
if($cekdata > 0){
    echo "Username sudah ada, silahkan input kembali";
}else{
    $query_simpan = mysqli_query($koneksi_db,"INSERT INTO mst_user(username,password,is_active,nama) values('".$txuser."','".$txpass."', 1, '".$txnama."')");
    if($query_simpan){
        echo "Data Tesimpan"; 
        header("Location: http://localhost/matkul_repo/matkul_webprog/latihanlogin/home.php?modul=mod_user");
    }
}
?>