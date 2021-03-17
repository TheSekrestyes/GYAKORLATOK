<?php
require_once "config.php";

$sql="SELECT nev,tipus,nem FROM versenyszam ORDER BY nev,tipus";
$stmt=$db->query($sql);
$eredmeny="";

while($row=$stmt->fetch()){
    extract($row);
    $eredmeny.="<tr><td>{$nev}</td><td>{$tipus}</td><td>{$nem}</td></tr>";
}
?>

<table class="table table-light">
    <thead class="thead-dark">
        <th>Név</th>
        <th>Típus</th>
        <th>Nem</th>
    </thead>
    <tbody>
        <?=$eredmeny?>
    </tbody>
</table>