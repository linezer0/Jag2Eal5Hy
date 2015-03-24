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
		$services = DB::table('services')->lists('libelle', 'id');
		return View::make('hebergements.create',['services'=> $services]);

	}



	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store ()

	{
        $validation = Validator::make(Input::all(), Hebergement::$rules);

        if($validation->fails()) {

          return Redirect::back()->with('flash_message', 'Problème lors de la création de l hébergement')->withErrors($validation)->withInput();
        }

        $hebergement = Hebergement::create([
            'no_siret' =>Input::get('no_siret'),
            'nom' => Input::get('nom'),
            'adresse' => Input::get('adresse'),
            'etoiles' => Input::get('etoiles'),
            'type_hebergement' => Input::get('type_hebergement'),
            'nom_contact' => Input::get('nom_contact'),
            'mail_contact' => Input::get('mail_contact'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()

        ]);


				foreach(Input::get('services') as $service)
				{
					Hebergement::find(Input::get('no_siret'))->assignService(Service::find($service));
				}



        return Redirect::route('hebergements.index')->with('flash_message', 'L\'hébergement a bien été créé !');
	}

	/**
	 * Display the specified resource.
	 * GET /participants/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($no_siret)
	{
		$hebergement = Hebergement::with('chambres')->find($no_siret);

		//dd(Hebergement::find($no_siret));
		return View::make('hebergements.show', ['hebergement' => $hebergement]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $i
	 * @return Response
	 */

	public function edit($no_siret)
	{
			$hebergement = Hebergement::find($no_siret);
			//$etoiles = Hebergement::$etoiles;
			//$services = DB::table('services')->lists('libelle', 'id');


			return View::make('hebergements.edit', ['hebergement' => $hebergement]);

	}

	/**
	* Update the specified resource in storage.
	* PUT /projections/{id}
	*
	* @param  int  $id
	* @return Response
	*/
	public function update($no_siret)
	{
			$hebergement = Hebergement::find($no_siret);
			$input = Input::all();

			$hebergement->etoiles = $input['etoiles'];
			$hebergement->nom_contact = $input['nom_contact'];
			$hebergement->mail_contact = $input['mail_contact'];
			$hebergement->updated_at = new DateTime();
			$hebergement->save();

			return Redirect::route('hebergements.index')->with('flash_message', 'L\'hebergement a bien été modifié ');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($no_siret) {

			Hebergement::destroy($no_siret);
			return Redirect::route('hebergements.index');
	}


}
