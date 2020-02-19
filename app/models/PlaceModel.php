<?php
class PlaceModel
{
	public function getPlaces()
	{
		return [
			0 => ['id' => 1, 'subcategory_name' => 'Restaurant', 'name' => 'Fifteen Restaurant & Cheese Bar','image' => '/img/places/hotel1.jpeg', 'open' => '08:00', 'close' => '20:00', 'reviews_count' => '54' , 'address' => '1149 3rd St, Santa Monica', 'reviews_score' => '9.3'],
			2 => ['id' => 1, 'subcategory_name' => 'Cafe', 'name' => 'Frankies 457 Spuntino','image' => '/img/places/hotel2.jpeg', 'open' => '08:00', 'close' => '20:00', 'reviews_count' => '54' , 'address' => '457 Court St, Brooklyn', 'reviews_score' => '9.0'],
			3 => ['id' => 1, 'subcategory_name' => 'Hostel', 'name' => 'Hotel Van Gogh','image' => '/img/places/hotel3.jpeg', 'open' => '08:00', 'close' => '20:00', 'reviews_count' => '54' , 'address' => 'Van de Veldestraat 5, Amsterdam', 'reviews_score' => '8.5'],
			4 => ['id' => 1, 'subcategory_name' => 'Cafe', 'name' => 'Caffe Pasucci','image' => '/img/places/hotel4.jpeg', 'open' => '08:00', 'close' => '20:00', 'reviews_count' => '54' , 'address' => 'Piazza della Repubblica, Florence', 'reviews_score' => '9.1'],
			5 => ['id' => 1, 'subcategory_name' => 'Hotel', 'name' => 'Beautiful City Hoster & Hotel','image' => '/img/places/hotel5.jpeg', 'open' => '08:00', 'close' => '20:00', 'reviews_count' => '54' , 'address' => '12 rue de latlas, Paris', 'reviews_score' => '6.2']
		];
	}

	public function getExperiences() 
	{
		return [
			0 => ['id' => 1, 'country_name' => 'Malaysia', 'cities_count' => 5, 'listing_count' => 255, 'image' => '/img/places/hotel2.jpeg'],
			1 => ['id' => 2, 'country_name' => 'Italy', 'cities_count' => 8, 'listing_count' => 749, 'image' => '/img/places/hotel3.jpeg'],
			2 => ['id' => 3, 'country_name' => 'France', 'cities_count' => 12, 'listing_count' => 1003, 'image' => '/img/places/hotel4.jpeg'],
			3 => ['id' => 4, 'country_name' => 'United States', 'cities_count' => 4, 'listing_count' => 603, 'image' => '/img/places/hotel5.jpeg'],
		];
	}

	public function placeStatus($place)
	{
		$place['score'] = $place['reviews_score'][0];
		$place['image_show'] = 'style="background-image:url('.$place['image'].')"';
		$current = date('H:i');
		$data = [
			'status' => '',
			'status_class' => 'green-color',
			'time' => 'Status unavailable',
		];
		if($place['open'] == '00:00' && $place['close'] == '00:00') {
			$data = [
				'status' => 'Open',
				'status_class' => 'green-color',
				'time' => '24/7'
			];
		} elseif ($current >= '10:00' && $current <= '20:00' && $place['open'] == '' && 
			$place['close'] == '') {
			$data = [
					'status' => 'Likely open',
					'status_class' => 'green-color',
					'time' => ''
				];
		} elseif ($current <= '10:00' && $current >= '20:00' && $place['opne'] == '' && 
			$place['close'] == '') {

		} else {
			if($current >= $place['open'] && $current <= $place['close']) {
				$data = [
					'status' => 'Open',
					'status_class' => 'green-color',
					'time' => 'untill '.$place['close']
				];
			}
			if($current <= $place['open'] || $current >= $place['close']) {
				$data = [
					'status' => 'Closed',
					'status_class' => 'red-color',
					'time' => 'untill '.$place['open']
				];
			}
		}
		$data = array_merge($place, $data);
		return $data;
	}
}