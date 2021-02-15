<?php
require_once 'config.php';

$msg="";

if(isset($_POST['mentes'])){
    extract($_POST);
    $sql="INSERT INTO maszo VALUES(null,'{$nev}','{$ferfi}')";
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
    <input type="text" name="nev" class="form-control">
    </div>

    <div class="form-group">
    <label for="">Neme:</label>
    <input type="number" name="ferfi" class="form-control" min="0" max="1">
    </div>
    <input type="submit" name="mentes" value="OK">
</form>

<div><?=$msg?></div>