<?php
class HomeModel
{

	public function getUsers($conn, $id = '')
	{
		if($id != '') {
			$query = "SELECT * FROM users WHERE id = $id";
		} else {
			$query = "SELECT * FROM users ORDER BY `id` DESC";
		}
		$result = mysqli_query($conn, $query);
		$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $rows;
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

	public function addUser($data, $conn)
	{
		if(!empty($data['password']) && $data['password'] == $data['passwrd']) {
			unset($data['passwrd']);
			$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
			$insert = "INSERT INTO users (name, surname, email, password) VALUES ('".$data['name']."', '".$data['surname']."', '".$data['email']."', '".$data['password']."')";
			if (mysqli_query($conn, $insert)) {
	               echo "User created successfully";
	        } else {
	           echo "Error: " . $sql . "" . mysqli_error($conn);
	        }
		}
	}

	public function editUser($data, $conn)
	{
		$edit = "UPDATE users SET name='".$data['name']."', surname='".$data['surname']."', email='".$data['email']."' WHERE id='".$data['id']."'";
		if (mysqli_query($conn, $edit)) {
			echo "User updated successfully";
			} else {
			echo "Error: " . $sql . "" . mysqli_error($conn);
		}
	}

	public function deleteUser($id, $conn)
	{
		if($id != '') {
			$delete = "DELETE FROM users WHERE id = $id";
			if (mysqli_query($conn, $delete)) {
	               echo "User deleted successfully";
	        } else {
	           echo "Error: " . $sql . "" . mysqli_error($conn);
	        }
		}

	}
}