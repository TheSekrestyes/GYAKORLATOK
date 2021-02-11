<?php
require_once "config.php";

$sql="SELECT tanar_id,nev FROM tanar";
$stmt=$db->query($sql);
$eredmeny="";
$eredmeny2="";
$Tanar_nev="";
while($row=$stmt->fetch()){
    extract($row);
    $eredmeny.="<option value='{$tanar_id}'>{$nev}</option>";
}

//print_r($_POST);

if(isset($_POST['btn'])){
    $tid=$_POST['tid'];
    $sql="SELECT a.nev as Tanar_nev,b.datum,b.kezdesido,c.nev FROM tanar a,tanitasi_alkalom b,tanitvany c WHERE a.tanar_id=b.tanar_id AND b.tanitvany_id=c.tanitvany_id AND a.tanar_id={$tid};";
    $stmt=$db->query($sql);

    while($row=$stmt->fetch()){
        extract($row);
        $eredmeny2.="<tr><td>{$datum}</td><td>{$kezdesido}</td><td>{$nev}</td></tr>";
    }
}


?>

<form method="post">
    <select name="tid">
        <?=$eredmeny?>

    </select>
    <input type="submit" value="OK" name="btn">
</form>

<h1><?=$Tanar_nev?></h1>
<table>
    <thead>
        <th>Datum</th>
        <th>Idopont</th>
        <th>Nev</th>
    </thead>
    <tbody>
        <?=$eredmeny2?>
    </tbody>
</table>

