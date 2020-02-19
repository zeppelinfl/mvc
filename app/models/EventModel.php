<?php
class EventModel
{
	public function getEvents()
	{
		return [
			0 => ['id' => 1, 'date' => '2020/04/10', 'time' => '18:30', 'name' => 'Music Festival on Wall', 'type' => 'Music', 'address' => '457 Court St, Brooklyn', 'reviews_count' => 23, 'image' => '/img/places/hotel1.jpeg'],
			1 => ['id' => 2, 'date' => '2020/02/08', 'time' => '14:00', 'name' => 'Children World of Adventures Resort', 'type' => 'Parks', 'address' => 'London, United Kingdom', 'reviews_count' => 61, 'image' => '/img/places/hotel5.jpeg'],
			2 => ['id' => 3, 'date' => '2020/02/08', 'time' => '16:00', 'name' => 'Secret Food Tour', 'type' => 'Tours', 'address' => 'Via Mozart 14, Milan', 'reviews_count' => 2, 'image' => '/img/places/hotel2.jpeg'],
			3 => ['id' => 4, 'date' => '2020/02/08', 'time' => '20:00', 'name' => 'The Alternative Selection', 'type' => 'Music', 'address' => 'Cockpit Theatre, London', 'reviews_count' => 11, 'image' => '/img/places/hotel4.jpeg'],
			4 => ['id' => 5, 'date' => '2020/02/08', 'time' => '15:00', 'name' => 'Dresden Day Trip from Berlin', 'type' => 'Tours', 'address' => 'Berlin, Germany', 'reviews_count' => 61, 'image' => '/img/places/hotel3.jpeg'],
		];
	}

	public function formatDateTime($event)
	{
		$event['image_show'] = 'style="background-image:url('.$event['image'].')"';
		$date_format = explode('/', $event['date']);
		$event_date = $date_format[1].'/'.$date_format[2];
		$event_time = date('h:i A', strtotime($event['time']));
		$event['date'] = $event_date;
		$event['time'] = $event_time;
		return $event;
	}
}