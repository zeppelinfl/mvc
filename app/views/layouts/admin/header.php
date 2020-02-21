<link rel="stylesheet" href="<?php echo WEBROOT; ?>css/admin/header.css" >
<div class="container">
	<div class="row row-grey">
		<div class="col-md">
			<i class="fa fa-map-marker">
				<p class="logo-text">triptip Admin</p>
			</i>
		</div>
		<div class="col-md">
			<a href="/"><p>Home</p></a>
		</div>
		<div class="col-md">
			<div class="dropdown">
			  <button class="dropbtn pages-text">Data<i class="fa fa-caret-down hover-border caret-drop"></i></button>
			  <div class="dropdown-content">
			    <a href="/admin/countries">Countries</a>
			    <a href="/admin/cities">Cities</a>
			    <a href="/admin/locations">Locations</a>
			    <a href="/admin/places">Places</a>
			    <a href="/admin/events">Events</a>
			    <a href="/admin/experiences">Experiences</a>
			  </div>
			</div> 
		</div>
		<div class="col-md">
			<a href="/auth/logout"><p>Log out</p></a>
		</div>
	</div>
</div>