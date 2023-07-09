<?php
require_once("../koneksi_db.php");
$idpegawai = $_POST['idpegawai'];
$nama = $_POST["txt_nama"];
$divisi = $_POST['tx_divisi'];
$jabatan = $_POST['tx_jabatan'];
$tgl = $_POST['tx_tgl'];
$alamat = $_POST['tx_alamat'];
$status = "";
//untuk mendapatakan value
if(isset($_POST['op_jk'])){
    $jk = $_POST['op_jk'];
}
if(isset($_POST['st_kontrak'])){
    $status = "Kontrak";
}
if(isset($_POST['st_tetap'])){
    $status = "tetap";
}
echo "</br>";
$file = $_FILES['tx_file'];
echo "<hr>";
$filelama =  $_POST['filelama'];
$ceknamafile = "";
if(!empty($file['name'])){
    $data = mysqli_query($koneksi_db, "SELECT * FROM mst_pegawai where idpegawai = $idpegawai");
        $lihat = mysqli_fetch_array($data);
        if($filelama){
            $path = "../filefoto/".$lihat['foto'];
            unlink($path);
        }
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
    if($boleh_upload == 1){
        //if melakukan upload dan sekaligus melakukan pengecekanh
        if(move_uploaded_file($file["tmp_name"],$target_file)){
            notif("File Sudah di Upload");
            $ceknamafile = $file['name'];
        }
        else{
            notif("Gagal Upload File");
        }
    }
}else{
    echo 'file lama';
    $ceknamafile = $filelama;
}
$query_update = mysqli_query($koneksi_db, "UPDATE mst_pegawai SET nama_peg='$nama', jk = '$jk', divisi ='$divisi', jabatan = '$jabatan',tgl_masuk = '$tgl',status = '$status', alamat = '$alamat', foto = '$ceknamafile' WHERE idpegawai= '$idpegawai'");
if($query_update){
    notif("Berhasil Diubah");
}
function notif($pesan){
    echo'<script language ="javascript">';
    echo 'alert("'.$pesan.'")';
    echo '</script>';
    echo '<meta http-equiv="refresh" content = "0;url = http://localhost/matkul_repo/matkul_webprog/latihanlogin/home.php?modul=mod_pegawai">';
}
?>