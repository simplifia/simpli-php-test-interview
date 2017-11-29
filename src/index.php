<?php
include "Calcul.php";

$test = unserialize(INPUT_DATA);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Rangheard alexis</title>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1 style="margin-left: 5%">Our super table</h1>


<table class="tableau">
    <tr style="background-color: dodgerblue">
        <th>Item1</th>
        <th>Item2</th>
        <th>Item1 + Item2</th>
        <th>Paire/impaire</th>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
        <td><?php \alex\Calcul::sum($test[0],$test[1]) ?></td>
        <td><?php \alex\Calcul::odd($test[0],$test[1]) ?></td>
    </tr>
    <tr>
        <td>3</td>
        <td>4</td>
        <td><?php \alex\Calcul::sum($test[2],$test[3]) ?></td>
        <td><?php \alex\Calcul::odd($test[2],$test[3]) ?></td>
    </tr>
    <tr>
        <td>10</td>
        <td>12</td>
        <td><?php \alex\Calcul::sum($test[4],$test[5]) ?></td>
        <td><?php \alex\Calcul::odd($test[4],$test[5]) ?></td>
    </tr>
</table>





</body>
</html>