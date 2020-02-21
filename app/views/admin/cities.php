<div class="container admin-contacts">
<h2>Cities</h2>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Name</th>
				<th scope="col">Country</th>
				<th scope="col">Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($cities as $city) { ?>
				<tr>
					<th scope="row"><?php echo $city['id']; ?></th>
					<td><?php echo $city['name']; ?></td>
					<td><?php echo $city['country_name']; ?></td>
					<td>
						<a class="action edit-action" href="/city/city_edit/<?php echo $city['id']; ?>">Edit</a>
						<a class="action delete-action" href="/city/city_delete/<?php echo $city['id']; ?>">Delete</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<a class="action add-action" href="/city/city_add">Add</a>
</div>