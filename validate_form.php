<?php
$name = $email = $website = $age = $facebook = $gender = $trinhdo = $ngaysinh = '';
$nameErr = $emailErr = $websiteErr = $ageErr = $trinhdoErr 
        = $facebookErr = $genderErr  = $ngaysinhErr = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   if (empty($_POST['name'])){
       $nameErr = "Ban phai nhap ten";
   }else{
       $name = kiemtra($_POST['name']);
       // kiem tra name
       if (!preg_match("/^[a-zA-Z ]*$/", $name)){
           $nameErr = "Ten chi duoc chua chu cai va dau cach";
       }
   }
}



function kiemtra($dulieu){
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
    Email : <input type="text" name="email" value="" /> 
    <label class="error"><?php echo $emailErr ?></label> *
    <br/>
    Website: <input type="text" name="website" /> 
    <label class="error"><?php echo $emailErr ?></label>
    <br/>
    Tuoi: <input type="text" name="age" /> *
    <label class="error"><?php echo $ageErr ?></label>
    <br/>
    Dia chi Facebook : <input  type="text" name="facebook" />
    <label class="error"><?php echo $facebookErr ?></label>
    <br/>
    Gioi tinh : <input type="radio" name="gender" value="nam" /> Nam  * 
    <!-- radio chon Nam va Nu -->
    <input type="radio" name="gender" value="Nu" /> 
    <label class="error"><?php echo $genderErr ?></label>
    <br/>
    Trinh do : <select name="trinhdo">
        <option value="0">Moi ban chon</option>
        <option value="1">Dai Hoc</option>
        <option value="2">Cao Dang</option>
        <option value="3">Trung Cap</option>
    </select>  <!-- Dai hoc, Trung Cap, Cao Dang --> *
    <label class="error"><?php echo $trinhdoErr ?></label>
    <br/>
    Ngay sinh : <input name="ngaysinh" type="text" /> 
    <label class="error"><?php echo $ngaysinhErr ?></label>
    <br/>
    <input type="submit" />
</form>

<style>
    .error {
        color: red;
        font-weight: bold;
    }
</style>


