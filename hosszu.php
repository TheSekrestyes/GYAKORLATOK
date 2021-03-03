<?php
require_once "config.php";

$sql="SELECT * FROM film ORDER BY hossz DESC LIMIT 10";
$stmt=$db->query($sql);
$eredmeny="";

while($row=$stmt->fetch()){
    extract($row);
    $eredmeny.="<li>{$filmcim} - {$hossz}</li>";
}
?>

<ul>
    <?=$eredmeny?>
</ul>