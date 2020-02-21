<?php
class SearchController extends AppController
{
	public $model;
	public $path;
	public $search;

	public function __construct() 
	{
		$this->model = str_replace('Controller', 'Model', get_class($this));
		$this->path = ROOT . 'app/models/' . $this->model . '.php';
		$this->search = new SearchModel();
	}

	public function index()
	{
		$body = [];
		$data['header'] = $this->render('/layouts/header', null, false);
		$data['title'] = 'MVC - Search';

		if(isset($_POST)) {
			if($_POST['location'] == 'Location?') {
				$_POST['location'] = '';
				$search = $this->search->getData($_POST);
			}
		}
		header('Location: /');
		exit;


		$data['body'] = $this->render('index', $body, false);
		$data['footer'] = $this->render('/layouts/footer', null, false);
		$this->render('/layouts/default', $data, false);
	}
}