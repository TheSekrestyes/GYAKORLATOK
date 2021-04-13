<?php
require_once "config.php";

$sql="SELECT id, nev FROM hajo ORDER BY nev";
$stmt=$db->query($sql);
$eredmeny="";
$eredmeny2="";
$mozi="";
while($row=$stmt->fetch()){
    extract($row);
    $eredmeny.="<option value='{$id}'>{$nev}</option>";
}

if(isset($_POST['btn'])){
    $hid=$_POST['tid'];
    $sql="SELECT ROUND(((dij/utas)*szemely)*nap) as bevetel FROM hajo a, tura b WHERE a.id=hajo_id AND a.id={$hid}";
    $stmt=$db->query($sql);

    if($stmt->rowCount()==0){
        $mozi="Nincs túra";
    }
    else{
        $row=$stmt->fetch();
        extract($row);
            $eredmeny2="Az összes bevétel a túrából {$bevetel} forint.";
    }
    
}
?>

<h1>Összes Bevétel</h1>

<form method="post">
    <select name="tid"  class="custom-select custom-select-mb">
        <?=$eredmeny?>
    </select>
    <input type="submit" value="OK" name="btn" class="btn btn-dark mt-2">
</form>
    <div class="mt-2">
        <?=$eredmeny2?> 
    </div>