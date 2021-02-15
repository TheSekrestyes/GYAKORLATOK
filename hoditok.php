<?php
require_once "config.php";

$sql="SELECT az,csucs.nev FROM csucs";
$stmt=$db->query($sql);
$eredmeny="";
$Magyar_nev="";
while($row=$stmt->fetch()){
    extract($row);
    $eredmeny.="<option value='{$az}'>{$nev}</option>";
}



if(isset($_POST['btn'])){
    $tid=$_POST['tid'];
    $sql="SELECT maszo.nev FROM maszo INNER JOIN csucs ON maszo.az=csucs.mazon WHERE mazon!=27 AND csucs.az=$tid ORDER BY edatum DESC LIMIT 1";
    $stmt=$db->query($sql);

    if($stmt->rowCount()==0){
        $Magyar_nev="Nincs magyar maszó";
    }
    else{
        $row=$stmt->fetch();
        extract($row);
        $Magyar_nev="{$nev}";
    }
}
?>

<form method="post">
    <select name="tid">
        <?=$eredmeny?>
    </select>
    <input type="submit" value="OK" name="btn">
</form>

<h1><?=$Magyar_nev?></h1>

