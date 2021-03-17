<?php
require_once "config.php";

$sql="SELECT az,nev FROM versenyzo ORDER BY nev";
$stmt=$db->query($sql);
$eredmeny="";
$eredmeny2="";
$tipus="";
while($row=$stmt->fetch()){
    extract($row);
    $eredmeny.="<option value='{$az}'>{$nev}</option>";
}



if(isset($_POST['btn'])){
    $id=$_POST['id'];
    $sql="SELECT a.nev,b.ev FROM versenyszam a,eredmeny b,versenyzo c WHERE a.az=b.versenyszamaz AND c.az=b.versenyzoaz AND helyezes<4 AND c.az=$id";
    $stmt=$db->query($sql);

    if($stmt->rowCount()==0){
        $tipus="Nincs ilyen";
    }
    else{
        while($row=$stmt->fetch()){
            extract($row);
            $eredmeny2.="<li>{$nev} - {$ev}</li>";
        }
    }
    
}
?>

<form method="post">
    <div class="form-group">
        <select name="id" class="custom-select mt-3 w-25">
            <?=$eredmeny?>
        </select>
    </div>
    <input type="submit" value="OK" name="btn" class="btn btn-dark">
</form>

<ul>
    <?=$eredmeny2?>
</ul>