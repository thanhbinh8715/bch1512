<?php
date_default_timezone_set('America/New_York');
$gio = date("G");
$thu = date("D");
$thutrongtuan = array("Sun" => "Chu Nhat", "Mon" => "Thu Hai","Sat" => "Thu Bay");
if ($thu == "Sun"){
    echo "Hom nay la Chu Nhat.<br/>";    
}
echo "<br> Hom nay la " . $thutrongtuan[$thu];
if ($gio <12){
    echo "<br> Chao buoi sang ! Bay gio la thu ".  date("D H:i:s")." gio.";
}  else {
    echo "<br> Chuc mot ngay tot lanh !";
}

//vi du if elseif else
if ($gio <12){
    echo "<br> Chao buoi sang ! Bay gio la thu ".  date("D H:i:s")." gio.";
}  elseif ($gio < 18) {
    echo "<br> Chao buoi chieu !";
}else{    
    echo "<br> Chao buoi toi !";
}


