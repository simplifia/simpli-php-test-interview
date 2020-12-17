<?php 
require("config.php");


foreach( unserialize(INPUT_DATA) as $key=>$val ){
    $s = $key+$val;
    $odd = $s & 1 ? 'Impaire' : 'Paire';
    echo "item 1=" .
     intval($key) .
      " | item 2 =".
       $val .
       "| sum =" . $s . " p = ".$odd."<br>"
       ;
}
?>