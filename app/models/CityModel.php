<?php
class CityModel
{
	public function listCities()
	{
		$query = DB::run("SELECT cities.id as id, countries.name as country_name, countries.id as country_id, cities.name as name FROM cities LEFT JOIN countries ON countries.id = cities.country_id");
		$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $rows;
	}

	public function addCities($data)
	{
		DB::run("INSERT INTO cities (name, country_id, listings) VALUES (:name, :country_id, ':listings')", [':name' => $data['name'], ':country_id' => $data['country_id'], ':listings' => $data['listings']]);
	}

	public function getCities($id)
	{
		$query = DB::run("SELECT * FROM cities WHERE id = :id", [':id' => $id]);
		$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $rows[0];
	}

	public function editCities($data)
	{
		
		DB::run("UPDATE cities SET name = :name, country_id = :country_id, listings = :listings WHERE id = :id", [':name' => $data['name'], ':id' => $data['id'], ':country_id' => $data['country_id'], ':listings' => $data['listings']]);
	}

	public function deleteCities($id)
	{
		DB::run("DELETE FROM cities WHERE id = :id", [':id' => $id]);
	}
}