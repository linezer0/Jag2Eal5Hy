<?php

class ParticipantsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /participants
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('participants.index', ['participants' => Participant::all()]);
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /participants/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('participants.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /participants
	 *
	 * @return Response
	 */
	public function store()
	{
        $validation = Validator::make(Input::all(), Participant::$rules);

        if($validation->fails()) {
            return Redirect::back()->with('flash_message', 'Problème lors de la création du participant')->withErrors($validation)->withInput();
        }

        $participant = Participant::create([
            'nom' => Input::get('nom'),
            'prenom' => Input::get('prenom'),
            'email' => Input::get('email'),
            'date_naissance' => new DateTime(Input::get('date_naissance')),
            'telephone' => Input::get('telephone'),
            'role' => Input::get('role'),
            'niveau_accreditation' => Input::get('niveau_accreditation'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        $user = User::create([
            'email' => Input::get('email'),
            'password' => Hash::make('hello'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        $participant->user_id = $user->id;
        $participant->save();
        $user->participant_id = $participant->id;
        $user->save();
        $user->assignProfil(Profil::whereLibelle('participant')->first());

        return Redirect::route('profile')->with('flash_message', 'Le participant a bien été créé !');
	}

	/**
	 * Display the specified resource.
	 * GET /participants/{id}
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
	 * GET /participants/{id}/edit
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
	 * PUT /participants/{id}
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
	 * DELETE /participants/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    public function reserverPlaceProjection($idProjection) {
        Auth::user()->participant->assignProjection(Projection::find($idProjection));
    }

}
