<?php
$name = $email = $website = $age = $facebook = $gender = $trinhdo = $ngaysinh = '';
$nameErr = $emailErr = $websiteErr = $ageErr = $trinhdoErr = $facebookErr = $genderErr = $ngaysinhErr = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        $nameErr = "Ban phai nhap ten";
    } else {
        $name = kiemtra($_POST['name']);
        // kiem tra name
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Ten chi duoc chua chu cai va dau cach";
        }
    }
    
    if (empty($_POST['email'])){
        $emailErr = "Ban phai nhap email";
    }  else {
        $email = kiemtra($_POST['email']);
        //kiem email dung dinh dang
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emailErr = "E-mail ban nhap chua dung dinh dang.";
        }
    }
    
    if (!empty($_POST['website'])){
        $website = kiemtra($_POST['website']);
        //kiem dung dinh dang URL
        if (!preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i', $website)){
            $websiteErr = "Dia chi website khong dung dinh dang";
        }
    }
    
    if (empty($_POST['age'])){
        $ageErr = "Ban chua nhap tuoi";
    }else{
        $age = kiemtra($_POST['age']);
        //kiem tra kieu so
        if (!is_numeric($age)){
            $ageErr = "Tuoi phai la kieu so";
        }
    }
    
    if (!empty($_POST['facebook'])){
        $facebook = kiemtra($_POST['facebook']);
        //kiem dung dinh dang URL
        if (!preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i', $facebook)){
            $facebookErr = "Dia chi Facebook khong dung dinh dang";
        }
    }
    
    if (empty($_POST['gender'])){
        $genderErr = "Ban phai chon gioi tinh";
    }  else {
        $gender = kiemtra($_POST['gender']);
        
    }
    
    if ($_POST['trinhdo']==0){
        $trinhdoErr = "Ban hay chon trinh do cua Ban";
    }else{
        $trinhdo = kiemtra($_POST['trinhdo']);
    }
    
    // xu ly ngay thang sinh
    if (!empty($_POST['ngaysinh'])){
        $ngaysinh = kiemtra($_POST['ngaysinh']);
        $tam = explode('/', $ngaysinh);
        if (count($tam) != 3){
            $ngaysinhErr = "Ban nhap vao chua dung dinh dang ngay thang";
        }else{
            if (is_numeric($tam[2]) && is_numeric($tam[1]) && is_numeric($tam[0])){
                if ($tam[1] > 12 || $tam[1] < 1){
                    $ngaysinhErr = "Thang phai nho hon 12";
                }else
                    if ($tam[0] > 31 && $tam[0] <1){
                        $ngaysinhErr = 'Ngay phai nho hon 31';
                }
            }  else {
                $ngaysinhErr = "Ban phai nhap ngay thang nam la kieu so";                         
            }
        }
    }
}

function kiemtra($dulieu) {
    $dulieu = trim($dulieu);
    $dulieu = stripslashes($dulieu);
    $dulieu = htmlspecialchars($dulieu);
    return $dulieu;
}
?>


<form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
    Ho Ten : <input type="text" name="name" value="<?= $name ?>" /> 
    <label class="error" ><?= $nameErr ?> </label> * 
    <br/>
    Email : <input type="text" name="email" value="<?= $email ?>" /> 
    <label class="error"><?php echo $emailErr ?></label> *
    <br/>
    Website: <input type="text" name="website" value="<?= $website ?>" /> 
    <label class="error"><?php echo $websiteErr ?></label>
    <br/>
    Tuoi: <input type="text" name="age" value="<?= $age ?>" /> *
    <label class="error"><?php echo $ageErr ?></label>
    <br/>
    Dia chi Facebook : <input  type="text" name="facebook" value="<?= $facebook ?>" />
    <label class="error"><?php echo $facebookErr ?></label>
    <br/>
    Gioi tinh : <input type="radio" name="gender" value="nam" 
        <?php echo $gender === 'nam' ?  'checked' :  '' ?> /> Nam  * 
    <!-- radio chon Nam va Nu -->
    <input type="radio" name="gender" value="nu" 
        <?php 
        if ($gender === 'nu'){
            echo 'checked';            
        } 
        ?> />  Nu
    <label class="error"><?php echo $genderErr ?></label>
    <br/>
    Trinh do : <select name="trinhdo" >
        <option value="0" >Moi ban chon</option>
        <option value="1" <?= $trinhdo == 1 ? 'selected' : '' ?>>Dai Hoc</option>
        <option value="2" <?= $trinhdo == 2 ? 'selected' : '' ?>>Cao Dang</option>
        <option value="3"<?= $trinhdo == 3 ? 'selected' : '' ?>>Trung Cap</option>
    </select>  <!-- Dai hoc, Trung Cap, Cao Dang --> *
    <label class="error"><?php echo $trinhdoErr ?></label>
    <br/>
    Ngay sinh : <input name="ngaysinh" type="text" value="<?= $ngaysinh ?>" /> 
    <label class="error"><?php echo $ngaysinhErr ?></label>
    <br/> 
    Dinh dang nhap : ngay/thang/nam <br/>
    <input type="submit" />
</form>



<style>
    .error {
        color: red;
        font-weight: bold;
    }
</style>


