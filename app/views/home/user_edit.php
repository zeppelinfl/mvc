<fieldset>
	<legend>Edit User</legend>
	<form method="POST" action="/home/edit_user/<?php echo $user['id']; ?>" class="form">
		<input name="id" type="hidden" value="<?php echo $user['id']; ?>">
		<input name="name" type="text" placeholder="name" value="<?php echo $user['name']; ?>">
		<input name="surname" type="text" placeholder="surname" value="<?php echo $user['surname']; ?>">
		<br>
		<input name="email" type="text" placeholder="email" value="<?php echo $user['email']; ?>">
		<input type="submit">
	</form>
</fieldset>