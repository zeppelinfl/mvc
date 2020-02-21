<div class="container-fluid categ-fluid">
	<?php foreach ($categories as $category) { ?>
		<article class="categ-list">
   			<i class="fa <?php echo $category['awesome_sign']; ?> signs-cat"></i>
   			<p class="title-cat"><?php echo $category['name']; ?></p>
   			<p class="loc-cat"><?php echo $category['loc_num']; ?> Locations</p>
   		</article>	
	<?php } ?>
</div>