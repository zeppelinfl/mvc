<?php
class CityController extends AppController
{
	public $model;
	public $path;
	public $city;

	public function __construct() 
	{
		$this->model = str_replace('Controller', 'Model', get_class($this));
		$this->path = ROOT . 'app/models/' . $this->model . '.php';
		$this->city = new CityModel();

		include ROOT.'app/models/CountryModel.php';
		$this->country = new CountryModel();		
	}

	public function city_add()
	{
		$this->admin();
		$body = [];
		$data['header'] = $this->render('/layouts/admin/header', null, false);
		$data['title'] = 'MVC - City Add';

		if(!empty($_POST)) {
			$this->city->addCities($_POST);
			$this->flash()->message('notice', 'City Added');
			header('Location: /admin/cities');
			exit;
		}

		$body['countries'] = $this->country->listCountries();

		$data['body'] = $this->render('city_add', $body, false);
		$data['footer'] = $this->render('/layouts/admin/footer', null, false);
		$this->render('/layouts/admin/default', $data, false);
	}

	public function city_edit($id)
	{
		$this->admin();
		$body = [];
		$data['header'] = $this->render('/layouts/admin/header', null, false);
		$data['title'] = 'MVC - City Edit';

		if(!empty($_POST)) {
			$this->city->editCities($_POST);
			$this->flash()->message('notice', 'Country Edited');
			header('Location: /admin/cities');
			exit;
		}
		$body['city'] = $this->city->getCities($id);
		$body['countries'] = $this->country->listCountries();

		$data['body'] = $this->render('city_edit', $body, false);
		$data['footer'] = $this->render('/layouts/admin/footer', null, false);
		$this->render('/layouts/admin/default', $data, false);
	}

	public function city_delete($id)
	{
		$this->admin();
		$body = [];
		$data['header'] = $this->render('/layouts/admin/header', null, false);
		$data['title'] = 'MVC - City Delete';

		$this->city->deleteCities($id);
		$this->flash()->message('notice', 'City Deleted');
		header('Location: /admin/cities');
		exit;

		$data['footer'] = $this->render('/layouts/admin/footer', null, false);
		$this->render('/layouts/admin/default', $data, false);
	}
}