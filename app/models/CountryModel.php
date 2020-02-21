<?php
class CountryModel
{
	public function listCountries()
	{
		$query = DB::run("SELECT * FROM countries");
		$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $rows;
	}

	public function addCountries($data)
	{
		DB::run("INSERT INTO countries (name) VALUES (:name)", [':name' => $data['name']]);
	}

	public function getCountry($id)
	{
		$query = DB::run("SELECT * FROM countries WHERE id = :id", [':id' => $id]);
		$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $rows[0];
	}

	public function editCountries($data)
	{
		DB::run("UPDATE countries SET name = :name WHERE id = :id", [':name' => $data['name'], ':id' => $data['id']]);
	}

	public function deleteCountries($id)
	{
		DB::run("DELETE FROM countries WHERE id = :id", [':id' => $id]);
	}

}