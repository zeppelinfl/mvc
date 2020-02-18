<?php
class HomeController extends AppController
{
	public $model;
	public $path;
	public $home;
	public $conn;

	public function __construct() 
	{
		$this->model = str_replace('Controller', 'Model', get_class($this));
		$this->path = ROOT . 'app/models/' . $this->model . '.php';
		$this->conn = $this->connection();
		$this->home = new HomeModel();
	}

	public function index() 
	{	
		$get_users = $this->home->getUsers($this->conn);
		$data['users'] = $get_users;
		$data['data'] = $this->home->showArray(10);
		$this->set_vars($data);
		$this->render('home');
	}

	public function add_user()
	{
		if(!empty($_POST)) {
			$user_data = $_POST;	
			$this->home->addUser($user_data, $this->conn);
		}
		header('Location: /');
	}

	public function delete_user($id)
	{
		if($id != '') {
			$this->home->deleteUser($id, $this->conn);
		}
		header('Location: /');
	}

	public function edit_user($id) 
	{
		if(!empty($_POST)) {
			$this->home->editUser($_POST, $this->conn);	
			header('Location: /');
		}
		$get_user = $this->home->getUsers($this->conn, $id);
		$data['user'] = $get_user[0];
		$this->set_vars($data);
		$this->render('user_edit');
	}
}