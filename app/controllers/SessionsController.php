<?php

class SessionsController extends BaseController {

	public function create ()
	{
		return View::make('sessions.create');
	}

	public function store ()
	{
		$input = Input::all();

		$attempt = Auth::attempt([
			'username' => $input['username'],
			'password' => $input['password']
		]);

		if ($attempt) {
			return Redirect::intended('/')->with([
				'flash_message' => 'You have been logged in!', 
				'alert' => 'success'
			]);
		} else {
			return Redirect::back()->withInput()->with([
				'flash_message' => 'Invalid login', 
				'alert' => 'danger'
			]);
		}
	}

	public function destroy ()
	{
		Auth::logout();
		return Redirect::to('/')->with([
			'flash_message' => 'You have been logged out!', 
			'alert' => 'warning'
		]);
	}

}
