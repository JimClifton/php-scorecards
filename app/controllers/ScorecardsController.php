<?php

class ScorecardsController extends BaseController {

	public function index ()
	{
		$user = Auth::user()->id;

		$scorecards = Scorecards::where('user_id', $user)->where('type', 'S')->get();
		
		return View::make('scorecards.index', ['scorecards' => $scorecards]);
		//return $scorecards;

	}

	public function create ()
	{
		return View::make('scorecards.create');
	}

	public function store ()
	{
		return "Store";
	}

	public function show ($id) {
		$scorecard = Scorecards::where('id', $id)->firstorfail();

		$template_id = intval($scorecard["template_id"]);

		$template = Scorecards::where('id', '1')->first();

		return View::make('scorecards.show', ['scorecard' => $scorecard, 'template' => $template]);
	}

}