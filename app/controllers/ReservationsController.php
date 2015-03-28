<?php

class ReservationsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /reservations
	 *
	 * @return Response
	 */
	public function index($idParticipant)
	{
        // $reservations = Reservation::where('participant_id', $idParticipant)->get();
        $reservations = Reservation::where('participant_id', $idParticipant)->get();

        return View::make('participants.reservations.index', ['reservations' => $reservations]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /reservations/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $hotels = DB::table('hebergements')->lists('nom', 'no_siret');
        $jours = Projection::$jours;

        return View::make('participants.reservations.select1', ['jours' => $jours, 'hotels' => $hotels]);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /reservations
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::all();
		Reservation::create([
            'participant_id' => Auth::user()->participant->id,
            'chambre_id' => $input['chambre'],
            'date_debut' => new DateTime($input['date_debut']),
            'date_fin' => new DateTime($input['date_fin']),
            'duree' => $input['duree'],
            'montant_total' => $input['duree'] * $input['montant_nuit'],
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        return Redirect::to('/profile')->with('flash_message', 'Votre réservation a bien été prise en compte !');
	}

	/**
	 * Display the specified resource.
	 * GET /reservations/{id}
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
	 * GET /reservations/{id}/edit
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
	 * PUT /reservations/{id}
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
	 * DELETE /reservations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    public function selectChambre() {
        $input = Input::all();
        $input['duree'] = date_diff(new DateTime($input['date_debut']), new DateTime($input['date_fin']))->format('%a');
        $hebergement = Hebergement::with('chambres')->find($input['hotel']);
        if(!Reservation::datesOk($input['date_debut'], $input['date_fin'])) {
            return Redirect::back()->with('flash_message', 'Les dates ne sont pas correctes. Veuillez réessayer.');
        }
        return View::make('participants.reservations.select2', ['hebergement' => $hebergement, 'infos' => $input]);
    }

}