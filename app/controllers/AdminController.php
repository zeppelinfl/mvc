<?php
class AdminController extends AppController
{
	public $model;
	public $path;
	public $admin;

	public function __construct() 
	{
		$this->model = str_replace('Controller', 'Model', get_class($this));
		$this->path = ROOT . 'app/models/' . $this->model . '.php';
		$this->admin = new AdminModel();

		include ROOT.'app/models/ContactModel.php';
		include ROOT.'app/models/HomeModel.php';
		include ROOT.'app/models/CountryModel.php';
		include ROOT.'app/models/CityModel.php';
		$this->contact = new ContactModel();
		$this->home = new HomeModel();
		$this->country = new CountryModel();
		$this->city = new CityModel();
		$this->admin();
	}

	public function index()
	{
		$body = [];
		$data['header'] = $this->render('/layouts/admin/header', null, false);
		$data['title'] = 'MVC - Admin';

		$body['contacts'] = $this->contact->listContacts();
		$body['users'] = $this->home->getUsers();

		$data['body'] = $this->render('index', $body, false);
		$data['footer'] = $this->render('/layouts/admin/footer', null, false);
		$this->render('/layouts/admin/default', $data, false);
	}

	public function countries()
	{
		$body = [];
		$data['header'] = $this->render('/layouts/admin/header', null, false);
		$data['title'] = 'MVC - Countries';

		$body['countries'] = $this->country->listCountries();

		$data['body'] = $this->render('countries', $body, false);
		$data['footer'] = $this->render('/layouts/admin/footer', null, false);
		$this->render('/layouts/admin/default', $data, false);
	}

	public function cities()
	{
		$body = [];
		$data['header'] = $this->render('/layouts/admin/header', null, false);
		$data['title'] = 'MVC - Cities';
		
		$body['cities'] = $this->city->listCities();

		$data['body'] = $this->render('cities', $body, false);
		$data['footer'] = $this->render('/layouts/admin/footer', null, false);
		$this->render('/layouts/admin/default', $data, false);
	}

	public function locations()
	{
		$body = [];
		$data['header'] = $this->render('/layouts/admin/header', null, false);
		$data['title'] = 'MVC - Locations';


		$data['body'] = $this->render('locations', $body, false);
		$data['footer'] = $this->render('/layouts/admin/footer', null, false);
		$this->render('/layouts/admin/default', $data, false);
	}

	public function places()
	{
		$body = [];
		$data['header'] = $this->render('/layouts/admin/header', null, false);
		$data['title'] = 'MVC - Places';


		$data['body'] = $this->render('places', $body, false);
		$data['footer'] = $this->render('/layouts/admin/footer', null, false);
		$this->render('/layouts/admin/default', $data, false);
	}

	public function events()
	{
		$body = [];
		$data['header'] = $this->render('/layouts/admin/header', null, false);
		$data['title'] = 'MVC - Events';


		$data['body'] = $this->render('events', $body, false);
		$data['footer'] = $this->render('/layouts/admin/footer', null, false);
		$this->render('/layouts/admin/default', $data, false);
	}

	public function experiences()
	{
		$body = [];
		$data['header'] = $this->render('/layouts/admin/header', null, false);
		$data['title'] = 'MVC - Experiences';


		$data['body'] = $this->render('experiences', $body, false);
		$data['footer'] = $this->render('/layouts/admin/footer', null, false);
		$this->render('/layouts/admin/default', $data, false);
	}
}