<form method="POST" action="/auth/login">
	{!! csrf_field() !!}

	<input type="email" name="email" value="{{ old('email') }}">
	<input type="password" name="password" id="password">
	<input type="checkbox" name="remember"> Remember Me
	<button type="submit">Submit</button>
</form>