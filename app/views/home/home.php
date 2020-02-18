<h1>Home Controller</h1>
<h2>Random Date in the future based on a random number!</h2>
<table>
	<tr>
		<td>Date</td>
		<td>Number</td>
	</tr>
<?php
	$i = 0;
 	foreach ($data as $key => $value) { 
	 	$altrow = '';
	 	if($i % 2 != 0) {
	 		$altrow = 'altrow';
	 	} 
	 	$i++;
	 	?>
		<tr class="<?php echo $altrow; ?>">
			<td><?php echo $value['date']; ?></td>
			<td><?php echo $value['number']; ?></td>
		</tr>
<?php } ?>
</table>
<table>
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Surname</td>
		<td>Email</td>
		<td>Password</td>
		<td>Action</td>
	</tr>
<?php
	$i = 0;
 	foreach ($users as $key => $value) { 
	 	$altrow = '';
	 	if($i % 2 != 0) {
	 		$altrow = 'altrow';
	 	} 
	 	$i++;
	 	?>
		<tr class="<?php echo $altrow; ?>">
			<td><?php echo $value['id']; ?></td>
			<td><?php echo $value['name']; ?></td>
			<td><?php echo $value['surname']; ?></td>
			<td><?php echo $value['email']; ?></td>
			<td><?php echo $value['password']; ?></td>
			<td class="actions"><a href="/home/delete_user/<?php echo $value['id']; ?>" class="action_delete">Delete</a>
				<a href="/home/edit_user/<?php echo $value['id']; ?>" class="action_edit">Edit</a></td>
		</tr>
<?php } ?>
</table>
<fieldset>
	<legend>Add User</legend>
	<form method="POST" action="/home/add_user" class="form">
		<input name="name" type="text" placeholder="name">
		<input name="surname" type="text" placeholder="surname">
		<br>
		<input name="password" type="password" placeholder="password">
		<input name="passwrd" type="password" placeholder="confirm password">
		<br>
		<input name="email" type="text" placeholder="email">
		<input type="submit">
	</form>
</fieldset>