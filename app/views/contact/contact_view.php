<div class="container container-login">
	<div class="row">
		<div class="col"><h2 class="login-title">Contact View</h2></div>
	</div>
	<div class="row">
		<div class="col">
			<label>Name: </label>
			<div><?php echo $contact['name']; ?></div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<label>Email: </label>
			<div><?php echo $contact['email']; ?></div>
		</div>
	</div>
	<div class="row">
		<div class="col contact-msg-bold">
			<label>Message: </label>
			<div><?php echo $contact['subject']; ?></div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<label>Created: </label>
			<div><?php echo $contact['created']; ?></div>
		</div>
	</div>
</div>