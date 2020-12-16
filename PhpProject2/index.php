<?php

include "OperationApply.php";

$value = unserialize(INPUT_DATA);

?>

<!DOCTYPE html>
<html>
<head>
    <title>ALI Abdullah</title>

    <link href="style.css" rel="stylesheet">
    
</head>
<body>

    <div>
        <h2 id="titre">Our super table</h2>
    </div>



        <table id="tb1">
          <tr id="tr1">
            <th>Item1</th>
            <th>Item2</th>
            <th>Item1 + Item2</th>
            <th>Paire/impaire</th>
            </tr>
          <tr>
            <td><?php echo $value[0] ?></td>
            <td><?php echo $value[1] ?></td>
            <td><?php \ali\abdullah\OperationApply::SommeNumber($value[0],$value[1]) ?></td>
            <td><?php \ali\abdullah\OperationApply::TesteParite($value[0],$value[1]) ?></td>
          </tr>
          <tr>
            <td><?php echo $value[2] ?></td>
            <td><?php echo $value[3] ?></td>
            <td><?php \ali\abdullah\OperationApply::SommeNumber($value[2],$value[3]) ?></td>
            <td><?php \ali\abdullah\OperationApply::TesteParite($value[2],$value[3]) ?></td>
          </tr>
          <tr>
           <td><?php echo $value[4] ?></td>
           <td><?php echo $value[5] ?></td>
           <td><?php \ali\abdullah\OperationApply::SommeNumber($value[4],$value[5]) ?></td>
           <td><?php \ali\abdullah\OperationApply::TesteParite($value[4],$value[5]) ?></td>
          </tr>
        </table>

</body>
</html>