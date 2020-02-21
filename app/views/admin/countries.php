<div class="container admin-contacts">
<h2>Countries</h2>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Name</th>
				<th scope="col">Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($countries as $country) { ?>
				<tr>
					<th scope="row"><?php echo $country['id']; ?></th>
					<td><?php echo $country['name']; ?></td>
					<td>
						<a class="action edit-action" href="/country/country_edit/<?php echo $country['id']; ?>">Edit</a>
						<a class="action delete-action" href="/country/country_delete/<?php echo $country['id']; ?>">Delete</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<a class="action add-action" href="/country/country_add">Add</a>
</div>