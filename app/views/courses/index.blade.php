@extends('layouts.default')

@section('content')
	<div class="row margin-med">
		<div class="col-xs-8"><h1>Courses</h1></div>
		<div class="col-xs-4 align-right"><a class="btn btn-primary" href="courses/create"><span class="glyphicon glyphicon-plus"></span> Add new</a></div>
	</div>
	@if ($templates)
		@foreach ($templates as $template)
			<div class="myrow rounded bg-white shadow">
				<div class="col-xs-10">{{ $template->course_name }}</div>
				<div class="col-xs-2 align-right"><span class="glyphicon glyphicon-chevron-right"></span></div>
			</div>
		@endforeach
	@else
		<div class="alert alert-danger">No scorecards available</div>
	@endif
@stop