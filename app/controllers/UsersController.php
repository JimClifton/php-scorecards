<?php

class UsersController extends BaseController {

	public function create ()
	{
		return View::make('users.create');
	}

	public function store ()
	{
		if (!User::isValid(Input::all())) {
			return Redirect::back()->with([
				'flash_message' => 'Check your details and try again.', 
				'alert' => 'danger'
			]);
		}

		$user = new User;
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->save();

		return Redirect::to('login')->with([
			'flash_message' => 'Your account has been created, you can now login', 
			'alert' => 'success'
		]);
	}

}