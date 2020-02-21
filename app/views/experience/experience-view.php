<link rel="stylesheet" href="<?php echo WEBROOT; ?>css/experiences-page.css">
<div class="content experiences-list-page">
	<div class="new-places-container" id="experiences">
		<div class="row white">
			<div class="col-md picture-set" style="background-image: url('<?php echo $experience['image']; ?>')">
				<div class="new-places-title"><?php echo $experience['name']; ?></div>
				<div class="new-places-info">• <?php echo $experience['cities']; ?> Cities • <?php echo $experience['listings']; ?> Listing</div>
				<div class="bordered-left">
	    			<i class="fa fa-plus top-px-9">
	    				<p class="logo-text">Explore</p>
	    			</i>
			  	</div>
			</div>
		</div>
		<h2>Cities</h2>
		<div class="row">
			<?php foreach ($experience['cities_list'] as $key => $city) { ?>
				<div class="col col-2 experience-page-cities">
					<div>City: <?php echo $city['name']; ?></div>
					<div>Listings: <?php echo $city['listings']; ?></div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>