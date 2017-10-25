<?php
include_once 'controllers/home.ctrler.php';
include_once 'controllers/error.ctrler.php';
include_once 'controllers/henri.ctrler.php';

class Router{
	private $request;
	private $controller;
	private $action;

	public function __construct($request){
		$this->request = $request;
		$this->action = 'index'; // default action for controllers. Will be change depends on routes
	} // end construtor

	public function get($route, $file){;
		$uri = explode('/', $this->request);
		switch($uri[1]) {
			case '': // index route
				$this->controller = new HomeCtrler();
				break;
			case 'henri': // route goes under /henri/
				$this->controller = new HenriCtrler();
				if (sizeof($uri)>2 && $uri[2] != ''){
					$this->action = $uri[2];
				}
				break;
			default: // otherwise
				$this->controller = new ErrorCtrler();
		}

		$this->controller->process($this->action);

	} // end get

}