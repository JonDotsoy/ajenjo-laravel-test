<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>header</h2>
	<pre>{{ var_dump($head) }}</pre>
	<h2>Login status</h2>
	@if ($head->auth)
		<p>True</p>
	@else
		<p>False</p>
	@endif
	<h2>Login BTN</h2>
	@if (!ajenjo::$auth)
		<a href="{{ ajenjo::openLogin() }}">Login</a>
	@else
		<a href="{{ URL::to('logout') }}">Logout</a>
	@endif
</body>
</html>