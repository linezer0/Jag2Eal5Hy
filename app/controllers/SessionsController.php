<?php

class SessionsController extends \BaseController {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$attempt = Auth::attempt($input = Input::only('email', 'password'));

		if($attempt) {
			return Redirect::to('/profile')->with('flash_message', 'You are now logged in as ' . Auth::user()->username . '! Nice to have you back!');;
		}
		else {
			return Redirect::back()->with(['flash_message' => 'Nous avons pas pu vous identifier. Essayez à nouveau !'])->withInput();
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();

		return Redirect::home()->with('flash_message', 'You are now logged out! See you around!');
	}


}
