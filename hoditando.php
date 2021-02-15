<?php
require_once "config.php";

$sql="SELECT csucs.nev,edatum FROM csucs WHERE mazon=0";
$stmt=$db->query($sql);
$eredmeny="";

while($row=$stmt->fetch()){
    extract($row);
    $eredmeny.="<li>{$nev} - {$edatum}</li>";
}
?>

<ol>
    <?=$eredmeny?>
</ol>