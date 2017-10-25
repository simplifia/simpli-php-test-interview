<?php

class HomeCtrler
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
    	require_once('views/home/default.php');
    }

}