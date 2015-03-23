<?php

class ReservationProjectionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /reservationprojections
	 *
	 * @return Response
	 */
	public function index()
	{
        $projections = Auth::user()->participant->projections->all();

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
        $projections = Projection::where('places_disponibles', '>', 0)->get();
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

        Auth::user()->participant->assignProjection($projection = Projection::find($input['projection']));
        $projection->updatePlaces('reservation');
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

	/**
	 * Remove the specified resource from storage.
	 * DELETE /reservationprojections/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */

    // TODO : NE MARCHE PAS
	public function destroy($idParticipant, $idProjection)
	{
		Participant::find($idParticipant)->removeProjection($projection = Projection::find($idProjection));
        $projection->updatePlaces('desistement');

        return Redirect::to('/')->with('flash_message', 'Votre réservation a été annulée.');
	}

}