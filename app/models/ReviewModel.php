<?php
class ReviewModel
{
	public function getAllReviews()
	{
		$query = DB::run("SELECT * FROM reviews LEFT JOIN users ON reviews.user_id = users.id");
		$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
		foreach ($rows as $key => $value) {
			if($value['image'] == '' || !file_exists(WEBROOT.'img/users/'.$value['user_id'].'/'.$value['image'])) {
				$rows[$key]['image'] = '/img/users/no-image.jpeg';
			} else {
				$rows[$key]['image'] = '/img/users/'.$value['user_id'].'/'.$value['image'];
			}
			$rows[$key]['name'] = $value['name'] . ' ' . $value['surname'];
		}
		return $rows;
	}
}