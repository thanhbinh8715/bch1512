<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$gio = date("G");
$thu = date("D");
$thutrongtuan = array("Sun" => "Chu Nhat", "Mon" => "Thu Hai");
if ($thu == "Sun"){
    echo "Hom nay la Chu Nhat.<br/>";    
}
echo "<br> Hom nay la " . $thutrongtuan[$thu];
if ($gio <12){
    echo "<br> Chao buoi sang ! Bay gio la thu ".  date("D H:i:s")." gio.";
}

