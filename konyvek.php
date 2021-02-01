<?php
require_once "config.php";
$strTable="";
$sql="SELECT a.szerzo,a.cim,COUNT(b.az) FROM mu a,peldany b WHERE a.az=b.muaz GROUP BY a.az ORDER BY a.szerzo,a.cim";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    $strTable.="<tr><td>{$row['szerzo']}</td><td>{$row['cim']}</td><td>{$row['COUNT(b.az)']}</td></tr>";
}
?>
<div class="wide">
    <table class="table table-striped table-dark">
        <thead>
            <th>Szerző</th>
            <th>Cím</th>
            <th>Darabszám</th>
        </thead>
        <tbody class="table-light text-secondary">
            <?=$strTable?>
        </tbody>
    </table>
</div>