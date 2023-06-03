<?php
require_once("../../koneksidb.php");
if($_GET["proses"]=="insert"){
    $kategori = $_POST["kategori"];
    $judul = $_POST["judul"];
    $isinya = $_POST["isi"];
    $tgl = $_POST["tanggal"];
    if(isset($_POST["is_aktif"])){
        $aktif = 1;
    }else {
        $aktif = 0;
    }
    $exsave = mysqli_query($koneksidb, "insert into mst_blog(judul,file_gmb,isi_blog,tgl_blog,penulis,id_kategori,is_aktif) values('".$judul."','','".$isinya."','".$tgl."','','".$kategori."','.$aktif.')");
    if($exsave){
        header("Location: http://localhost/matkul_repo/matkul_webprog/latihan02/admin/home.php?modul=mod_blog");
    }
}
else if($_GET["proses"]=="update"){
    echo "Proses Update";
    $kategori = $_POST["kategori"];
    $judul = $_POST["judul"];
    $isinya = $_POST["isi"];
    $tgl = $_POST["tanggal"];
    $idblog = $_POST['id_blog'];
    if(isset($_POST["is_aktif"])){
        $aktif = 1;
    }else {
        $aktif = 0;
    }
    $exsave = mysqli_query($koneksidb, "UPDATE mst_blog SET id_kategori= '$kategori', judul = '$judul', isi_blog = '$isinya',tgl_blog = '$tgl' WHERE id_blog = $idblog");
    if($exsave){
        header("Location: http://localhost/matkul_repo/matkul_webprog/latihan02/admin/home.php?modul=mod_blog");
    }
}
else if($_GET["proses"]=="delete"){
    echo "Proses Delete";
    $hapus = $_GET["id"];
    $exsave = mysqli_query($koneksidb, "DELETE FROM mst_blog WHERE id_blog = $hapus")
        or die(mysqli_error($koneksidb));
    if($exsave){
        header("Location: http://localhost/matkul_repo/matkul_webprog/latihan02/admin/home.php?modul=mod_blog");
    }
}
?>