<?php
class HomeModel
{

	public function getUsers($id = '')
	{
		if($id != '') {
			$query = DB::run("SELECT * FROM users WHERE id = :id", [':id' => $id]);
		} else {
			$query = DB::run("SELECT * FROM users ORDER BY `id` DESC");
		}
		//$result = mysqli_query($conn, $query);
		$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
		foreach($rows as $key => $row) {
			if($row['role'] == 0) {
				$rows[$key]['role_name'] = 'User';
			} else {
				$rows[$key]['role_name'] = 'Admin';
			}
		}
		return $rows;
	}

	public function getCities()
	{
		$query = DB::run("SELECT * FROM cities ORDER BY name ASC");
		$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
		$cities = [];
		foreach ($rows as $key => $value) {
			$cities[$value['id']] = $value['name'];
		}
		return $cities;
	}

	public function showArray($num = 5)
	{
		$array = [];
		for($i = 0; $i <= $num; $i++) {
			$n = rand(1,10);
			$array[$i] = [
				'date' => date('Y-m-d H:i:s', strtotime('+ '.$n.' days')),
				'number' => $n
			];
		}
		return $array;
	}

	public function editUser($data)
	{
		DB::run("UPDATE users SET name = :name, surname = :surname, email = :email WHERE id = :id", [':name' => $data['name'], ':surname' => $data['surname'], ':email' => $data['email'], ':id' => $data['id']]);
	}

	public function deleteUser($id)
	{
		if($id != '') {
			if (DB::run("DELETE FROM users WHERE id = :id", [':id' => $id])) {
	               echo "User deleted successfully";
	        } else {
	           echo "Error: " . $sql . "" . mysqli_error($conn);
	        }
		}

	}
}