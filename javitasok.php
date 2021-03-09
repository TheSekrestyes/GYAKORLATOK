<?php
require_once "config.php";

$sql="SELECT b.nev,c.rendszam,a.datum,a.javido,a.iranyar FROM javitasok a,szerelok b, autosok c WHERE b.szerelo_id=a.szerelo_id AND c.autos_id=a.autos_id ORDER BY a.datum";
$stmt=$db->query($sql);
$eredmeny="";

while($row=$stmt->fetch()){
    extract($row);
    $eredmeny.="<tr><td>{$nev}</td><td>{$rendszam}</td><td>{$datum}</td><td>{$javido}</td><td>{$iranyar}</td></tr>";
}
?>

<table class="table table-light">
    <thead class="thead-dark">
        <th>Név</th>
        <th>Rendszám</th>
        <th>Dátum</th>
        <th>Javítási idő</th>
        <th>Irányár</th>
    </thead>
    <tbody>
        <?=$eredmeny?>
    </tbody>
</table>