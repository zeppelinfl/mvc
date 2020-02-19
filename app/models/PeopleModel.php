<?php
class PeopleModel
{
	public function getPeopleReviews()
	{
		return [
			0 => ['id' => 1, 'name' => 'Michael Osborne', 'image' => '/img/users/no-image.jpeg', 'content' => 'Sed pretium, ligula sollicitudin laoreet viverra, tortor eu nibh, nullam mollis. Ut justo. Suspendisse potenti.'],
			2 => ['id' => 2, 'name' => 'Lara Joy', 'image' => '/img/users/no-image.jpeg', 'content' => 'Ut justo suspendisse potenti. Sed vel lacus mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus.'],
			3 => ['id' => 3, 'name' => 'John Smith', 'image' => '/img/users/no-image.jpeg'
			, 'content' => 'Sed vel lacus mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus, Suspendisse ac urna. Etiam pellentesque mauris ut lectus.']
		];
	}
}