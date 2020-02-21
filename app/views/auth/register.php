<link rel="stylesheet" href="/css/login.css">
<div class="container container-login">
	<form method="POST" action="/auth/register_user" class="form">
		<div class="row">
			<div class="col"><h2 class="login-title">Register</h2></div>
		</div>
		<div class="row">
			<div class="col"><input type="text" name="name" placeholder="Name" class="login-input"></div>
		</div>
		<div class="row">
			<div class="col"><input type="text" name="surname" placeholder="Surname" class="login-input"></div>
		</div>
		<div class="row">
			<div class="col"><input type="email" name="email" placeholder="E-mail" class="login-input"></div>
		</div>
		<div class="row">
			<div class="col"><input type="password" name="password" placeholder="Password" class="login-input"></div>
		</div>
		<div class="row">
			<div class="col"><input type="password" name="passwrd" placeholder="Confirm Password" class="login-input"></div>
		</div>
		<div class="row">
			<div class="col"><input type="submit" value="Register" class="login-input"></div>
		</div>
	</form>
</div>