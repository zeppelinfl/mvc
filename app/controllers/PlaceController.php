<?php
class PlaceController extends AppController
{
	public $model;
	public $path;
	public $place;

	public function __construct() 
	{
		$this->model = str_replace('Controller', 'Model', get_class($this));
		$this->path = ROOT . 'app/models/' . $this->model . '.php';
		$this->place = new PlaceModel();
	}

	public function index()
	{
		$body = [];
		$data['header'] = $this->render('/layouts/header', null, false);
		$data['title'] = 'MVC - Places';
		
		$body['places'] = $this->place->getAllPlaces();

		$data['body'] = $this->render('index', $body, false);
		$data['footer'] = $this->render('/layouts/footer', null, false);
		$this->render('/layouts/default', $data, false);
	}

	public function view($id = 0)
	{
		if($id == 0) {
			header('Location: /place');
			exit;
		}
		$body = [];
		$data['header'] = $this->render('/layouts/header', null, false);
		$data['title'] = 'MVC - Place';
		
		$body['place'] = $this->place->getOnePlace($id);

		$data['body'] = $this->render('place-view', $body, false);
		$data['footer'] = $this->render('/layouts/footer', null, false);
		$this->render('/layouts/default', $data, false);
	}
}