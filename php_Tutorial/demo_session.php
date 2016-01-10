
<?php
session_start();
if (isset($_GET['act']) && $_GET['act'] == 'logout') {
    session_unset();
    session_destroy();
}else if (isset($_GET['act']) && $_GET['act'] == 'login'){
    $_SESSION['username'] = 'admin';
}


if (isset($_SESSION['username'])) {
    echo "welcome " . $_SESSION['username'];
}
var_dump($_SESSION);

file_put_contents('data.txt', '1,12,2000');
$data = file_get_contents('data.txt');
$mang = explode(',', $data);
print_r($mang);

?>

<a href="?act=logout">Log out</a>
<a href="?act=login">Login </a>

