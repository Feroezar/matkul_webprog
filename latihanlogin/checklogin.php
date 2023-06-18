<?php
require_once("koneksi_db.php");
session_start();
$usernya = $_POST["txt_user"];
$passnya = md5($_POST["txt_pasw"]);
$query_login = mysqli_query($koneksi_db, "SELECT * FROM mst_user WHERE password = '".$passnya."' AND BINARY username = '".$usernya."' and is_active = 1");
$checkhasil = mysqli_num_rows($query_login);
$nama = mysqli_fetch_array($query_login);
if($checkhasil > 0){
    echo "selamat berhasil";
    $_SESSION['userlog'] = $usernya;
    $_SESSION['namalog'] = $nama["nama"]; 
    header("Location: home.php");
}else{
    $_SESSION["pesan"] = "ID or Password wrong";
    header("Location: index.php");   
}
?>