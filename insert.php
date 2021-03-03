<?php
require_once 'config.php';

$msg="";

if(isset($_POST['mentes'])){
    extract($_POST);
    $sql="INSERT INTO film VALUES(null,'{$filmcim}','{$szarmazas}','{$mufaj}',{$hossz})";
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
    <input type="text" name="filmcim" class="form-control">
    </div>

    <div class="form-group">
    <label for="">Származás:</label>
    <input type="text" name="szarmazas" class="form-control">
    </div>

    <div class="form-group">
    <label for="">Műfaj:</label>
    <input type="text" name="mufaj" class="form-control">
    </div>

    <div class="form-group">
    <label for="">Hossz:</label>
    <input type="number" name="hossz" class="form-control" min="1">
    </div>
    <input type="submit" name="mentes" value="Mentés" class="btn btn-dark">
</form>

<div><?=$msg?></div>