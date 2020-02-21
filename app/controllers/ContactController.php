<?php 
class ContactController extends AppController
{
	public $model;
	public $path;
	public $contact;

	public function __construct() 
	{
		$this->model = str_replace('Controller', 'Model', get_class($this));
		$this->path = ROOT . 'app/models/' . $this->model . '.php';
		$this->contact = new ContactModel();
	}

	public function index()
	{
		$body = [];
		$data['header'] = $this->render('/layouts/header', null, false);
		$data['title'] = 'MVC - Contact Us';



		$data['body'] = $this->render('contact', $body, false);
		$data['footer'] = $this->render('/layouts/footer', null, false);
		$this->render('/layouts/default', $data, false);
	}

	public function send_contact()
	{
		if (!empty($_POST)) {
			$this->contact->addContact($_POST);
		}
		header('Location: /');
		exit;
	}
}