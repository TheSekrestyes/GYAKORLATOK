<?php
require_once "config.php";

$sql="SELECT csucs.nev,magassag,edatum FROM csucs ORDER BY magassag DESC";
$stmt=$db->query($sql);
$eredmeny="";

while($row=$stmt->fetch()){
    extract($row);
    $eredmeny.="<li>{$nev} - {$magassag} - {$edatum}</li>";
}
?>

<ol>
    <?=$eredmeny?>
</ol>