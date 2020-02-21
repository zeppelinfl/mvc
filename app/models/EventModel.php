<?php
class EventModel
{
	public function getEvents($limit = 5)
	{
		$query = DB::run("SELECT * FROM events LIMIT $limit");
		$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
		foreach ($rows as $key => $value) {
			$query_two = DB::run("SELECT name FROM types WHERE id = :type_id", [':type_id' => $value['type_id']]);
			$row_type = mysqli_fetch_assoc($query_two);
			$rows[$key]['type'] = $row_type['name'];
		}
		return $rows;
	}

	public function getAllEvents()
	{
		$query = DB::run("SELECT * FROM events");
		$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
		foreach ($rows as $key => $value) {
			$query_two = DB::run("SELECT name FROM types WHERE id = :type_id", [':type_id' => $value['type_id']]);
			$row_type = mysqli_fetch_assoc($query_two);
			$rows[$key]['type'] = $row_type['name'];
		}
		return $rows;
	}

	public function getOneEvent($id)
	{
		$query = DB::run("SELECT * FROM events WHERE id = $id");
		$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
		foreach ($rows as $key => $value) {
			$query_two = DB::run("SELECT name FROM types WHERE id = :type_id", [':type_id' => $value['type_id']]);
			$row_type = mysqli_fetch_assoc($query_two);
			$rows[$key]['type'] = $row_type['name'];
		}
		return $rows[0];
	}

	public function formatDateTime($event)
	{
		$event['image_show'] = 'style="background-image:url('.$event['image'].')"';
		$date_format = explode('/', $event['date_event']);
		$event_date = $date_format[1].'/'.$date_format[2];
		$event_time = date('h:i A', strtotime($event['time_event']));
		$event['date'] = $event_date;
		$event['time'] = $event_time;
		return $event;
	}
}