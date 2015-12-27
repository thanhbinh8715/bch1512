<?php

$lophoc = array('Tu',"mo",'Hoang',"Hop");

echo "<br> Tong so ban trong lop chung ta la : " . count($lophoc);
echo "<br> Danh sach lop : ";
$siso = count($lophoc);
for($i =0 ; $i < $siso; $i++){
    echo $lophoc[$i] . ', ';
}