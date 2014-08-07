@extends('layouts.default')

@section('content')

<?php
$total_par = 0;
$total_score = 0;
?>

	@if ($scorecard)
		<div class="row">
			<div class="col-xs-6"><h1>{{ $scorecard["course_name"] }}</h1></div>
			<div class="col-xs-6"><span class="played_date">{{ date("D, jS M Y", strtotime($scorecard["played_date"])) }}</span></div>
		</div>
		<div class="col-xs-12 bg-white rounded shadow scorecard">
			<div class="col-xs-4">
				<span><h3>Hole</h3></span>
				@for ($i = 1; $i < 19; $i++)
					<span>{{ $i }}</span>
				@endfor
			</div>
			<div class="col-xs-4">
				<span><h3>Par</h3></span>
				@for ($i = 1; $i < 19; $i++)
					<span>{{ $template["hole$i"] }} </span>
					<?php $total_par = $total_par + $template["hole$i"]; ?>
				@endfor
				<span>Total : {{ $total_par }}</span>
			</div>
			<div class="col-xs-4">
				<span><h3>Shots</h3></span>
				@for ($i = 1; $i < 19; $i++)
					<span class='{{ result($scorecard["hole$i"], $template["hole$i"]) }}'>{{ $scorecard["hole$i"] }}</span>
					<?php $total_score = $total_score + $scorecard["hole$i"]; ?>
				@endfor
				<span>Total : {{ $total_score }}</span>
			</div>
		</div>
	@else
		<div class="alert alert-danger">No scorecards available</div>
	@endif
@stop

<?php
	function result($s, $t) {
		if ($s > $t) {
			return "over";
		} else if ($s < $t) {
			return "under";
		}
	}
?>