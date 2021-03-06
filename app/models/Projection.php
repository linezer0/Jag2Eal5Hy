<?php

class Projection extends \Eloquent {

	protected $fillable = ['date_projection', 'creneau', 'salle_id', 'film_id', 'places_disponibles', 'places_disponibles', 'created_at', 'updated_at'];

	public static $rules = [
		'date_projection' => 'required',
        'creneau' => 'required',
        'salle' => 'required',
        'film' => 'required'];

	public static $jours = [
		'13-05-2015' => '13-05-2015',
		'14-05-2015' => '14-05-2015',
		'15-05-2015' => '15-05-2015',
        '16-05-2015' => '16-05-2015',
		'17-05-2015' => '17-05-2015',
		'18-05-2015' => '18-05-2015',
		'19-05-2015' => '19-05-2015',
		'20-05-2015' => '20-05-2015',
		'21-05-2015' => '21-05-2015',
		'22-05-2015' => '22-05-2015',
		'23-05-2015' => '23-05-2015',
		'24-05-2015' => '24-05-2015',
	];

    public static $creneaux = [
        'affichage' => [
            'matin' => 'Matin (8h - midi)',
            'apresmidi' => 'Après-midi (14h - 18h)',
            'soiree' => 'Soirée (20h - minuit)'
        ],
        'horaires' => [
            'matin' => [
                'heure_debut' => '08:00',
                'heure_fin' => '12:00',
            ],
            'apresmidi' => [
                'heure_debut' => '14:00',
                'heure_fin' => '18:00',
            ],
            'soiree' => [
                'heure_debut' => '20:00',
                'heure_fin' => '23:59',
            ]
        ]
    ];

    public static $nb_places_projections =  4;



	protected $table = 'projections';

	public function salle() {
		return $this->belongsTo("Salle");
	}

	public function film() {
		return $this->belongsTo("Film");
	}


    public static function creneauDisponible($date, $creneau, $salle) {
        $result = DB::table('salles')
            ->join('projections', 'salles.id', '=', 'projections.salle_id')
            ->where('projections.creneau', '=', $creneau)
            ->where('projections.date_projection', '=', $date)
            ->where('projections.salle_id', '=', $salle)
            ->get();
        if($result == null)
            return true;
        else
            return false;
    }

    public function participants() {
        return $this->belongsToMany('Participant');
    }

    public function hasParticipant($idParticipant) {
        foreach($this->participants as $participant) {
            if($participant->id == $idParticipant) return true;
        }
        return false;
    }

    public function assignParticipant($participant) {
        $this->participants()->attach($participant);
    }

    public function removeParticipant($participant) {
        $this->participants()->detach($participant);
    }

    public function bookPlaces($places) {
        $this->places_disponibles = $this->places_disponibles - $places;
        $this->places_reservees = $this->places_reservees + $places;
        $this->save();
    }

    public function cancelPlaces($places = 1) {
        $this->places_disponibles = $this->places_disponibles + $places;
        $this->places_reservees = $this->places_reservees - $places;
        $this->save();
    }

}
