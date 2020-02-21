<link rel="stylesheet" href="<?php echo WEBROOT; ?>css/experiences-page.css">
<div class="content experiences-list-page">
	<div class="new-places-container" id="experiences">
		<div class="row white">
			<?php foreach($experiences as $experience) { ?>
				<div class="col-md picture-set" style="background-image: url('<?php echo $experience['image']; ?>')">
					<div class="new-places-title"><?php echo $experience['name']; ?></div>
					<div class="new-places-info">• <?php echo $experience['cities']; ?> Cities • <?php echo $experience['listings']; ?> Listing</div>
					<div class="bordered-left">
		    			<i class="fa fa-plus top-px-9">
		    				<a href="/experience/view/<?php echo $experience['id']; ?>"><p class="logo-text">Explore</p></a>
		    			</i>
				  	</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>