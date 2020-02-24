<div class="container admin-contacts">
	<h2>Contacts</h2>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Name</th>
				<th scope="col">Email</th>
				<th scope="col">Created</th>
				<th scope="col">Updated</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($contacts as $contact) { ?>
				<tr>
					<th scope="row"><?php echo $contact['id']; ?></th>
					<td><a href="/contact/view/<?php echo $contact['id']; ?>"><?php echo $contact['name']; ?></a></td>
					<td><?php echo $contact['email']; ?></td>
					<td><?php echo $contact['created']; ?></td>
					<td><?php echo $contact['updated']; ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
<div class="container admin-contacts">
<h2>Users</h2>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Name</th>
				<th scope="col">Surname</th>
				<th scope="col">Email</th>
				<th scope="col">Role</th>
				<th scope="col">Created</th>
				<th scope="col">Updated</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($users as $user) { ?>
				<tr>
					<th scope="row"><?php echo $user['id']; ?></th>
					<td><?php echo $user['name']; ?></td>
					<td><?php echo $user['surname']; ?></td>
					<td><?php echo $user['email']; ?></td>
					<td><?php echo $user['role_name']; ?></td>
					<td><?php echo $user['created']; ?></td>
					<td><?php echo $user['updated']; ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>