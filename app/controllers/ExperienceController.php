<?php
class ExperienceController extends AppController
{
	public $model;
	public $path;
	public $experience;

	public function __construct() 
	{
		$this->model = str_replace('Controller', 'Model', get_class($this));
		$this->path = ROOT . 'app/models/' . $this->model . '.php';
		$this->experience = new ExperienceModel();
	}

	public function index()
	{
		$body = [];
		$data['header'] = $this->render('/layouts/header', null, false);
		$data['title'] = 'MVC - Experiences';
		
		$body['experiences'] = $this->experience->getAllExperiences();

		$data['body'] = $this->render('index', $body, false);
		$data['footer'] = $this->render('/layouts/footer', null, false);
		$this->render('/layouts/default', $data, false);
	}

	public function view($id = 0)
	{
		if($id == 0) {
			header('Location: /experience');
			exit;
		}
		$body = [];
		$data['header'] = $this->render('/layouts/header', null, false);
		$data['title'] = 'MVC - Experience';
		
		$body['experience'] = $this->experience->getOneExperience($id);

		$data['body'] = $this->render('experience-view', $body, false);
		$data['footer'] = $this->render('/layouts/footer', null, false);
		$this->render('/layouts/default', $data, false);
	}
}