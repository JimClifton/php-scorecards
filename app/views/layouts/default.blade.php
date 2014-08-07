<!doctype html>

<html>
	<head>
		<title>Title</title>
		<meta charset="utf-8">
		{{ HTML::style('bootstrap/css/bootstrap.min.css') }}
		{{ HTML::style('css/styles.css') }}
	</head>

	<body>
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="#"><em>my</em>ScoreCards</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
					<ul class="nav navbar-nav">
						@if (Auth::User())
							<li><a href="/php-scorecards/public/profile"><em>my</em>Profile</a></li>
							<li><a href="/php-scorecards/public/courses"><em>my</em>Courses</a></li>
							<li><a href="/php-scorecards/public/scorecards"><em>my</em>Scorecards</a></li>
							<li><a href="/php-scorecards/public/logout">Logout</a></li>
						@else
							<li><a href="/php-scorecards/public/register">Register</a></li>
							<li><a href="/php-scorecards/public/login">Login</a></li>
						@endif
					</ul>
				</div>

			</div>
		</nav>

		<div class="container">
			@if (Session::get('flash_message'))
				<div class="alert alert-{{ Session::get('alert') }}">
					{{ Session::get('flash_message') }}
				</div>
			@endif
			@yield('content')
		</div>

		{{ HTML::script('js/jquery.min.js') }}
		{{ HTML::script('bootstrap/js/bootstrap.min.js') }}
		{{ HTML::script('js/scripts.js') }}
	</body>

</html>