<?php
require_once "config.php";

$sql="SELECT nev,telefon,email,tantargynev FROM tanar INNER JOIN tantargy ON tanar.tantargy_id=tantargy.tantargy_id";
$stmt=$db->query($sql);
$eredmeny="";

while($row=$stmt->fetch()){
    extract($row);
    $eredmeny.="<li>{$nev} - {$telefon} - {$email} - {$tantargynev}</li>";
}

?>

<ol>
    <?=$eredmeny?>
</ol>