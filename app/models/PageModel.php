<?php
class PageModel
{
	public function getPage($page = '')
	{
		$rows = '';
		if($page != '') {
			$query = DB::run("SELECT * FROM pages WHERE id = $page");
			$rows = mysqli_fetch_assoc($query);
		}
		return $rows;
	}
}