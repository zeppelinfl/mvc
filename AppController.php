<?php
class AppController
{
	public $url;
	var $vars = [];
	var $layout = 'default';

	public function __construct()
	{
		$url_parsed = $this->parseUrl();
		$ucfirst = ucfirst($url_parsed[0]);
		if(file_exists(ROOT.'app/models/'.$ucfirst.'Model.php')) {
			require(ROOT.'app/models/'.$ucfirst.'Model.php');
		}	
	}

	/** 
	* AppController.php
	* GET CURRENT URL
	**/
	public function request() 
	{
		$this->url = $_SERVER['REQUEST_URI'];
		return $this->url;
	}

	/** 
	*	AppController.php
	*
	**/
	public function dispatch() 
	{
		$parsed_url = $this->parseUrl();
		$controller = $this->loadController($parsed_url[0]);
		$this->render('/layouts/flash_msg', null, false);
		$this->flash();
		call_user_func_array([$controller, $parsed_url[1]], $parsed_url[2]);

	}

	/** 
	*	AppController.php
	*	Parse and format url to set /controller/action/param1/param2/....
	*	If it's base url then use home controller, index action
	**/
	public function parseUrl() 
	{
		$to_parse = trim($this->request());
		$to_parse = strtok($to_parse, '?');
		if($to_parse == '/') {
			$controller = 'home';
			$action = 'index';
			$params = [];
		} else {
			$url_explode = explode('/', $to_parse);
			$url_explode = array_slice($url_explode, 1);
			$controller = $url_explode[0];
			if(!isset($url_explode[1]) || $url_explode[1] == '') {
				$url_explode[1] = 'index';
			}
			$action = $url_explode[1];
			$params = array_slice($url_explode, 2);	
		}
		return [$controller, $action, $params];
	}

	public function loadController($controller_name) 
	{
		$name = ucfirst($controller_name) . 'Controller';
		$file = ROOT . 'app/controllers/' . $name . '.php';
		require($file);
		$controller = new $name();
		return $controller;
	}

	function set_vars($d)
    {
        $this->vars = array_merge($this->vars, $d);
    }

	function render($filename = '', $data, $return = false, $header = '') 
	{
		if(is_array($data)) {
			extract($data);
		}
		if($filename == '') {
			$filename = $this->parseUrl()[1];
		}
		$file_exists = 0;
		if(file_exists(ROOT . 'app/views/'.$filename.'.php')) {
			$file_exists = 1;
		}
		if(strpos($filename, '/') === false && file_exists(ROOT . 'app/views/' . strtolower(str_replace('Controller', '', get_class($this))) . '/' . $filename . '.php')) {
			$file_exists = 1;
		}
		if(!$return && $file_exists) {
			if(strpos($filename, '/') === false) {
				require(ROOT . 'app/views/' . strtolower(str_replace('Controller', '', get_class($this))) . '/' . $filename . '.php');	
			} else {
				require(ROOT . 'app/views/' . $filename . '.php');	
			}
		}
	}

	public function user()
	{
		$user = false;
		if(isset($_SESSION['loggedin'])) {
			$user = true;
		}
		if(!$user) {
			$this->flash()->message('error', 'You need to login to see this content');
			header('Location: /');
			exit;
		}
	}

	public function admin()
	{	
		$admin = false;
		if(isset($_SESSION['loggedin']) && $_SESSION['role'] == 1) {
			$admin = true;
		}
		if(!$admin) {
			$this->flash()->message('error', 'Permission Denied');
			header('Location: /');
			exit;
		}
	}

	function flash() {
  		return FlashMessages::instance();
	}
}