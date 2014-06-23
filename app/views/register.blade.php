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
				
				{{ Form::open(['route' => 'users.store']) }}
					<div class="form-group">
						{{ Form::label('username', 'Username :') }}
						{{ Form::text('username', '', array('class' => 'form-control')) }}
					</div>
					<div class="form-group">
						{{ Form::label('password', 'Password :') }}
						{{ Form::password('password', array('class' => 'form-control')) }}
					</div>
					<div class="form-group">
						{{ Form::submit('Create account', array('class' => 'btn btn-primary')) }}
					</div>
				{{ Form::close() }}
				
			</div>
		</div>
	</div>
@stop