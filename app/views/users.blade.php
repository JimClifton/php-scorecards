@extends('layouts.default')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>{{ $title }}</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<ul>
					@foreach ($users as $user)
						<li>{{ $user->username }}</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
@stop
