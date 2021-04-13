<?php
require_once "config.php";

$sql="SELECT nev, tipus, ROUND(dij/utas) AS dij FROM hajo ORDER BY nev";
$stmt=$db->query($sql);
$eredmeny="";

while($row=$stmt->fetch()){
    extract($row);
    $eredmeny.="<tr><td>{$nev}</td><td>{$tipus}</td><td>{$dij}</td></tr>";
}
?>

<h1>Az 1 főre jutó napi bérleti díj</h1>
<table class="table table-light">
    <thead class="thead-dark">
        <th>Hajó</th>
        <th>Típus</th>
        <th>Díj/Személy</th>
    </thead>
    <tbody>
        <?=$eredmeny?>
    </tbody>
</table>