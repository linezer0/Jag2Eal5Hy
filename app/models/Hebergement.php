<?php

class Hebergement extends \Eloquent {

	protected $fillable = ['no_siret','nom','adresse','etoiles','type_hebergement','nom_contact','mail_contact','created_at', 'updated_at'];
	protected $primaryKey = 'no_siret';
	public static $rules = [
				'no_siret' => 'required|unique:hebergements|size:14',
				'nom' => 'required',
				'adresse' => 'required',
				'etoiles' => 'required',
				'type_hebergement' => 'required',
				'services' => 'required',
				'nom_contact' => 'required',
				'mail_contact' => 'required|email'
				];

				public static $etoiles = [0, 1, 2, 3, 4, 5];


				public static $type_hebergement = [
						'hotel' => 'Hotel',
						'auberge' => 'Auberge',
						'villa' => 'Villa',

				];

				public function services() {
					return $this->belongsToMany('Service', 'hebergement_service','hebergement_no_siret', 'service_id');
				}

				public function hasService($libelle) {
					foreach($this->services as $service) {
						if($service->libelle == $libelle) return true;
					}
					return false;
				}

				public function assignService($service) {
					$this->services()->attach($service);
				}

				public function removeService($services) {
					$this->services()->detach($service);
				}
				public function chambres() {
					return $this->hasMany('Chambre','hebergement_no_siret');
				}

	protected $table = 'hebergements';

}
