<?php 
require_once("../../koneksidb.php");
if($_GET["proses"]=="insert"){
  $usernm = $_POST["user"];
  $pass = $_POST["pass"];
  $save = mysqli_query($koneksidb, "insert into mst_user(username,user_pass) values('".$usernm."', '".$pass."')");
  if($save){
    header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_user");
  }
}
else if($_GET["proses"]=="update"){
  echo "Proses Update";
  $usernm = $_POST["user"];
  $pass = $_POST["pass"];
  $iduser = $_POST["id_user"];
  $exsave = mysqli_query($koneksidb, "UPDATE mst_user SET username = '$usernm', user_pass = '$pass' WHERE id_user= $iduser")
      or die(mysqli_error($koneksidb));
  if($exsave){
    header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_user");
  }
}
else if($_GET["proses"]=="delete"){
  echo "Proses Delete";
  $hapus = $_GET["id"];
  $exsave = mysqli_query($koneksidb, "DELETE FROM mst_user WHERE id_user = $hapus")
      or die(mysqli_error($koneksidb));
  if($exsave){
    header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_user");
  }
}
?>