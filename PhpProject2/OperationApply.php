<?php
namespace ali\abdullah;


include "config.php";

class OperationApply
{

    public function TesteParite($b1, $b2)
    {
        $tempo = ($b1 + $b2) % 2;
        if($tempo== 0)
        {
            echo "Paire";
        }
        elseif($tempo!=0)
        {
            echo "Impaire";
        }
    }
    
        public function SommeNumber($a1, $a2)
    {
        echo $a1 + $a2;
    }

}