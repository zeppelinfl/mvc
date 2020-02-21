<?php
class HomeController extends AppController
{
	public $model;
	public $path;
	public $home;

	public function __construct() 
	{
		$this->model = str_replace('Controller', 'Model', get_class($this));
		$this->path = ROOT . 'app/models/' . $this->model . '.php';
		$this->home = new HomeModel();

		//include models
		include ROOT.'app/models/CategoryModel.php';
		include ROOT.'app/models/PlaceModel.php';
		include ROOT.'app/models/PageModel.php';
		include ROOT.'app/models/PeopleModel.php';
		include ROOT.'app/models/EventModel.php';
		//initiate models
		$this->category = new CategoryModel();
		$this->place = new PlaceModel();
		$this->page = new PageModel();
		$this->people = new PeopleModel();
		$this->event = new EventModel();
	}

	public function index() 
	{	
		$data['header'] = $this->render('/layouts/header', null);
		$data['title'] = 'MVC';
		$get_users = $this->home->getUsers();
		$data['users'] = $get_users;
		$body['categories'] = $this->category->getCategories();
		$places = $this->place->getPlaces();
		foreach ($places as $key => $place) {
			$place_status = $this->place->placeStatus($place);
			$places[$key] = $place_status;
		}
		$body['places'] = $places;
		$body['cities'] = $this->home->getCities();
		$body['page'] = $this->page->getPage(1);
		$body['people'] = $this->people->getPeopleReviews();
		$body['experiences'] = $this->place->getExperiences();
		$events = $this->event->getEvents();
		foreach($events as $key => $event) {
			$event_status = $this->event->formatDateTime($event);
			$events[$key] = $event_status;
		}
		$body['events'] = $events;

		$body['src'] = $this->render('search', $body, false);
		$body['cat'] = $this->render('categories', $body, false);
		$body['trending'] = $this->render('trending', $body, false);
		$body['ppl'] = $this->render('people', $body, false);
		$body['exp'] = $this->render('experiences', $body, false);
		$body['eve'] = $this->render('events', $body, false);
		$data['body'] = $this->render('index', $body);
		$data['footer'] = $this->render('/layouts/footer', null);
		$this->render('/layouts/default', $data, false, 'header');
	}

	public function add_user()
	{
		if(!empty($_POST)) {
			$user_data = $_POST;	
			$this->home->addUser($user_data);
		}
		header('Location: /');
	}

	public function delete_user($id)
	{
		if($id != '') {
			$this->home->deleteUser($id);
		}
		header('Location: /');
	}

	public function edit_user($id) 
	{
		if(!empty($_POST)) {
			$this->home->editUser($_POST);	
			header('Location: /');
		}
		$get_user = $this->home->getUsers($id);
		$data['user'] = $get_user[0];
		$this->set_vars($data);
		$this->render('user_edit');
	}
}