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
	      			<?php foreach ($cities as $id => $city) { ?>
	      				<option name="<?php echo $id ?>"><?php echo $city; ?></option>
	      			<?php } ?>
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