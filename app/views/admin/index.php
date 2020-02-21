<div class="container admin-contacts">
	<h2>Contacts</h2>
	<div class="row admin-contacts-header-row">
		<div class="col">Id</div>
		<div class="col">Name</div>
		<div class="col">Email</div>
		<div class="col">Created</div>
		<div class="col">Updated</div>
	</div>
	<?php foreach($contacts as $contact) { ?>
		<div class="row admin-contacts-body-row">
			<div class="col col-body"><?php echo $contact['id']; ?></div>
			<div class="col col-body"><?php echo $contact['name']; ?></div>
			<div class="col col-body"><?php echo $contact['email']; ?></div>
			<div class="col col-body"><?php echo $contact['created']; ?></div>
			<div class="col col-body"><?php echo $contact['updated']; ?></div>
		</div>
	<?php } ?>
</div>