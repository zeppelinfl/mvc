<link rel="stylesheet" href="/css/login.css">
<div class="container container-login">
	<form method="POST" action="/auth/authorise" class="form">
		<div class="row">
			<div class="col"><h2 class="login-title">Login</h2></div>
		</div>
		<div class="row">
			<div class="col"><input type="email" name="email" placeholder="E-mail" class="login-input"></div>
		</div>
		<div class="row">
			<div class="col"><input type="password" name="password" placeholder="Password" class="login-input"></div>
		</div>
		<div class="row">
			<div class="col"><input type="submit" value="Login" class="login-input"></div>
		</div>
	</form>
</div>