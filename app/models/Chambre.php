<?php

class Chambre extends \Eloquent {
	protected $fillable = ['hebergement_no_siret','libelle','capacite','type_chambre','prix_chambre'];

	public static $rules = [
			'hebergement' => 'required',
			'libelle' => 'required|between:1,30',
			'capacite' => 'required',
			'type_chambre' => 'required',
			'prix_chambre' => 'required'
	];

	public static $type_chambre = [
			'simple' => 'Simple',
			'double' => 'Double',
			'suite' => 'Suite'

	];
	protected $table='chambres';

	public function hebergement() {
		return $this->belongsTo('Hebergement', 'hebergement_no_siret');
	}




}
