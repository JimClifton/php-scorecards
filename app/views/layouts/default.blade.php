<!doctype html>

<html>
	<head>
		<title>{{ $title }}</title>
		<meta charset="utf-8">
		{{ HTML::style('bootstrap/css/bootstrap.min.css') }}
	</head>
	<body>
		@yield('content')
	</body>
</html>