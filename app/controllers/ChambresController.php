<?php

class ChambresController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /chambres
	 *
	 * @return Response
	 */
	public function index()
	{


		$chambres = Chambre::with('hebergement')->get();

		return View::make('chambres.index', ['chambres'=>$chambres]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /chambres/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$hebergements = DB::table('hebergements')->lists('nom', 'no_siret');
		return View::make('chambres.create',['hebergements'=> $hebergements]);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /chambres
	 *
	 * @return Response
	 */
	public function store()
	{

		$validation = Validator::make(Input::all(), Chambre::$rules);
		$input = Input::all();

		if($validation->fails()) {
			return Redirect::back()->with('flash_message', 'Problème lors de la création de la chambre')->withErrors($validation)->withInput();
		}

		$chambre = Chambre::create([
				'hebergement_no_siret' => $input['hebergement'],
				'libelle' => $input['libelle'],
				'capacite' => $input['capacite'],
				'type_chambre' => $input['type_chambre'],
				'prix_chambre' => $input['prix_chambre'],
				'created_at' => new DateTime(),
				'updated_at' => new DateTime()
		]);




		return Redirect::route('chambres.index')->with('flash_message', 'La chambre a bien été créé !');
	}

	/**
	 * Display the specified resource.
	 * GET /chambres/{id}
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
	 * GET /chambres/{id}/edit
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
	 * PUT /chambres/{id}
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
	 * DELETE /chambres/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
