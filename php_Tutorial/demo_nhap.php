<form action="" method="post">
    Moi ban nhap vao 1 so : 
    <input type="text" id="txtSo" name="txtSo" placeholder="Moi ban nhap vao day !" />
    <br>
    <input type="submit" name="submit" value="Kiem Tra" />
</form>


<?php
if (isset($_POST['txtSo'])) {
    $getSo = $_GET['txtSo'];
//    $so = ['txtSo'];
//$so = $_POST['txtSo']; 
    $so = $_REQUEST['txtSo'];

    echo "<br> So ban nhap la $so";
    echo "<br > abc = $getSo";
}