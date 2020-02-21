<div class="container container-login">
	<form method="POST" action="/city/city_add" class="form">
		<div class="row">
			<div class="col"><h2 class="login-title">Add City</h2></div>
		</div>
		<div class="row">
			<div class="col">
				<label>Name: </label>
				<input type="text" name="name" placeholder="Name" class="login-input">
			</div>
		</div>
		<div class="row">
			<div class="col">
				<label>Listings: </label>
				<input type="text" name="listings" value="0" class="login-input">
			</div>
		</div>
		<div class="row">
			<div class="col">
				<label>Country: </label>
				<select name="country_id">
					<option value="0">None</option>
					<?php foreach ($countries as $country) { ?>
						<option value="<?php echo $country['id']; ?>"><?php echo $country['name']; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col"><input type="submit" value="Add" class="login-input"></div>
		</div>
	</form>
</div>