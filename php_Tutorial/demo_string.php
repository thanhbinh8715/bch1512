<?php

$ten = "Vu,Thanh.Binh";
echo "<br> Do dai chuoi la : " . strlen($ten);
echo "<br> So ky tu ten lop cua chung ta la : ". strlen('BCH1512');
echo "<br> So tu trong ten cua minh la :" . str_word_count($ten);
echo "<br> So tu trong chuoi \"xin chao cac ban\" la : " . str_word_count('xin chao cac ban');
echo "<br> Chuoi dao nguoc ten cua Minh la : " . strrev($ten);
echo "<br> Chuoi dao nguoc cua 'xin chao cac ban' la: " .strrev('xin chao cac ban');
echo "<br> Tu Thanh o vi tri thu : " . strpos($ten, 'Thanh');
echo "<br> Ten cua Ban sau khi thay the la : " . str_replace('Vu', 'Phan', $ten);
define('NAME', 'Le Thi Lieu',TRUE);
echo "<br> Gia tri hang so NAME la : " . NAME;
echo "<br> Gia tri hang so Name la : " . Name;

function myFunction(){
    echo '<br> Hang so NAME o ben trong ham la : ' . NAME;
}

myFunction();

$x = 10;
$y = 15;

echo "<br> Tong 10 va 15 la : ". ($x + $y);
echo "<br> Hieu 10 va 15 la : " . ($x - $y);
echo "<br> 10 x 15 = " . ($x * $y);
echo "<br> 10 / 15 = " . ($x / $y);
echo "<br> 10 / 15 co so du la : " . ($x % $y);

$x = $y ;
echo '<br> $x = $y => $x la : ' . $x;
$x += $y;
echo '<br> $x += $y => $x = ' . $x;
$x -= $y;
echo '<br> $x -= $y => $x = ' . $x;
$x *= $y;
echo '<br> $x *= $y => $x = ' . $x;

echo "<br> $x /= $y => \$x = " . ($x /= $y);
echo "<br> $x %= $y => \$x = " . ($x %= $y);

$x = 10;
$y = "10";
var_dump($y);
//var_dump($x == $y);
//var_dump($x === $y);
$y = 100;
var_dump($y);

echo "<br> Gia tri ++\$x = " . (++$x);
echo "<br> Gia tri \$x++ = " . ($x++);
echo "<br> Gia cuoi cung cua \$x = " . $x;
echo "<br> Gia tri --$x = " . (--$x);
echo "<br> Gia tri $x-- = " . ($x--);
echo "<br> Gia tri cuoi cung cua \$x= " . $x;

$txt1 = "<br> xin chao";
$txt2 = "cac Ban !";

echo $txt1 . $txt2;
$txt1 .= $txt2;
//$txt1 = $txt1 . $txt2;
echo $txt1;

$a = array('a' => 'do','b' => 'den');
$b = array('c' => 'xanh', 'd' => 'hong' ,'e' => 10);
$c = array('c' => 'xanh', 'd' => 'hong' ,'e' => "10");

echo "<br> truy mang key c la : " . $b['d'];
var_dump($c != $b);