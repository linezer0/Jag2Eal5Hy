<?php

class ProjectionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projections = Projection::with('salle', 'film')->get();
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

    public function destroy($id) {
        Projection::destroy($id);

        return Redirect::route('projections.index');
    }


}
