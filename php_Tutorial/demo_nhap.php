<form action="" method="_GET">
    Moi ban nhap vao 1 so : 
    <input type="text" id="txtSo" name="txtSo" placeholder="Moi ban nhap vao day !" />
    <br>
    <input type="submit" name="submit" value="Kiem Tra" />
</form>


<?php

$so = $_GET['txtSo'];
//$so = $_POST['txtSo']; 
$so = $_REQUEST['txtSo'];

echo  "So ban nhap la $so";