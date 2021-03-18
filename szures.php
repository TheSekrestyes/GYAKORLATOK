<?php
require_once "config.php";

$sql="SELECT orszag FROM eredmeny";
$stmt=$db->query($sql);
$eredmeny="";
$eredmeny2="";
$tipus="";
while($row=$stmt->fetch()){
    extract($row);
    $eredmeny.="<option value='{$orszag}'>{$orszag}</option>";
}



if(isset($_POST['btn'])){
    $id=$_POST['id'];
    $sql="SELECT a.nev,b.ev FROM versenyzo a, eredmeny b WHERE a.az=b.versenyzoaz AND b.orszag='{$id}' ORDER BY b.ev";
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
