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
		DB::run("INSERT INTO contacts (user_id, name, email, subject) VALUES (:user_id, :name, :email, :subject)", [':user_id' => $user_id, ':name' => $data['name'], ':email' => $data['email'], ':subject' => $data['subject']]);
	}

	public function listContacts($limit = 30)
	{
		$query = DB::run("SELECT * FROM contacts ORDER BY created DESC LIMIT :limit", [':limit' => $limit]);
		$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $rows;
	}

	public function getContact($id)
	{
		$query = DB::run("SELECT * FROM contacts WHERE id = :id", [':id' => $id]);
		$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $rows[0];
	}
}