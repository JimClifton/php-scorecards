@extends('layouts.default')

@section('content')
	Welcome, {{ Auth::user()->username }}
@stop