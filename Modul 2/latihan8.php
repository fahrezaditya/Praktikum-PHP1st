<?php
    $arrNilai = array ("Ani" => 80, "Otim" => 90, "Ana" => 75, "Budi" => 85);
    echo "Ani : ".$arrNilai['Ani']."<br>"; //80
    echo "Otim : ".$arrNilai['Otim']."<br>"; //90

    $arrNilai = array();
    $arrNilai['Ami'] = 80;
    $arrNilai['Asma'] = 95;
    $arrNilai['Sri'] = 77;
    echo "Asma : ".$arrNilai['Asma']."<br>"; //95
    echo "Ami : ".$arrNilai['Ami']."<br>"; //80
?>