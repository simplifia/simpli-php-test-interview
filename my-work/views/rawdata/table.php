<?php

/** @var RawdataModel[] $rawsData */

?>
<h1>Our Super Table</h1>

<table>
    <thead>
        <tr>
            <td>Item1</td>
            <td>Item2</td>
            <td>Item1 + Item2</td>
            <td>Paire/Impaire</td>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($rawsData as $raw) {
            echo '<tr>';
            echo '<td>' . $raw->i1 . '</td>';
            echo '<td>' . $raw->i2 . '</td>';
            echo '<td>' . $raw->sum . '</td>';
            echo '<td>' . $raw->desc . '</td>';
            echo '</tr>';
        }
        ?>

    </tbody>
</table>