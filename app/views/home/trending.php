<div class="content" id="places">
	<div class="container-fluid top-content">
		<div class="top-title">Top Trending Places</div>
		<div class="top-title-line"></div>
		<div class="top-text">Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</div>
		<div class="places-reviews slick-carrousel"> 
			<?php foreach($places as $place) { ?>
			<article class="review">
				<a href="/place/view/<?php echo $place['places_id']; ?>">
					<div class="review-image" <?php echo $place['image_show']; ?>>
						<i class="fa fa-heart"></i>
						<div class="review-mark review-score-<?php echo $place['score']; ?>"><?php echo $place['reviews_score']; ?></div>
					</div>
				</a>
				<article class="review-content">
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
				</article>
			</article>
			<?php } ?>
		</div>
	</div>
</div>
<div class="content view-all-events">
	<a href="/place"><span class="red-color">View All Places</span>(<?php echo count($places); ?>)</a>
</div>