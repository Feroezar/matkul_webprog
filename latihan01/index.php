<?php
    echo "Hello world";
print '<b>oekay</b>';

    echo "<br>";

$nama1 = 'Fero';
$nama2 = "Ezar";
    echo $nama1." ".$nama2;
    echo "<hr>";

$nquiz = 81;
$ntugas = 25;
$hasil1 = $nquiz + $ntugas;
    echo "penjumlahan : ".$hasil1;
$hasil2 = $nquiz * $ntugas;
    echo "<br>Perkalian : ".$hasil2;
$hasil3 = $nquiz - $ntugas;
    echo "<br>Pengurangan : ".$hasil3;
$hasil4 = $nquiz / $ntugas;
    echo "<br>Pembagian : ".round($hasil4);
    // round pembulatan
$hasil5 = $nquiz % $ntugas;
    echo "<br>Exponen : ".$hasil2**2;
    echo ", Modulus : ".$hasil5;
?>