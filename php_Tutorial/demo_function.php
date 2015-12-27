<?php



hienThiTen("Vu Thanh Binh", 29);
hienThiTen("Le Minh Hoang", 24);
hienThiTen("Kieu Mai Mo");
echo "<br> Tong cua 5 va 7 la : ".tong2so(5, 7);
echo "<br> Trung binh cong cua 5 va 7 la : " .(tong2so(5, 7) / 2);



function hienThiTen($hoten, $tuoi = 20){
    echo "<br> Ten cua Ban la : $hoten. Ban co so tuoi la : $tuoi";    
}

function tong2so($a , $b){
    $tong = $a + $b;
    return $tong;
}