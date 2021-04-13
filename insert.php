<?php
require_once 'config.php';

$msg="";

if(isset($_POST['mentes'])){
    extract($_POST);
    $sql="INSERT INTO hajo VALUES(null,'{$nev}','{$tipus}','{$utas}',{$dij})";
    $stmt=$db->exec($sql);


    if($stmt){
        $msg="Sikeres adatbeiras";
    }
    else $msg="Sikertelen";
}
?>

<form method="post">
    <div class="form-group">
    <label for="">Név:</label>
    <input type="text" name="nev" class="form-control">
    </div>

    <div class="form-group">
    <label for="">Típus:</label>
    <input type="text" name="tipus" class="form-control">
    </div>

    <div class="form-group">
    <label for="">Utasok száma:</label>
    <input type="number" name="utas" class="form-control" min="1">
    </div>

    <div class="form-group">
    <label for="">Bérleti díj:</label>
    <input type="text" name="dij" class="form-control">
    </div>
    <input type="submit" name="mentes" value="Mentés" class="btn btn-dark">
</form>

<div><?=$msg?></div>