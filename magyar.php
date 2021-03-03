<?php
require_once "config.php";

$sql="SELECT filmcim, hossz FROM film WHERE szarmazas='magyar' ORDER BY filmcim";
$stmt=$db->query($sql);
$eredmeny="";

while($row=$stmt->fetch()){
    extract($row);
    $eredmeny.="<tr><td>{$filmcim}</td><td>{$hossz}</td></tr>";
}
?>

<table class="table table-light">
    <thead class="thead-dark">
        <th>Film cím</th>
        <th>Hossz</th>
    </thead>
    <tbody>
        <?=$eredmeny?>
    </tbody>
</table>