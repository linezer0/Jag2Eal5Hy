<?php

class PagesController extends \BaseController {

	/**
	 * Display homepage.
	 * GET /
	 *
	 * @return Response
	 */
	public function home()
	{
		if(Auth::check()) {
			return Redirect::to('/profile');
		}
		return View::make('pages.home');
	}

	public function profile() {
		return View::make('pages.profile');
	}
}