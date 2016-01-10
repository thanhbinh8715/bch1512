
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

?>

<a href="?act=logout">Log out</a>
<a href="?act=login">Login </a>