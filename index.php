<?php
    require "config.php";
$data=constant("INPUT_DATA");
    $tab = unserialize($data);
    $cles=array_keys($tab);
?>
<style>
    th, td {
        padding: 15px;
        text-align: left;
    }
    table, td, th {
        border: 1px solid black;
        text-align: left;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th{
        font-family: Segoe UI;
    }
    td{
        font-family: Segoe UI;
        font-size: larger;
    }
</style>
<h1 style="padding-left:20px;font-family: Segoe UI;font-size: 30px;font-weight: 600;">Our super table</h1>
<table style=" width:50%;height: 150px;" >
    <thead style=" background-color:#00b0f0;height: 100%">
        <tr>
            <th>Item1</th>
            <th>Item2</th>
            <th>Item1 + Item2</th>
            <th>Paire/impaire</th>
        </tr>
    </thead>
    <tbody>
<?php
for($i=0;$i< count($cles);$i++)
    {
$p='';
$somme=$tab[$cles[$i]]+$cles[$i];
if($somme % 2 == 1) 
    $p='Impaire';
else $p='Paire';

    echo '<tr><td>'.$cles[$i].'</td><td>'.$tab[$cles[$i]].'</td><td>'.$somme.'</td><td>'.$p.'</td></tr>';
}

?>
</tbody>
</table>
