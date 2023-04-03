<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div>
  <table border="1" cellpading="1" style="width:60%">
    <tr>
      <td>ID</td>
      <td>judul</td>
      <td>konten</td>
      <td>action</td>
    </tr>
<?php
  $data = array(
    array("ID"=>"01", "Judul" => "judul01", "konten"=>"isi konten-01"),
    array("ID"=>"02", "Judul" => "judul02", "konten"=>"isi konten-02"),
    array("ID"=>"03", "Judul" => "judul03", "konten"=>"isi konten-03"),
);
foreach($data as $a){
?>
    <tr>
      <td><?php echo $a["ID"];?></td>
      <td><?php echo $a["Judul"];?></td>
      <td><?php echo $a["konten"];?></td>
      <td>
        <a href="?idsay=<?php echo $a["ID"];?>">Edit</a>
        <a href="">Delete</a>
      </td>
    </tr>
    <?php } ?>
  </table>
</div>
</body>
</html>
<?php
  $kata = "Belajar PHP itu Mudah";
  $kata2 = explode("itu", $kata);
  $kata3 = implode("itu", $kata2);
  var_dump($kata2);
  echo "<br>";
  var_dump($kata3);
  echo "<br>";
  echo ltrim($kata3,"Belajar");
  echo "<br>";
  echo rtrim($kata3,"Mudah");
  echo "<br>";
  date_default_timezone_set("Asia/Jakarta");
  $today = date("D, d/m/Y h:i:s ");
  echo $today;
  echo "<br>";
  
  function umur(){
    $tgllahir = date_create("24-05-2004");
    $tglhariini = date("d-m-Y");
    $umur = date_diff($tgllahir, date_create($tglhariini));
    return "UMUR = ".$umur->format('%y thn %m bln %a hari %h hari %i mnt %s detik');
  }
  echo umur();
  echo "<br>";
  $nama = "Fero";
  $jurusan = "ASE";
  $nilai = 80;
  function datamhs($jurusan, $nama, $nilai){
    echo "Hallo, nama saya : ".$nama.", Jurusan : ".$jurusan.", Nilai : ".$nilai;
  }
  datamhs($jurusan, $nama, $nilai);
?>