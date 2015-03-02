<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('users.index', ['users' => User::with('roles')->get()]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validation = Validator::make(Input::all(), User::$rules);

		if($validation->fails()) {
			return Redirect::back()->withErrors($validation)->withInput();
		}

		$user = User::create([
			'username' => Input::get('username'),
			'nom' => Input::get('nom'),
			'prenom' => Input::get('prenom'),
			'email' => Input::get('email'),
			'date_naissance' => Input::get('date_naissance'),
			'password' => Hash::make(Input::get('password'))
		]);

		$user->assignRole(Role::whereName('guest')->first());

		$user->save();

		return Redirect::route('profile')->with('flash_message', 'L\'utilisateur a bien été créé !');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
