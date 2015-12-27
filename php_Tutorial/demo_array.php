<?php

$lophoc = array('Tu',"mo",'Hoang',"Hop");

echo "<br> Tong so ban trong lop chung ta la : " . count($lophoc);
echo "<br> Danh sach lop : ";
$siso = count($lophoc);
for($i =0 ; $i < $siso; $i++){
    echo $lophoc[$i] . ', ';
}

// vi du mang theo key
$tuoi['Tu'] = 25;
$tuoi['Mo'] = 30;
$tuoi['Hoang'] = 27;

echo "<br > Tuoi cua Tu la : " . $tuoi['Tu'];

echo "<br> Tuoi cac ban trong lop : ";
foreach ($tuoi as $ten => $sotuoi){
    echo "<br> Tuoi cua Ban $ten la : $sotuoi";
}