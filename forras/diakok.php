<?php
require_once "config.php";

$sql="SELECT nev,telefon,email FROM tanitvany ORDER BY nev";
$stmt=$db->query($sql);
$eredmeny="";

while($row=$stmt->fetch()){
    extract($row);
    $eredmeny.="<li>{$nev} - {$telefon} - {$email}</li>";
}

?>

<ol>
    <?=$eredmeny?>
</ol>