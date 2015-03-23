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
            if(Auth::user()->hasProfil('administrator'))
			    return Redirect::to('/administration');
            else
                Redirect::to('/profile');
		}
        else
		    return View::make('pages.home');
	}

	public function profile() {
		return View::make('pages.profile');
	}

    public function administration() {
        return View::make('pages.administration');
    }
}