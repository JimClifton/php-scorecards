<?php

class TemplatesController extends BaseController {

	public function index ()
	{
		$user = Auth::user()->id;
		$templates = Scorecards::where('user_id', $user)->where('type', 'T')->get();
		return View::make('courses.index', ['templates' => $templates]);
	}

	public function create ()
	{
		return View::make('courses.create');
	}

	public function store ()
	{
		$user = Auth::user()->id;

		$scorecards = new Scorecards;
		$scorecards->user_id = $user;
		$scorecards->course_name = Input::get('course_name');
		$scorecards->hole1 = Input::get('hole1');
		$scorecards->hole1 = Input::get('hole2');
		$scorecards->hole1 = Input::get('hole3');
		$scorecards->hole1 = Input::get('hole4');
		$scorecards->hole1 = Input::get('hole5');
		$scorecards->hole1 = Input::get('hole6');
		$scorecards->hole1 = Input::get('hole7');
		$scorecards->hole1 = Input::get('hole8');
		$scorecards->hole1 = Input::get('hole9');
		$scorecards->hole1 = Input::get('hole10');
		$scorecards->hole1 = Input::get('hole11');
		$scorecards->hole1 = Input::get('hole12');
		$scorecards->hole1 = Input::get('hole13');
		$scorecards->hole1 = Input::get('hole14');
		$scorecards->hole1 = Input::get('hole15');
		$scorecards->hole1 = Input::get('hole16');
		$scorecards->hole1 = Input::get('hole17');
		$scorecards->hole1 = Input::get('hole18');
		$scorecards->type = 'T';
		$scorecards->save();

		return Redirect::to('courses')->with([
			'flash_message' => 'Your new course has been created', 
			'alert' => 'success'
		]);
	}

}