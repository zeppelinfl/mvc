<?php
class AuthModel
{
	public function authorise($data)
	{
		$email = $data['email'];
		$password = password_hash($data['password'], PASSWORD_DEFAULT);
		$select = DB::run("SELECT * FROM users WHERE email = :email", [':email' => $email]);
		$rows = mysqli_fetch_all($select, MYSQLI_ASSOC);
		if(password_verify($data['password'], $rows[0]['password'])) {
			session_regenerate_id();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $data['email'];
			$_SESSION['id'] = $rows[0]['id'];
			$_SESSION['role'] = $rows[0]['role'];
			return true;
		} else {
			return false;
		}
		return false;
	}

	public function registerUser($data)
	{
		if(!empty($data['password']) && $data['password'] == $data['passwrd']) {
			$email = $data['email'];
			$select = DB::run("SELECT * FROM users WHERE email = :email", [':email' => $email]);
			$rows = mysqli_fetch_all($select, MYSQLI_ASSOC);

			$exists = 0;
			if(!empty($rows) && $rows[0]['email'] == $data['email']) {
				$exists = 1;
			}
			unset($data['passwrd']);
			$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
			$created = false;
			if(!$exists) {
				$created = true;
				DB::run("INSERT INTO users (name, surname, email, password) VALUES (:name, :surname, :email, :password)", [':name' => $data['name'], ':surname' => $data['surname'], ':email' => $data['email'], ':password' => $data['password']]);
			}
			return $created;
		}
	}
}