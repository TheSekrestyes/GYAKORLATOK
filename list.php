<?php
require_once "config.php";

$sql="SELECT mid,mozinev FROM mozi";
$stmt=$db->query($sql);
$eredmeny="";
$eredmeny2="";
$mozi="";
while($row=$stmt->fetch()){
    extract($row);
    $eredmeny.="<option value='{$mid}'>{$mozinev}</option>";
}



if(isset($_POST['btn'])){
    $mid=$_POST['tid'];
    $sql="SELECT filmcim, szarmazas, mufaj FROM film a,hely b,mozi c WHERE a.fid=b.fid AND b.mid=c.mid AND mid={$mid}";
    $stmt=$db->query($sql);

    if($stmt->rowCount()==0){
        $mozi="Nincs film";
    }
    else{
        while($row=$stmt->fetch()){
            extract($row);
            $mozi="{$mozinev}";
            $eredmeny2.="<li>{$filmcim} - {$szarmazas} - {$mufaj}</li>";
        }
    }
    
}
?>

<form method="post">
    <select name="tid">
        <?=$eredmeny?>
    </select>
    <input type="submit" value="OK" name="btn">
</form>

<h1><?=$mozi?></h1>

<ol>
    <?=$eredmeny2?>
</ol>