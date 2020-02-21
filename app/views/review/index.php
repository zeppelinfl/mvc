<link rel="stylesheet" href="<?php echo WEBROOT; ?>css/home.css">
<link rel="stylesheet" href="<?php echo WEBROOT; ?>css/review-page.css">
<div class="content content-people" id="people">
	<div class="layer-put"></div>
	<h2 class="rev-title">Reviews</h2>
	<div class="container margins-container-people">
		<?php foreach($reviews as $ppl) { ?>
			<div class="row">
				<div class="col-md bordered-col">
					<div class="testimonial-logo"><i class="fa fa-quote-right"></i></div>
					<div class="testimonial-content">" <?php echo $ppl['message']; ?> "</div>
					<picture>
						<img src="<?php echo $ppl['image']; ?>" alt="no-image" class="user-image moved-user">
						<p class="moved-user user-name"><?php echo $ppl['name']; ?></p>
					</picture>
				</div>
			</div>
		<?php } ?>
	</div>
</div>