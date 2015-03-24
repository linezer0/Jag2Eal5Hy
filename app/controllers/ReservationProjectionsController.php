<?php

class ReservationProjectionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /reservationprojections
	 *
	 * @return Response
	 */
	public function index($idParticipant)
	{
        $projections = Participant::find($idParticipant)->projections->all();

        return View::make('participants.reservationprojections.index', ['projections' => $projections]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /reservationprojections/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $participant = Auth::user()->participant;
        $projections = Projection::where('places_disponibles', '>', 0)->get();
        foreach($projections as $index => $projection) {
            if($participant->hasProjection($projection->id))
                unset($projections[$index]);
        }
		return View::make('participants.projections.index', ['projections' => $projections]);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /reservationprojections
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
        $projection = Projection::find($input['projection']);

        Auth::user()->participant->assignProjection($projection, $input['places']);
        $projection->bookPlaces($input['places']);
        return Redirect::route('profile')->with('flash_message', 'Votre place de projection a bien été réservée. Merci!');
	}

	/**
	 * Display the specified resource.
	 * GET /reservationprojections/{id}
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
	 * GET /reservationprojections/{id}/edit
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
	 * PUT /reservationprojections/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	public function delete($idParticipant, $idProjection)
	{
        $places = Participant::find($idParticipant)->projections->find($idProjection)->pivot->places;
        Participant::find($idParticipant)->removeProjection($projection = Projection::find($idProjection));
        $projection->cancelPlaces($places);
        return Redirect::to('/profile')->with('flash_message', 'Votre réservation a été annulée.');
	}

}