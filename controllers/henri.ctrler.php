<?php

class HenriCtrler
{
    public function __construct() {
    }

    public function process($action) {
    	switch($action) {
    		case 'my-work':
    			require_once('views/pages/my-work.php');
    			break;
    	}
    } // end process

}