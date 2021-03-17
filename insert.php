<?php
require_once 'config.php';

$msg="";

if(isset($_POST['mentes'])){
    extract($_POST);
    $sql="INSERT INTO versenyszam VALUES (null,'{$nev}','{$tipus}','{$nem}')";
    $stmt=$db->exec($sql);


    if($stmt){
        $msg="Sikeres adatbeiras";
    }
    else $msg="Sikerteln";
}
?>

<form method="post">
    <div class="form-group">
    <label for="">Név:</label>
    <input type="text" name="nev" class="form-control w-50">
    </div>
    <div class="form-group">
    <label for="">Típus:</label>
    <input type="text" name="tipus" class="form-control w-50">
    </div>
    <div class="form-group">
    <label for="">Nem:</label>
    <input type="text" name="nem" class="form-control w-50">
    </div>

    <input type="submit" name="mentes" value="Mentés" class="btn btn-dark">
</form>