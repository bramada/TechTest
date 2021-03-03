<?php

$aplikasi = array("gtAkademik", "gtFinansi", "gtPerizinan", "eOviz");
$panjang = count($aplikasi);
$i=0;

while ($i < $panjang)
{
    echo $aplikasi[$i] ."<br />";
    $i++;
}

?>