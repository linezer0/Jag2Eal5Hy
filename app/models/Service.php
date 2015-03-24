<?php

class Service extends \Eloquent {
	protected $fillable = ['libelle'];

	public function hebergements() {
		return $this->belongsToMany('Hebergement');
	}

	public function hasHebergement($no_siret) {
		foreach($this->hebergements as $hebergement) {
			if($hebergement->no_siret == $no_siret) return true;
		}
		return false;
	}

	public function assignHebergement($hebergement) {
		$this->hebergements()->attach($hebergement);
	}

	public function removeHebergement($hebergement) {
		$this->hebergements()->detach($hebergement);
	}

}
