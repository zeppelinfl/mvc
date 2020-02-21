<div class="container container-login">
	<form method="POST" action="/city/city_edit/<?php echo $city['id']; ?>" class="form">
		<input type="hidden" value="<?php echo $city['id']; ?>" name="id">
		<div class="row">
			<div class="col"><h2 class="login-title">Edit City</h2></div>
		</div>
		<div class="row">
			<div class="col">
				<label>Name: </label>
				<input type="text" name="name" placeholder="Name" value="<?php echo $city['name']; ?>" class="login-input">
			</div>
		</div>
		<div class="row">
			<div class="col">
				<label>Listings: </label>
				<input type="text" name="listings" value="<?php echo $city['listings']; ?>" class="login-input">
			</div>
		</div>
		<div class="row">
			<div class="col">
				<label>Country: </label>
				<select name="country_id">
					<option value="0">None</option>
					<?php foreach ($countries as $country) {
					$selected = '';
					if($country['id'] == $city['country_id']) {
						$selected = 'selected';
					}
					?>
						<option <?php echo $selected; ?> value="<?php echo $country['id']; ?>"><?php echo $country['name']; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col"><input type="submit" value="Edit" class="login-input"></div>
		</div>
	</form>
</div>