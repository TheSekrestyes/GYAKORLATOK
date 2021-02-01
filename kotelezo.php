<?php
require_once "config.php";
$optStr="";
$lista="";
$sql="SELECT evfolyam FROM diak GROUP BY evfolyam";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    $optStr.="<option value='{$row['evfolyam']}'</option>";
}
if(isset($_POST['kotelezo']) && $_POST['kotelezo']!=0){
    $selectedId=$_POST['kotelezo'];
    $sql="SELECT a.szerzo,a.cim,b.evfolyam FROM mu a,diak b WHERE a.az=b.az AND b.evfolyam={$selectedId}";
    $lista="<li>{$row['szerzo']} - {$row['cim']} - {$row['evfolyam']}</li>";
}
?>


<div class="wide">
    <form method="post">
        <select name="kotelezo" class="custom-select mb-2 text-dark">
            <option value="0">Válassz egy évfolyamot</option>
            <?=$optStr?>
        </select>
    </form>
    <ol id="lista" class="text-dark">
        <?=$lista?>
    </ol>
</div>