<?php

class ErrorCtrler
{
    public function __construct() {
    }

    public function process($action) {
    	switch($action) {
    		case 'index':
    			$this->indexAction();
    			break;
    	}
    } // end process

    private function indexAction() {
    	require_once('views/error/default.php');
    }

}