<link rel="stylesheet" href="<?php echo WEBROOT; ?>css/home.css">
<link rel="stylesheet" href="<?php echo WEBROOT; ?>css/events-page.css">
<div class="content content-events-page">
	<div class="container-fluid top-content" id="events">
		<div class="places-reviews"> 
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