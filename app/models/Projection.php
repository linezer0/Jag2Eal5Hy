<?php

class Projection extends \Eloquent {

	protected $fillable = ['date_seance', 'heure_debut', 'heure_fin', 'salle_id', 'film_id'];

	public static $rules = [
		'date_seance' => 'required',
		'heure_debut' => ['required', 'regex:/^(([0-1]?[0-9])|([2][0-3])):([0-5]?[0-9])(:([0-5]?[0-9]))?+$/i'],
		'heure_fin' => ['required', 'regex:/^(([0-1]?[0-9])|([2][0-3])):([0-5]?[0-9])(:([0-5]?[0-9]))?+$/i']
	];

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

	protected $table = 'projections';

	public function salle() {
		return $this->belongsTo("Salle");
	}

	public function film() {
		return $this->belongsTo("Film");
	}
}