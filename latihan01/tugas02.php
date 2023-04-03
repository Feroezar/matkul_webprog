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
      <td>Barang</td>
      <td>Waktu</td>
      <td>Diskon</td>
      <td>Persentase</td>
    </tr>
<?php
date_default_timezone_set("Asia/Jakarta");
function waktu(){ 
  $tgl_now1 = date("F Y, l");
  $time_now1 = date("h : i : s A");
  echo $tgl_now1."<br>";
  echo $time_now1;
}
waktu();
$time_now = date("s");
  $data = array(
    array("ID"=>"090101", "Judul" => "JORDAN Shoe", "harga"=>1000000),
    array("ID"=>"090102", "Judul" => "BAPE Hoodie", "harga"=>10000000),
    array("ID"=>"090103", "Judul" => "SUPREME BAG", "harga"=>50000000),
);

foreach($data as $a){
?>
    <tr>
      <td><?php echo $a["ID"];?></td>
      <td><?php echo $a["Judul"];?></td>
      <td><?php echo $a["harga"];?></td>
      <td>
        <?php
        $time_now = date("s"); 
        if($a["ID"] == $data[0]["ID"]){
          if($time_now == "15"){
            $hasil1 = $data[0]["harga"] * 0.2;
            $total1 = $data[0]["harga"] - $hasil1;
            echo $total1;
          }else {
            echo "Belum Ada Diskon";
          }
        }else if($a["ID"] == $data[1]["ID"]){
          if($time_now == "45"){
            $hasil2 = $data[1]["harga"] * 0.3;
            $total2 = $data[1]["harga"] - $hasil2;
            echo $total2;
            }else {
              echo "Belum Ada Diskon";
            }
        }else if($a["ID"] == $data[2]["ID"]){
          if($time_now == "30"){
            $hasil3 = $data[2]["harga"] * 0.4;
            $total3 = $data[2]["harga"] - $hasil3;
            echo $total3;
          }else {
            echo "Belum Ada Diskon";
          }
        }else {
          echo "Belum Ada Diskon";
        }
        ?>
      </td>
      <td>
        <?php
          $time_now = date("s"); 
          if($a["ID"] == $data[0]["ID"]){
            if($time_now == "15"){
              echo "20%";
            }
          }else if($a["ID"] == $data[1]["ID"]){
            if($time_now == "45"){
              echo "30%";
              }
          }else if($a["ID"] == $data[2]["ID"]){
            if($time_now == "30"){
              echo "40%";
            }
          }
        ?>
      </td>
    </tr>
    <?php } ?>
  </table>
</div>
</body>
</html>
