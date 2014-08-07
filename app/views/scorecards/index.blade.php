@extends('layouts.default')

@section('content')
	<div class="row margin-med">
		<div class="col-xs-8"><h1>Scorecards</h1></div>
		<div class="col-xs-4 align-right"><a class="btn btn-primary" href="scorecards/create"><span class="glyphicon glyphicon-plus"></span> Add new</a></div>
	</div>
	@if ($scorecards)
		@foreach ($scorecards as $scorecard)
			<a href="scorecards/{{ $scorecard->id }}" class="myrow col-xs-12 rounded bg-white shadow">
				<span class="col-xs-6">{{ $scorecard->course_name }}</span>
				<span class="col-xs-4">{{ date("D, jS M Y", strtotime($scorecard["played_date"])) }}</span>
				<span class="col-xs-2 align-right"><span class="glyphicon glyphicon-chevron-right"></span></span>
			</a>
		@endforeach
	@else
		<div class="alert alert-danger">No scorecards available</div>
	@endif
@stop