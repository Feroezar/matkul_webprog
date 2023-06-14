<?php
require_once("../koneksi_db.php");
$txnama = $_POST["txt_nama"];
$txuser = $_POST["txt_user"];
$txpass_baru = $_POST["txt_pasw"];
$txpass_lama = $_POST["pass_lama"];

$passwordnya = "";
if($txpass_baru = "" || $txpass_baru = null || empty($txpass_baru)){
    $passwordnya = $txpass_lama;
}
else{
    $passwordnya = md5($txpass_baru);
}

$query_update = mysqli_query($koneksi_db, "UPDATE mst_user SET nama='$txnama', password = '$passwordnya' WHERE username= '$txuser'");
if($query_update){
    header("Location: http://localhost/matkul_repo/matkul_webprog/latihanlogin/home.php?modul=mod_user");
}
?>