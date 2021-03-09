<?php
require_once "config.php";

$sql="SELECT tipus_id,tipusnev FROM tipusok";
$stmt=$db->query($sql);
$eredmeny="";
$eredmeny2="";
$tipus="";
while($row=$stmt->fetch()){
    extract($row);
    $eredmeny.="<option value='{$tipus_id}'>{$tipusnev}</option>";
}



if(isset($_POST['btn'])){
    $tipus_id=$_POST['id'];
    $sql="SELECT a.nev,a.rendszam FROM autosok a,tipusok b WHERE b.tipus_id=a.tipuskod AND tipus_id={$tipus_id}";
    $stmt=$db->query($sql);

    if($stmt->rowCount()==0){
        $tipus="Nincs ilyen";
    }
    else{
        while($row=$stmt->fetch()){
            extract($row);
            
            $eredmeny2.="<li>{$nev} - {$rendszam}</li>";
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

<ol>
    <?=$eredmeny2?>
</ol>