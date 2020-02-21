<link rel="stylesheet" href="/css/login.css">
<div class="container container-login">
	<form method="POST" action="/contact/send_contact" class="form">
		<div class="row">
			<div class="col"><h2 class="login-title">Contact Us</h2></div>
		</div>
		<div class="row">
			<div class="col"><input type="text" name="name" placeholder="Name" class="login-input"></div>
		</div>
		<div class="row">
			<div class="col"><input type="email" name="email" placeholder="E-mail" class="login-input"></div>
		</div>
		<div class="row">
			<div class="col"><textarea name="subject" placeholder="Message" class="login-input message-input"></textarea></div>
		</div>
		<div class="row">
			<div class="col"><input type="submit" value="Send" class="login-input contact"></div>
		</div>
	</form>
</div>