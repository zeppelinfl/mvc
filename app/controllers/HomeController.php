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
		include ROOT.'app/models/CategoryModel.php';
		include ROOT.'app/models/PlaceModel.php';
		include ROOT.'app/models/PageModel.php';
		include ROOT.'app/models/PeopleModel.php';
		include ROOT.'app/models/EventModel.php';
		$this->category = new CategoryModel();
		$this->place = new PlaceModel();
		$this->page = new PageModel();
		$this->people = new PeopleModel();
		$this->event = new EventModel();
	}

	public function index() 
	{	
		$get_users = $this->home->getUsers($this->conn);
		$data['users'] = $get_users;
		$data['categories'] = $this->category->getCategories();
		$places = $this->place->getPlaces();
		foreach ($places as $key => $place) {
			$place_status = $this->place->placeStatus($place);
			$places[$key] = $place_status;
		}
		$data['places'] = $places;
		$data['page'] = $this->page->getPage();
		$data['people'] = $this->people->getPeopleReviews();
		$data['experiences'] = $this->place->getExperiences();

		$events = $this->event->getEvents();
		foreach($events as $key => $event) {
			$event_status = $this->event->formatDateTime($event);
			$events[$key] = $event_status;
		}
		$data['events'] = $events;
		$this->set_vars($data);
		$this->render('', $data);
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