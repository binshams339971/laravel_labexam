<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body>
	<h1>Welcome! {{ session('username') }}</h1>

	<br>
	<a href="">Processor</a> |
	<a href="">Ram</a> |
	<a href="">Storage</a> |
	<a href="{{ route('logout.index')}}">logout</a>

</body>
</html>