<?php
require_once("../koneksi_db.php");
$nama = $_POST["txt_nama"];
$diviisi = $_POST['tx_divisi'];
$jabatan = $_POST['tx_jabatan'];
$tgl = $_POST['tx_tgl'];
$alamat = $_POST['tx_alamat'];
$status = "";
//untuk mendapatakan value
if(isset($_POST['op_jk'])){
    $jk = $_POST['op_jk'];
}else{
    $jk = '';
}
if(isset($_POST['st_kontrak'])){
    $status = "Kontrak";
}
if(isset($_POST['st_tetap'])){
    $status = "tetap";
}
//upload file ato foto

$file = $_FILES['tx_file'];
var_dump($file);
echo "<hr>";
$target_folder = '../filefoto/';
echo "<hr>";
echo $file['name']."<br>";
$target_file = $target_folder.$file['name'];
$type_file = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
echo $type_file."<br>";
$boleh_upload = 1;
if($file['size'] > 3000000){
    $boleh_upload = 0;
    notif("jangan Upload, File nya kebesaran<br>");
}
if($type_file != 'jpg' && $type_file != 'png' && $type_file != "jpeg"){
    $boleh_upload = 0;
    notif("jangan Upload, format file tidak sesuai<br>");

}
$ceknamafile = "";
if($boleh_upload == 1){
    //if melakukan upload dan sekaligus melakukan pengecekan
    if(move_uploaded_file($file["tmp_name"],$target_file)){
        notif("File Sudah di Upload");
        $ceknamafile = $file['name'];
    }
    else{
        notif("Gagal Upload File");
    }
}
function notif($pesan){
    echo'<script language ="javascript">';
    echo 'alert("'.$pesan.'")';
    echo '</script>';
    echo '<meta http-equiv="refresh" content = "0;url = http://localhost/matkul_repo/matkul_webprog/latihanlogin/home.php?modul=mod_pegawai&aksi=tambah">';
}
?>