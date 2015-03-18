<?php

class HebergementsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('hebergements.index', ['hebergements' => Hebergement::all()]);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('hebergements.create');

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $validation = Validator::make(Input::all(), Hebergement::$rules);

        if($validation->fails()) {
            return Redirect::back()->with('flash_message', 'Problème lors de la création de l hébergement')->withErrors($validation)->withInput();
        }

        $hebergement = hebergement::create([
            'no_siret' => Input::get('no_siret'),
            'nom' => Input::get('nom'),
            'adresse' => Input::get('adresse'),
            'etoiles' => Input::get('etoiles'),
            'type_hebergement' => Input::get('type_hebergement'),
            'nom_contact' => Input::get('nom_contact'),
            'mail_contact' => Input::get('mail_contact'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);


/**
        $participant->user_id = $user->id;
        $participant->save();

        $user->participant_id = $participant->id;
        $user->hasProfil(Profil::where('libelle', 'participant'));
        $user->save();

        $accessrequest = AccessRequest::where('email', '=', $participant)->first();
        $accessrequest->statut = 'Traitée';
        $accessrequest->save();
*/
        return Redirect::route('hebergements.index')->with('flash_message', 'L\'hébergement a bien été créé !');
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
