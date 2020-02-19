<?php
class CategoryModel
{
	public function getCategories()
	{
		return [
			0 => ['id' => 1, 'name' => 'Sport', 'loc_num' => '5', 'awesome_sign' => 'fa-minus'],
			1 => ['id' => 2, 'name' => 'Hotel', 'loc_num' => '16', 'awesome_sign' => 'fa-hotel'],
			2 => ['id' => 3, 'name' => 'Restaurant', 'loc_num' => '25', 'awesome_sign' => 'fa-plus'],
			3 => ['id' => 4, 'name' => 'Shopping', 'loc_num' => '12', 'awesome_sign' => 'fa-shopping-cart'],
			4 => ['id' => 5, 'name' => 'Art & Culture', 'loc_num' => '17', 'awesome_sign' => 'fa-ticket'],
			5 => ['id' => 6, 'name' => 'Nightlife', 'loc_num' => '8', 'awesome_sign' => 'fa-glass'],
		];
	}
}