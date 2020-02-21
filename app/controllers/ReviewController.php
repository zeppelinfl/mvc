<?php
class ReviewController extends AppController
{
	public $model;
	public $path;
	public $review;

	public function __construct() 
	{
		$this->model = str_replace('Controller', 'Model', get_class($this));
		$this->path = ROOT . 'app/models/' . $this->model . '.php';
		$this->review = new ReviewModel();
	}

	public function index()
	{
		$body = [];
		$data['header'] = $this->render('/layouts/header', null, false);
		$data['title'] = 'MVC - Reviews';
		
		$body['reviews'] = $this->review->getAllReviews();

		$data['body'] = $this->render('index', $body, false);
		$data['footer'] = $this->render('/layouts/footer', null, false);
		$this->render('/layouts/default', $data, false);
	}
}