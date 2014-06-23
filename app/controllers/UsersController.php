<?php

class UsersController extends BaseController {

	public function index() {
		$title = 'Users';
		$users = User::all();
		return View::make('users', ['title' => $title, 'users' => $users]);
	}

	public function create() {
		$title = 'Register';
		return View::make('register', ['title' => $title]);
	}

	public function store () {
		$user = new User;
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->save();

		return Redirect::route('users.index');
	}

}