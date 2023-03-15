<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
</head>
<body>

<?php
$calonsukses = array("Fero", "Daud", "Dzaky", "Syarif");
    echo "$calonsukses[0] <br>";
    var_dump($calonsukses);
    echo "<br>";
// Associative array
$calonbos = array("Daud" => "Calon WakaPres", "Fero" => "Calon Presiden", "Dzaky"=>"Menteri Perpajakan", "Syarif"=>"Menteri Kehutanan");
    echo $calonbos['Daud'];
    echo "<br>";
// Multidimensional Array
$startup = array(
    array("nama"=>"Daud", "jabatan" => "WakaPres", "gaji"=>400000),
    array("nama"=>"Fero", "jabatan" => "Calon Presiden", "gaji"=>500000),
    array("nama"=>"Dzaky", "jabatan" => "Menteri Perpajakan", "gaji"=>200000),
    array("nama"=>"Syarif", "jabatan" => "Menteri Kehutanan", "gaji"=>300000),
);
echo "Startup : ".$startup[1]["nama"]." ,Jabatan : ".$startup[1]["jabatan"]." ,Gaji : ".$startup[3]["gaji"];

echo "<br>";

for($i = 1; $i <= 50; $i++){
    if($i%2==0){
        echo "<b>".$i.",";
    }
}
echo "<br>";
$a = 1;
while($a <= 20){
    if($a % 2 == 1){
        echo "<b>".$a.",";
    }
    $a++;
}
echo "<br>";
foreach($calonsukses as $x){
    echo $x.", ";
}
echo "<br>";
for($s=0 ; $s < sizeof($calonsukses); $s++){
    echo $calonsukses[$s].", ";
}
?>

</body>
</html>