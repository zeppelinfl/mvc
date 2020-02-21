<?php
class PageModel
{
	public function getPage($id = '')
	{
		$rows = '';
		if($id != '') {
			$query = DB::run("SELECT * FROM pages WHERE id = :id", [':id' => $id]);
			$rows = mysqli_fetch_assoc($query);
		}
		return $rows;
	}
}