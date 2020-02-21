<?php
class CountryController extends AppController
{
	public $model;
	public $path;
	public $country;

	public function __construct() 
	{
		$this->model = str_replace('Controller', 'Model', get_class($this));
		$this->path = ROOT . 'app/models/' . $this->model . '.php';
		$this->country = new CountryModel();
	}

	public function country_add()
	{
		$this->admin();
		$body = [];
		$data['header'] = $this->render('/layouts/admin/header', null, false);
		$data['title'] = 'MVC - Country Add';

		if(!empty($_POST)) {
			$this->country->addCountries($_POST);
			$this->flash()->message('notice', 'Country Added');
			header('Location: /admin/countries');
			exit;
		}

		$data['body'] = $this->render('country_add', $body, false);
		$data['footer'] = $this->render('/layouts/admin/footer', null, false);
		$this->render('/layouts/admin/default', $data, false);
	}

	public function country_edit($id)
	{
		$this->admin();
		$body = [];
		$data['header'] = $this->render('/layouts/admin/header', null, false);
		$data['title'] = 'MVC - Country Edit';

		if(!empty($_POST)) {
			$this->country->editCountries($_POST);
			$this->flash()->message('notice', 'Country Edited');
			header('Location: /admin/countries');
			exit;
		}
		$body['country'] = $this->country->getCountry($id);

		$data['body'] = $this->render('country_edit', $body, false);
		$data['footer'] = $this->render('/layouts/admin/footer', null, false);
		$this->render('/layouts/admin/default', $data, false);
	}

	public function country_delete($id)
	{
		$this->admin();
		$body = [];
		$data['header'] = $this->render('/layouts/admin/header', null, false);
		$data['title'] = 'MVC - Country Delete';

		$this->country->deleteCountries($id);
		$this->flash()->message('notice', 'Country Deleted');
		header('Location: /admin/countries');
		exit;

		$data['footer'] = $this->render('/layouts/admin/footer', null, false);
		$this->render('/layouts/admin/default', $data, false);
	}

}