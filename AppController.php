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

	/** AppController.php
	* GET CURRENT URL
	**/
	public function request() 
	{
		$this->url = $_SERVER['REQUEST_URI'];
		return $this->url;
	}

	/** AppController.php
	*	
	*
	**/
	public function dispatch($conn) 
	{
		$parsed_url = $this->parseUrl();
		$controller = $this->loadController($parsed_url[0]);

		call_user_func_array([$controller, $parsed_url[1]], $parsed_url[2]);

	}

	/** AppController.php
	*	Parse and format url to set /controller/action/param1/param2/....
	*	If it's base url then use home controller, index action
	**/
	public function parseUrl() 
	{
		$to_parse = trim($this->request());
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

	function render($filename) 
	{
		extract($this->vars);
		ob_start();
		require(ROOT . 'app/views/' . strtolower(str_replace('Controller', '', get_class($this))) . '/' . $filename . '.php');

		$header = ob_get_clean();
		$content_for_layout = ob_get_clean();
		$footer = ob_get_clean();

		if($this->layout == false) {
			$content_for_layout;
		} else {
			require(ROOT . 'app/views/layouts/header.php');
			require(ROOT . 'app/views/layouts/' . $this->layout . '.php');
			require(ROOT . 'app/views/layouts/footer.php');
		}
	}

	public function connection() 
	{
		$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
		return $conn;
	}
}