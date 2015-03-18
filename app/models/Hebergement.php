<?php

class Hebergement extends \Eloquent {
	protected $fillable = ['no_siret','nom','adresse','etoiles','type_hebergement','nom_contact','mail_contact','created_at', 'updated_at'];

	public static $rules = [
		'no_siret' => 'required|unique:hebergements',
				'nom' => 'required',
				'adresse' => 'required',
				'etoiles' => 'required',
				'type_hebergement' => 'required',
				'nom_contact' => 'required',
				'mail_contact' => 'required|email'];

				public static $etoiles = [0, 1, 2, 3, 4, 5];


				public static $type_hebergement = [
						'hotel' => "Hotel",
						'auberge' => 'Auberge',
						'villa' => 'Villa',

				];





	protected $table = 'hebergements';

}
