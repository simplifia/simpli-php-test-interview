<?php
include_once 'controllers/home.ctrler.php';
include_once 'controllers/henri.ctrler.php';

class Router{
	private $request;
	private $controller;
	private $action;

	public function __construct($request){
		$this->request = $request;
		$this->action = 'index'; // default action for controllers. Will be change depends on routes
	} // end construtor

	public function get($route, $file){
		$uri = trim( $this->request, '/');
		$uri = explode('/', $uri);
		// index route
		if($uri[0] == trim($route, '/')){
			array_shift($uri);
			$args = $uri;
			$this->controller = new HomeCtrler();
		} else {
			// routes that goes under 'mydomain'
			if($uri[0] == 'henri') {
				$this->controller = new HenriCtrler();
				if(sizeof($uri)>1){
					$this->action = $uri[1];
				}
			}	
		}

		$this->controller->process($this->action);

	} // end get

}