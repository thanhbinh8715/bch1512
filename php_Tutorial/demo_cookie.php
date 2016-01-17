<?php
session_start();
?>
Chon giao dien hien thi : 
<a href="?temp=1">Blue theme</a>
<a href="?temp=2">Dark theme</a>
<a href="?temp=3">Sky theme</a>


Chon ngon ngu :  <a href="?lang=en">Tieng Anh</a> 
<a href="?lang=vi">Tieng Viet</a>
<a href="?lang=jp">Tieng Nhat</a>
<?php
$message = "Bienvenu au Vietnam";
if (isset($_GET['temp'])) {
    setcookie('temp', $_GET['temp'], time() + 3600);
    $_COOKIE['temp'] = $_GET['temp'];
} else if (isset($_GET['lang'])) {
    switch ($_GET['lang']) {
        case 'en':
            $message = "Wel-come to Viet Nam";
            setcookie('lang', 'en', time() + 3600);
            break;
        case 'vi':
            $message = "Chao mung den voi Viet Nam";
            setcookie('lang', 'vi', time() + 3600);
            break;
        default :
            setcookie('lang', 'jp', time() + 3600);
            $message = "Bienvenu au Vietnam";
    }
} else if (isset($_COOKIE['lang'])) {
    //var_dump($_COOKIE);
    switch ($_COOKIE['lang']) {
        case 'en':
            $message = "Wel-come to Viet Nam";
            break;
        case 'vi':
            $message = "Chao mung den voi Viet Nam";
            break;
        default :
            $message = "Bienvenu au Vietnam";
    }
}

$backgroundColor = 'white';
if (isset($_COOKIE['temp'])) {
    switch ($_COOKIE['temp']) {
        case 1:
            $backgroundColor = 'blue';
            break;
        case 2:
            $backgroundColor = 'red';
            break;
        default :
            $backgroundColor = 'white';
    }
}

?>
<style>
    body{
        background-color: <?= $backgroundColor ?>;
    }
    </style>
<?php

echo "<br />" . $message;

if (isset($_SESSION['username'])) {
    echo "welcome " . $_SESSION['username'];
}

