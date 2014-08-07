@extends('layouts.default')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Login</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				{{ Form::open(['route' => 'sessions.store']) }}
					<div class="form-group">
						{{ Form::label('username', 'Email :') }}
						{{ Form::text('username', '', array('class' => 'form-control')) }}
					</div>
					<div class="form-group">
						{{ Form::label('password', 'Password :') }}
						{{ Form::password('password', array('class' => 'form-control')) }}
					</div>
					<div class="form-group">
						{{ Form::submit('Login', array('class' => 'btn btn-default')) }}
					</div>
				{{ Form::close() }}
			</div>
		</div>
	</div>
@stop