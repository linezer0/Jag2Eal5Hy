<?php

class ProjectionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projections = DB::table('projections')
			->join('salles', 'projections.salle_id', '=', 'salles.id')
			->join('films', 'projections.film_id', '=', 'films.id')
			->get();
		return $projections;
		return View::make('projections.index', ['projections' => $projections]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$movies = DB::table('films')->lists('libelle', 'id');
		$salles = DB::table('salles')->lists('name', 'id');
		$jours = Projection::$jours;
		return View::make('projections.create', ['movies' => $movies, 'salles' => $salles, 'jours' => $jours]);
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
			'date_seance' => new DateTime($input['date_seance']),
			'heure_debut' => date($input['heure_debut']),
			'heure_fin' => date($input['heure_fin']),
			'salle_id' => $input['salle'],
			'film_id' => $input['film']
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
		$salle = Salle::find($projection->salle_id)->name;
		$film = Film::find($projection->film_id);
		$film_libelle = $film->libelle;
		$categorie = FilmCategorie::find($film->film_categorie_id)->libelle;
		return View::make('projections.show', ['projection' => $projection, 'salle' => $salle, 'film_libelle' => $film_libelle, 'categorie' => $categorie]);
	}
}
