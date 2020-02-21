<?php
class CategoryModel
{
	public function getCategories($limit = 6)
	{
		$query = DB::run("SELECT * FROM categories LIMIT :limit", [':limit' => $limit]);
		$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $rows;
		
	}
}