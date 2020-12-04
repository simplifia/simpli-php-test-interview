<?php
require "config.php";
$data=constant("INPUT_DATA");
$tab = unserialize($data);
$cles=array_keys($tab);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 style="padding-left:20px;font-family: Segoe UI;font-size: 30px;font-weight: 600;">Our super table</h1>
<table class="center">
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

</body>
</html>
