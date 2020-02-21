<div class="content">
	<div class="container-fluid top-content" id="events">
		<div class="top-title">Discover Events</div>
		<div class="top-title-line pink-color"></div>
		<div class="top-text">Vestibulum volutpat, lacus a ultrices sagittis, mi neque usismod dui, eu pulvinar nunc sapien ornare nisl.</div>
		<div class="places-reviews slick-carrousel"> 
			<?php foreach($events as $key => $event) { ?>
				<article class="review">
					<a href="/event/view/<?php echo $event['id']; ?>">
						<div class="review-image" <?php echo $event['image_show']; ?>>
							<i class="fa fa-heart"></i>
							<div class="review-mark-events"><?php echo $event['date']; ?></div>
						</div>
					</a>
					<article class="review-content">
						<i class="fa fa-history flex-event"><p class="event-time"><?php echo $event['time']; ?></p></i>
						<br>
						<h5><?php echo $event['name']; ?></h2>
						<br>
						<div class="left grey"><?php echo $event['type']; ?></div>
						<div class="right grey top-less"><i class="fa fa-search"><?php echo $event['reviews_count']; ?> Reviews</i></div>
						<hr>
						<div class="review-content-location"><i class="fa fa-map-marker grey"> <?php echo $event['address']; ?></i></div>
					</article>
				</article>
			<?php } ?>
		</div>
	</div>
</div>
<div class="content view-all-events">
	<a href="/event"><span class="red-color">View All Events</span>(<?php echo count($events); ?>)</a>
</div>