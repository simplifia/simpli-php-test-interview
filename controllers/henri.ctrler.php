<?php

include_once 'models/numbers.model.php';

class HenriCtrler
{
    public function __construct() {
    }

    public function process($action) {
    	switch($action) {
            case 'index':
                $this->indexAction();
                break;
    		case 'my-work':
    			$this->myWorkAction();
    			break;
    	}
    } // end process

    private function indexAction() {
        require_once('views/henri/default.php');
    }

    private function myWorkAction() {
    	$data = config::input_data(); // get data from constant config file

    	$items = array(); // this array is used in view
    	foreach ($data as $num1 => $num2) {
    		// create a NumbersModel from $num1 and $num2, then add to $items
    		array_push($items, new NumbersModel($num1, $num2));
    	}
    	require_once('views/henri/my-work.php');
    }

}