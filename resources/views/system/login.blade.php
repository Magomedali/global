<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>

	<p><a href="{{ url('register')}}">Register</a></p>
	<form action="{{ url('/login')}}" method="POST">
		<p>
			<label>Email</label>
			<input type="email" name="email" required>
		</p>
		<p>
			<label>password</label>
			<input type="password" name="password" required>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
		</p>
		<p>
			<input type="submit" value="Login">
		</p>
	</form>
</body>
</html>