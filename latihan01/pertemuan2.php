<?php
$pembeli = "Daud";
$uang = 100000000;
$laptop;
// if($uang < 10000000)
//     $laptop = "Laptop ASUS";
// else
//     $laptop = "Laptop HP";
// echo "Maka $pembeli membeli $laptop";
echo "<hr>";

switch($uang){
    case $uang < 10000000:
        $laptop = "Laptop ASUS";
        break;
    case $uang >= 10000000:
        $laptop = "Laptop HP";
        break;
}
echo "Maka $pembeli membeli $laptop";

echo "<hr>";

$mahasiswa = "tidak lengkap";
$seragam;
if($mahasiswa == "lengkap"){
    $seragam = "Silahkan mengikuti kuliah";
}
else if($mahasiswa == "tidak lengkap"){
    $seragam = "laksanakan hukuman";
}
else{
    $seragam = "Kena SP";
}

echo "Maka Mahasiswa $seragam";

echo "<hr>";


?>