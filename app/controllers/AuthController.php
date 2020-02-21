<?php
class AuthController extends AppController
{
	public $model;
	public $path;
	public $auth;

	public function __construct() 
	{
		$this->model = str_replace('Controller', 'Model', get_class($this));
		$this->path = ROOT . 'app/models/' . $this->model . '.php';
		$this->auth = new AuthModel();
	}

	public function login()
	{
		$body = [];
		$data['header'] = $this->render('/layouts/header', null, false);
		$data['title'] = 'MVC - Login';



		$data['body'] = $this->render('login', $body, false);
		$data['footer'] = $this->render('/layouts/footer', null, false);
		$this->render('/layouts/default', $data, false);
	}

	public function authorise()
	{
		if(!empty($_POST)) {
			$authorise_user = $this->auth->authorise($_POST);
			if($authorise_user) {
				$this->flash()->message('notice', 'You have logged in succesfully');
				header('Location: /');
				exit;
			} else {
				$this->flash()->message('error', 'Email or Password Incorrect');
				header('Location: /auth/login');
				exit;
			}
		} else {
			$this->flash()->message('error', 'Email or Password Incorrect');
			header('Location: /auth/login');
			exit;
		}
	}

	public function logout()
	{
		session_destroy();
		$this->flash()->message('notice', 'You have been logged out');
		header('Location: /');
		exit;
	}

	public function register()
	{
		$body = [];
		$data['header'] = $this->render('/layouts/header', null, false);
		$data['title'] = 'MVC - Register';



		$data['body'] = $this->render('register', $body, false);
		$data['footer'] = $this->render('/layouts/footer', null, false);
		$this->render('/layouts/default', $data, false);
	}

	public function register_user()
	{
		if(!empty($_POST)) {
			$user_data = $_POST;
			$reg = $this->auth->registerUser();
			if($reg) {
				$this->flash()->message('notice', 'User has been created succesfully');
				header('Location: /');
				exit;
			} else {
				$this->flash()->message('error', 'User could not be created. Try again');
				header('Location: /auth/register');
				exit;
			}
		}
		$this->flash()->message('error', 'User could not be created. Try again');
		header('Location: /auth/register');
		exit;
	}
}