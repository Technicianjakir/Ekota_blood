<?php 
require_once('admin/conn.php');
$dis_id = $_POST['dis_id'];
$upozilas = mysqli_query($conn,"SELECT * FROM `upazilas` WHERE `district_id` = '$dis_id'");

while($upozila = mysqli_fetch_assoc($upozilas)){ ?>
    
    <option value="<?= $upozila['name']; ?>"><?= $upozila['name']; ?></option>

<?php } ?>