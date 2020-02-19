<link rel="stylesheet" href="/css/home.css">
<link rel="stylesheet" href="/css/review-score-color.css">
<div class="content">
	<div class="container container-top">
		<div class="row">
		    <div class="col-md">
		      <div class="join-content-top">Find out perfect place to hangout in your city.</div>
			  <div class="join-title-top">Find amazing hotspots.</div>
		    </div>
		 </div>
		 <div class="row row-top">
		 	<div class="col-xs-6 col-md-5">
				<input type="text" placeholder="What are you looking for?" class="form-control input-top">
		 	</div>
    		<div class="col-xs-6 col-md-3">
	      		<select class="form-control caret select-top">
		      		<option>Location?</option>
		      		<option>Vienna</option>
		      		<option>Paris</option>
		      	</select>
    		</div>
    		<div class="col-xs-6 col-md-3">
    			<div class="bordered-red search-top">
	    			<i class="fa fa-search header-top">
	    				<p class="logo-text">Search</p>
	    			</i>
				</div>
    		</div>
		</div>
		<div class="row">
		    <div class="search-tags">
				<p id="grey">Popular categories: </p><p>#restaurant, #hotels, #vacation, #rentals, #nightlive, #shopping, ...</p>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid categ-fluid">
	<?php foreach ($categories as $category) { ?>
		<article class="categ-list">
   			<i class="fa <?php echo $category['awesome_sign']; ?> signs-cat"></i>
   			<p class="title-cat"><?php echo $category['name']; ?></p>
   			<p class="loc-cat"><?php echo $category['loc_num']; ?> Locations</p>
   		</article>	
	<?php } ?>
</div>
<div class="content">
	<div class="container-fluid top-content">
		<div class="top-title">Top Trending Places</div>
		<div class="top-title-line"></div>
		<div class="top-text">Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</div>
		<div class="places-reviews"> 
			<?php foreach($places as $place) { ?>
			<article class="review">
				<div class="review-image" <?php echo $place['image_show']; ?>>
					<i class="fa fa-heart"></i>
					<div class="review-mark review-score-<?php echo $place['score']; ?>"><?php echo $place['reviews_score']; ?></div>
				</div>
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
	<span class="red-color">View All Places</span>(482)
</div>
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
    				<p class="logo-text">Register Now</p>
    			</i>
			  </div>
		    </div>
		  </div>
	</div>
</div>
<div class="content content-people">
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
					<div class="testimonial-content">" <?php echo $ppl['content']; ?> "</div>
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
<div class="content">
	<div class="new-places-container">
		<div class="row title-width">
			<div class="col-md text-left margin-top-40">
				<div class="join-people-title">Top-rated Experiences</div>
				<div class="join-people-line"></div>
				<div class="join-people-content">Sed egestas, ante et vulputate volputate volutpat, eros pede semper est</div>
			</div>
		</div>
		<div class="row white">
			<?php foreach($experiences as $experience) { ?>
				<div class="col-md picture-set" style="background-image: url('<?php echo $experience['image']; ?>')">
					<div class="new-places-title"><?php echo $experience['country_name']; ?></div>
					<div class="new-places-info">• <?php echo $experience['cities_count']; ?> Cities • <?php echo $experience['listing_count']; ?> Listing</div>
					<div class="bordered-left">
		    			<i class="fa fa-plus top-px-9">
		    				<p class="logo-text">Explore</p>
		    			</i>
				  	</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<div class="container">
	<hr>
</div>
<div class="content">
	<div class="container-fluid top-content">
		<div class="top-title">Discover Events</div>
		<div class="top-title-line pink-color"></div>
		<div class="top-text">Vestibulum volutpat, lacus a ultrices sagittis, mi neque usismod dui, eu pulvinar nunc sapien ornare nisl.</div>
		<div class="places-reviews"> 
			<?php foreach($events as $event) { ?>
			<article class="review">
				<div class="review-image" <?php echo $event['image_show']; ?>>
					<i class="fa fa-heart"></i>
					<div class="review-mark-events"><?php echo $event['date']; ?></div>
				</div>
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
	<span class="red-color">View All Events</span>(482)
</div>
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md text-left margin-top-40"  style="margin-bottom:40px;">
				<div class="join-people-title">How It Works</div>
				<div class="join-people-line"></div>
				<div class="join-people-content">Explore some of the best tips from around the world</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md align-center">
				<i class="fa fa-search test-icon"></i>
				<div class="testimonial-title">Explode The City</div>
				<div class="testimonial-content test-content">Sed pretium, ligula sollicitudin laoreet viverra, tortor eu nibh,nullam mollis. Ut justo. Suspendisse potenti.</div>
			</div>
			<div class="col-md align-center">
				<i class="fa fa-search test-icon"></i>
				<div class="testimonial-title">Explode The City</div>
				<div class="testimonial-content test-content">Sed pretium, ligula sollicitudin laoreet viverra, tortor eu nibh,nullam mollis. Ut justo. Suspendisse potenti.</div>
			</div>
			<div class="col-md align-center">
				<i class="fa fa-search test-icon"></i>
				<div class="testimonial-title">Explode The City</div>
				<div class="testimonial-content test-content">Sed pretium, ligula sollicitudin laoreet viverra, tortor eu nibh,nullam mollis. Ut justo. Suspendisse potenti.</div>
			</div>
		</div>
	</div>
</div>