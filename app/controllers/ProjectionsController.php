<?php

class ProjectionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projections = Projection::with('salle', 'film')->orderBy('date_projection')->orderBy('creneau')->get();
		return View::make('projections.index', ['projections' => $projections]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$movies = DB::table('films')->lists('nom', 'id');
		$salles = DB::table('salles')->lists('nom', 'id');
		$jours = Projection::$jours;
        $creneaux = Projection::$creneaux;
		return View::make('projections.create', ['movies' => $movies, 'salles' => $salles, 'jours' => $jours, 'creneaux' => $creneaux['affichage']]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Projection::$rules);
		if($validation->fails()) {
			return Redirect::back()->withErrors($validation)->withInput();
		}
        if(!Projection::creneauDisponible(new DateTime($input['date_projection']), $input['creneau'], $input['salle'])) {
            return Redirect::back()->withInput()->with('flash_message', 'Ce créneau est déjà utilisé.');
        }

		$projection = Projection::create([
			'date_projection' => new DateTime($input['date_projection']),
			'creneau' => $input['creneau'],
			'salle_id' => $input['salle'],
			'film_id' => $input['film'],
            'places_disponibles' => Salle::find($input['salle'])->capacite,
            'place_reservees' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
		]);
		return Redirect::route('projections.show', ['id'=> $projection->id])->with('flash_message', 'La projection a bien été créée !');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$projection = Projection::find($id);
		return View::make('projections.show', ['projection' => $projection, 'salle_nom' => $projection->salle->nom, 'film_nom' => $projection->film->nom]);
	}

    /**
     * Show the form for editing the specified resource.
     * GET /projections/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */

    public function edit($id)
    {
        $projection = Projection::find($id);
        $movies = DB::table('films')->lists('nom', 'id');
        $salles = DB::table('salles')->lists('nom', 'id');
        $jours = Projection::$jours;
        $creneaux = Projection::$creneaux;
        return View::make('projections.edit', ['projection' => $projection, 'movies' => $movies, 'salles' => $salles, 'jours' => $jours, 'creneaux' => $creneaux['affichage']]);

    }

    /**
     * Update the specified resource in storage.
     * PUT /projections/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $projection = Projection::find($id);
        $input = Input::all();
        if(!Projection::creneauDisponible(new DateTime($input['date_projection']), $input['creneau'], $input['salle'])) {
            return Redirect::back()->withInput()->with('flash_message', 'Ce créneau est déjà utilisé.');
        }
        $projection->date_projection = new DateTime($input['date_projection']);
        $projection->creneau = $input['creneau'];
        $projection->salle_id = $input['salle'];
        $projection->film_id = $input['film'];
        $projection->places_disponibles = Salle::find($input['salle'])->capacite;
        $projection->places_reservees = 0;
        $projection->updated_at = new DateTime();
        $projection->save();

        return Redirect::route('projections.index')->with('flash_message', 'La projection a bien été modifiée.');
    }

    public function destroy($id) {
        Projection::destroy($id);

        return Redirect::route('projections.index')->with('flash_message', 'La projection a bien été supprimée.');
    }



}
