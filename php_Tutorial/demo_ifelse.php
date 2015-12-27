<?php

date_default_timezone_set('America/New_York');
echo $gio = date("G");
$thu = date("D");
$thutrongtuan = array("Sun" => "Chu Nhat", "Mon" => "Thu Hai", "Sat" => "Thu Bay");
if ($thu == "Sun") {
    echo "Hom nay la Chu Nhat.<br/>";
}
echo "<br> Hom nay la " . $thutrongtuan[$thu];
if ($gio < 12) {
    echo "<br> Chao buoi sang ! Bay gio la thu " . date("D H:i:s") . " gio.";
} else {
    echo "<br> Chuc mot ngay tot lanh !";
}

//vi du if elseif else
if ($gio < 12) {
    echo "<br> Chao buoi sang ! Bay gio la thu " . date("D H:i:s") . " gio.";
} elseif ($gio < 18) {
    echo "<br> Chao buoi chieu !";
} else {
    echo "<br> Chao buoi toi !";
}

//de mo dung switch hien thu trong tuan

$thu = "Wed";
switch ($thu) {
    case 'Mon':
        echo "<br> Ban nhap vao la thu Hai";
        break;
    case 'Tue':
        echo "<br> Ban nhap vao la thu Ba";
        break;
    case 'Wed':
        echo "<br> Ban nhap vao la thu Tu";
        break;
    case 'Sat':
        echo "<br> Ban nhap vao la thu Bay";
        break;
    case 'Sun':
        echo "<br> Ban nhap la Chu Nhat";
        break;
    default :
        echo "<br> Ban nhap vao khong dung dinh. Moi Ban nhap lai !";
}

