<?php
class ContactModel
{
	public function addContact($data)
	{
		$user_id = 0;
		if(isset($_SESSION['loggedin'])) {
			if($_SESSION['name'] == $data['email']) {
				$user_id = $_SESSION['id'];
			}
		}
		DB::run("INSERT INTO contacts (user_id, name, email, subject) VALUES ('".$user_id."', '".$data['name']."', '".$data['email']."', '".$data['subject']."')");
	}

	public function listContacts($limit = 30)
	{
		$query = DB::run("SELECT * FROM contacts ORDER BY created DESC LIMIT $limit");
		$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $rows;
	}
}