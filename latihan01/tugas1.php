<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 1</title>
</head>
<body>
  <?php
  $code = "BO3";
  $bo1 = 50000;
  $bo2 = 10000;
  $bo3 = 5000;
  $jb = 6; 
  $hasil1;
  $diskon;
  if($jb >= 6){
    $diskon = 2000; 
  }else{
    $diskon = 0;
  }
  if($jb >= 3 && $code == "BO1"){
    $hasil = ($bo1 * $jb) - (3000 * 3);
      echo "BO1 Buku, Beli sebanyak : ".$jb."<br>";
      echo "total harga : Rp ".$hasil."<hr> <br>";
  }else if($code == "BO2"){
    $hasil = ($bo2 * $jb) - $diskon;
      echo "BO2 Pulpen, Beli sebanyak : ".$jb."<br>";
      echo "total harga : Rp ".$hasil."<hr> <br>";
  }else{
    $hasil = $bo3 * $jb;
      echo "BO3 Penghapus, Beli sebanyak : ".$jb."<br>";
      echo "total harga : Rp ".$hasil."<hr> <br>";
  }
  $tokoase = array(
      array("code"=>"BO1", "jenis" => "Buku", "harga"=>"Rp 50,000"),
      array("code"=>"BO2", "jenis" => "Pulpen", "harga"=>"Rp 10,000"),
      array("code"=>"BO3", "jenis" => "Penghapus", "harga"=>"Rp 5,000"),
  );
  echo "Code : ".$tokoase[1]["code"]." , jenis : ".$tokoase[1]["jenis"]." , harga : ".$tokoase[1]["harga"];
  echo "<hr>";

  foreach($tokoase as $tokoase){
    foreach($tokoase as $a){
      echo $a." : ";
    }
    echo "<hr>";
  }
  ?>
</body>
</html>
