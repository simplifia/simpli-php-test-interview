<?php
include_once 'controllers/henri.ctrler.php';

class Router{
	private $request;
	private $controller;

	public function __construct($request){
		$this->request = $request;
	}

	public function get($route, $file){
		$uri = trim( $this->request, '/');
		$uri = explode('/', $uri);
		var_dump($uri);
		
		if($uri[0] == trim($route, '/')){
			array_shift($uri);
			$args = $uri;
			// todo: home ctrler
			// $this->henriCtrler->myWorkAction();
		}

		if($uri[0] == 'henri') {
			if(sizeof($uri)==1){
				$action = 'index';
			}else{
				$action = $uri[1];
			}
			$this->controller = new HenriCtrler();
			$this->controller->process($action);
		}

	}


}