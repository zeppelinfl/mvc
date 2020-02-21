<?php if(isset($_SESSION['flash_messages'][0])) { ?>
	<div class="flash flash_<?php echo $_SESSION['flash_messages'][0]['name']; ?>"><?php echo $_SESSION['flash_messages'][0]['message']; ?></div>
<?php } ?>