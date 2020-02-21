<?php
class PlaceModel
{
	public function getPlaces($limit = 5)
	{
		$query = DB::run("SELECT *, places.id as places_id, places.name, subcategories.name as subcategory_name FROM places JOIN subcategories ON places.subcategory_id = subcategories.id LIMIT $limit");
		$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
		
		return $rows;
	}

	public function getAllPlaces()
	{
		$query = DB::run("SELECT *, places.id as places_id, places.name, subcategories.name as subcategory_name FROM places JOIN subcategories ON places.subcategory_id = subcategories.id");
		$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
		foreach ($rows as $key => $place) {
			$place_status = $this->placeStatus($place);
			$rows[$key] = $place_status;
		}
		return $rows;
	}

	public function getOnePlace($id)
	{
		$query = DB::run("SELECT *, places.id as places_id, places.name, subcategories.name as subcategory_name FROM places JOIN subcategories ON places.subcategory_id = subcategories.id WHERE places.id = :id", [':id' => $id]);
		$row = mysqli_fetch_all($query, MYSQLI_ASSOC);
		$place_status = $this->placeStatus($row[0]);
		$row[0] = $place_status;
		return $row[0];
	}

	public function getExperiences($limit = 4) 
	{
		$query = DB::run("SELECT * FROM experiences LEFT JOIN countries ON experiences.country_id = countries.id LIMIT :limit", [':limit' => $limit]);
		$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
		foreach ($rows as $key => $value) {
			$query = DB::run("SELECT * FROM cities WHERE cities.country_id = :country_id", [':country_id' => $value['country_id']]);
			$records = mysqli_fetch_all($query, MYSQLI_ASSOC);
			$rows[$key]['cities'] = count($records);
			$rows[$key]['listings'] = 0;
			foreach ($records as $city) {
				$rows[$key]['listings'] += $city['listings'];
			}
		}
		return $rows;
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