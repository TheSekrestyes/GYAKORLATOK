<?php
require_once 'config.php';

$msg="";

if(isset($_POST['mentes'])){
    extract($_POST);
    $sql="INSERT INTO tipusok VALUES (null,'{$tipusnev}')";
    $stmt=$db->exec($sql);


    if($stmt){
        $msg="Sikeres adatbeiras";
    }
    else $msg="Sikerteln";
}
?>

<form method="post">
    <div class="form-group">
    <label for="">Cím:</label>
    <input type="text" name="tipusnev" class="form-control w-50">
    </div>

    <input type="submit" name="mentes" value="Mentés" class="btn btn-dark">
</form>