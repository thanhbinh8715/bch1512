<?php
$b = '';
if (isset($_REQUEST['b'])){
    $b = $_REQUEST['b'];
}
?>

<form action="" method="get">
    So thu nhat : <input type="text" name="a" value="<?php
    if (isset($_REQUEST['a'])) {
        echo $_REQUEST['a'];
    }
    ?>" /> <br />
    So thu hai : <input type="text" name="b" value="<?= $b ?>" /><?php echo $b ?>
    
    <input type="submit" name="tong" value="Tinh Tong" />
    <input type="submit" name="hieu" value="Tinh Hieu" />
</form>

<?php
if (isset($_REQUEST['tong'])) {
    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    //tinh tong
    echo "tong 2 so la : ";
} elseif (isset($_REQUEST['hieu'])) {
    //tinh hieu
    echo "hieu 2 so la : ";
}


hienThiTen("Vu Thanh Binh", 29);
hienThiTen("Le Minh Hoang", 24);
hienThiTen("Kieu Mai Mo");
echo "<br> Tong cua 5 va 7 la : " . tong2so(5, 7);
echo "<br> Trung binh cong cua 5 va 7 la : " . (tong2so(5, 7) / 2);

function hienThiTen($hoten, $tuoi = 20) {
    echo "<br> Ten cua Ban la : $hoten. Ban co so tuoi la : $tuoi";
}

function tong2so($a, $b) {
    $tong = $a + $b;
    return $tong;
}
