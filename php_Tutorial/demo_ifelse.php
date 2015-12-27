<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$gio = date("G");
$thu = date("D");
if ($thu == "Sun"){
    echo "Hom nay la Chu Nhat.<br/>";    
}
if ($gio <12){
    echo "Chao buoi sang ! Bay gio la thu ".  date("D H:i:s")." gio.";
}

