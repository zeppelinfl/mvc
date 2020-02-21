<div class="content content-join">
	<div class="container margins-container">
		<div class="row">
		    <div class="col-md">
		      <div class="join-title"><?php echo $page['title']; ?></div>
			  <div class="join-content-line"></div>
			  <div class="join-content"><?php echo $page['content']; ?></div>
		    </div>
		    <div class="col-md">
		      <div class="bordered-reg">
    			<i class="fa fa-plus top-px">
    				<a href="/auth/register"><p class="logo-text">Register Now</p></a>
    			</i>
			  </div>
		    </div>
		  </div>
	</div>
</div>
<div class="content content-people" id="people">
	<div class="layer-put"></div>
	<div class="container margins-container-people">
		<div class="row">
			<div class="col-md text-left margin-top-40">
				<div class="people-title">People Talking About Us</div>
				<div class="join-people-line"></div>
				<div class="people-content grey-color">Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</div>
			</div>
		</div>
		<div class="row">
			<?php foreach($people as $ppl) { ?>
				<div class="col-md bordered-col">
					<div class="testimonial-logo"><i class="fa fa-quote-right"></i></div>
					<div class="testimonial-content">" <?php echo $ppl['message']; ?> "</div>
					<picture>
						<img src="<?php echo $ppl['image']; ?>" alt="no-image" class="user-image moved-user">
						<p class="moved-user user-name"><?php echo $ppl['name']; ?></p>
					</picture>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<div class="content info-content">
	<div class="container">
		<div class="row">
			<div class="col-md margin-top-40 margin-bottom-40">
				<i class="fa fa-search info-sizes red-color"> <span class="white">100+</span></i>
				<div class="info-text-format grey-color">New Places Every Day</div>
			</div>
			<div class="col-md margin-top-40 margin-bottom-40">
				<i class="fa fa-search info-sizes red-color"> <span class="white">9,500+</span></i>
				<div class="info-text-format grey-color">Happy Customers</div>
			</div>
			<div class="col-md margin-top-40 margin-bottom-40">
				<i class="fa fa-search info-sizes red-color"> <span class="white">25,000+</span></i>
				<div class="info-text-format grey-color">Customers Review</div>
			</div>
			<div class="col-md margin-top-40 margin-bottom-40">
				<i class="fa fa-search info-sizes red-color"> <span class="white">5,500+</span></i>
				<div class="info-text-format grey-color">Unique Places and Events</div>
			</div>
		</div>
	</div>
</div>