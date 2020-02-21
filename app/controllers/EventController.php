<?php
class EventController extends AppController
{
	public $model;
	public $path;
	public $event;

	public function __construct() 
	{
		$this->model = str_replace('Controller', 'Model', get_class($this));
		$this->path = ROOT . 'app/models/' . $this->model . '.php';
		$this->event = new EventModel();
	}

	public function index()
	{
		$body = [];
		$data['header'] = $this->render('/layouts/header', null, false);
		$data['title'] = 'MVC - Events';
		
		$events = $this->event->getAllEvents();
		foreach($events as $key => $event) {
			$event_status = $this->event->formatDateTime($event);
			$events[$key] = $event_status;
		}
		$body['events'] = $events;

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
		$data['title'] = 'MVC - Event';
		
		$event = $this->event->getOneEvent($id);
		$event_status = $this->event->formatDateTime($event);
		$events = $event_status;

		$body['event'] = $events;

		$data['body'] = $this->render('event-view', $body, false);
		$data['footer'] = $this->render('/layouts/footer', null, false);
		$this->render('/layouts/default', $data, false);
	}
}