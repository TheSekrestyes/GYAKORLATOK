<?php
require_once "config.php";

$sql="SELECT a.nev, SUM(b.javido) as ido FROM szerelok a, javitasok b WHERE a.szerelo_id=b.szerelo_id GROUP BY a.szerelo_id ORDER BY ido DESC";
$stmt=$db->query($sql);
$eredmeny="";

while($row=$stmt->fetch()){
    extract($row);
    $eredmeny.="<li>{$nev} - {$ido}</li>";
}
?>

<ul>
    <?=$eredmeny?>
</ul>