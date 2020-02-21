<div class="container container-login">
	<form method="POST" action="/country/country_edit/<?php echo $country['id']; ?>" class="form">
		<input type="hidden" name="id" value="<?php echo $country['id']; ?>">
		<div class="row">
			<div class="col"><h2 class="login-title">Edit Country</h2></div>
		</div>
		<div class="row">
			<div class="col"><input type="text" name="name" value="<?php echo $country['name']; ?>" placeholder="Name" class="login-input"></div>
		</div>
		<div class="row">
			<div class="col"><input type="submit" value="Edit" class="login-input"></div>
		</div>
	</form>
</div>