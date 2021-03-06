<link rel="stylesheet" href="<?php echo WEBROOT; ?>css/home.css">
<link rel="stylesheet" href="<?php echo WEBROOT; ?>css/places-page.css">
<div class="container container-places-single">
	<div class="row row-places-single">
		<div class="col col-6">
			<div class="review-image" <?php echo $place['image_show']; ?>>
				<i class="fa fa-heart"></i>
				<div class="review-mark review-score-<?php echo $place['score']; ?>"><?php echo $place['reviews_score']; ?></div>
			</div>
		</div>
		<div class="col col-5 col-places-single">
			<?php if($place['status'] != '') { ?>
						<i class="fa fa-history flex"><p class="<?php echo $place['status_class']; ?>"><?php echo $place['status']; ?></p> <?php echo $place['time']; ?></i>
			<?php } ?>
			<br>
			<h5><?php echo $place['name']; ?></h2>
			<br>
			<div class="left grey"><?php echo $place['subcategory_name']; ?> $$</div>
			<div class="right grey top-less"><i class="fa fa-search"><?php echo $place['reviews_count']; ?> Reviews</i></div>
			<hr>
			<div class="review-content-location"><i class="fa fa-map-marker grey"> <?php echo $place['address']; ?></i></div>
		</div>
	</div>
</div>