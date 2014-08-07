@extends('layouts.default')

@section('content')
	<div class="row margin-med">
		<div class="col-xs-12"><h1>Add a Course</h1></div>
	</div>

	{{ Form::open(['route' => 'courses.store']) }}
		<div class="form-group">
			{{ Form::label('course_name', 'Course name') }}
			{{ Form::text('course_name', '', array('class' => 'form-control')) }}
		</div>

		<div class="col-xs-12">
			<ul class="nav nav-tabs" role="tablist">
				<li class="active align-center"><a href="#front" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-chevron-left"></span> Front 9</a></li>
				<li class="align-center"><a href="#back" role="tab" data-toggle="tab">Back 9 <span class="glyphicon glyphicon-chevron-right"></span></a></li>
			</ul>
		</div>

		<div class="col-xs-12 bg-white rounded shadow">

			<div class="row">
				<div class="col-xs-3 align-center">
					<h3>Hole</h3>
				</div>
				<div class="col-xs-9 align-center">
					<h3>Par</h3>
				</div>
			</div>

			<div class="tab-content">
				@for ($i = 1; $i < 19; $i++)
					<div class="row hole{{ $i }}">
						<div class="col-xs-3 align-center">
							<div class="form-group">
								{{ $i }}
							</div>
						</div>
						<div class="col-xs-9">
							<div class="form-group align-center">
								{{ Form::text("hole$i", '', array('class' => 'form-control align-center')) }}
							</div>
						</div>
					</div>
				@endfor
			</div>

			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						{{ Form::submit('Add', array('class' => 'btn btn-primary btn-block')) }}
					</div>
				</div>
			</div>
		</div>
	{{ Form::close() }}
@stop