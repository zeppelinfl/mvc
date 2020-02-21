<link rel="stylesheet" href="<?php echo WEBROOT; ?>css/header.css" >
<header>
	<nav class="navbar navbar-expand-sm navbar-light">
		<div class="container-fluid">
			<div class="nav-items-left">
				<a href="/">
					<i class="fa fa-map-marker">
						<p class="logo-text">triptip</p>
					</i>
				</a>
				<div class="dropdown">
				  <button class="dropbtn pages-text">Home<i class="fa fa-caret-down hover-border caret-drop"></i></button>
				  <div class="dropdown-content">
				    <a href="#place">Places</a>
				    <a href="#people">People</a>
				    <a href="#experiences">Experiences</a>
				    <a href="#events">Events</a>
				  </div>
				</div> 
				<div class="dropdown">
				  <button class="dropbtn pages-text">Pages<i class="fa fa-caret-down hover-border caret-drop"></i></button>
				  <div class="dropdown-content">
				    <a href="/event">Events</a>
				    <a href="/place">Places</a>
				    <a href="/experience">Experiences</a>
				    <a href="/review">Reviews</a>
				  </div>
				</div> 
				<a href="/contact">
					<i class="fa hover-border">
						<p class="contacts-text">Contacts</p>
					</i>
				</a>

			</div>
			<div class="nav-items-right">
				<?php if(!isset($_SESSION['loggedin'])) { ?>
					<a href="/auth/login">
						<i class="fa fa-sign-in header-top hover-border">
							<p class="logo-text">Sign in</p>
						</i>
					</a>
					<a href="/auth/register">
						<i class="fa fa-user header-top hover-border">
							<p class="logo-text">Register</p>
						</i>
					</a>
				<?php } else { ?>
					<a href="/auth/logout">
						<i class="fa fa-sign-out header-top hover-border out-header">
							<p class="logo-text">Sign out</p>
						</i>
					</a>
				<?php } ?>
				<div class="bordered">
	    			<i class="fa fa-plus header-top">
	    				<p class="logo-text">Add Listing</p>
	    			</i>
				</div>
			</div>
		</div>
	</nav>
</header>