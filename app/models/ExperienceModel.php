<?php
class ExperienceModel
{
	public function getAllExperiences()
	{
		$query = DB::run("SELECT * FROM experiences LEFT JOIN countries ON experiences.country_id = countries.id");
		$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
		foreach ($rows as $key => $value) {
			$query = DB::run("SELECT * FROM cities WHERE cities.country_id = ".$value['country_id']);
			$records = mysqli_fetch_all($query, MYSQLI_ASSOC);
			$rows[$key]['cities'] = count($records);
			$rows[$key]['listings'] = 0;
			foreach ($records as $city) {
				$rows[$key]['listings'] += $city['listings'];
			}
		}
		return $rows;
	}

	public function getOneExperience($id)
	{
		$query = DB::run("SELECT * FROM experiences LEFT JOIN countries ON experiences.country_id = countries.id WHERE experiences.id = $id");
		$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
		foreach ($rows as $key => $value) {
			$query = DB::run("SELECT * FROM cities WHERE cities.country_id = ".$value['country_id']);
			$records = mysqli_fetch_all($query, MYSQLI_ASSOC);
			$rows[$key]['cities'] = count($records);
			$rows[$key]['listings'] = 0;
			foreach ($records as $city) {
				$rows[$key]['listings'] += $city['listings'];
			}
		}
		$query_cities = DB::run("SELECT * FROM cities WHERE country_id = ".$rows[0]['country_id']);
		$cities = mysqli_fetch_all($query_cities, MYSQLI_ASSOC);
		$rows[0]['cities_list'] = $cities;
		return $rows[0];	
	}
}