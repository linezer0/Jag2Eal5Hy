<?php

class AccessRequestsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /accessrequests
	 *
	 * @return Response
	 */
	public function index()
	{
		$accessrequests = AccessRequest::all();

		return View::make('accessrequests.index', ['accessrequests' => $accessrequests]);


	}

	/**
	 * Show the form for creating a new resource.
	 * GET /accessrequests/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('accessrequests.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /accessrequests
	 *
	 * @return Response
	 */
	public function store()
	{
		$validation = Validator::make(Input::all(), AccessRequest::$rules);

		if($validation->fails()) {
			return Redirect::back()->withErrors($validation)->withInput();
		}

		AccessRequest::create([
			'nom' => Input::get('nom'),
			'prenom' => Input::get('prenom'),
			'email' => Input::get('email'),
			'date_naissance' => new DateTime(Input::get('date_naissance')),
			'role' => Input::get('role'),
			'entreprise' => Input::get('entreprise'),
			'justification' => Input::get('justification'),
			'statut' => 'En attente',
			'created_at' => time(),
			'updated_at' => time()
		]);

		return Redirect::route('home')->with('flash_message', 'Votre demande d\'accès a bien été prise en compte. Elle sera étudié prochainement par nos équipes. Nous vous recontacterons dans les plus brefs délais pour vous faire part de notre décision.<br>Merci de votre intérêt pour le Festival de Cannes.');

	}

	/**
	 * Display the specified resource.
	 * GET /accessrequests/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$accessrequest = AccessRequest::find($id);
		return View::make('accessrequests.show', ['accessrequest' => $accessrequest]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /accessrequests/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /accessrequests/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function createUser($id) {
		$accessrequest = AccessRequest::find($id);
        $user = User::create([
            'nom' => $accessrequest->nom,
            'prenom' => $accessrequest->prenom,
            'email' => $accessrequest->email,
            'date_naissance' => new DateTime($accessrequest->date_naissance),
            'password' => Hash::make('hello'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        $user->assignRole(Role::where('name', 'guest')->first());
        $accessrequest->statut = "Traité";
        $accessrequest->save();
        // TODO :
        // TODO : envoie du mail à l'utilisateur
		return Redirect::route('accessrequests.show', $id)->with('flash_message', 'L\'utilisateur a bien été créé !');
	}
}
