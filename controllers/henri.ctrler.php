<?php

class HenriCtrler
{
    public function __construct() {
    }

    public function process($action) {
    	switch($action) {
    		case 'my-work':
    			$this->myWorkAction();
    			break;
    	}
    } // end process

    private function myWorkAction() {
    	$data = config::input_data();
    	require_once('views/pages/my-work.php');
    }

}